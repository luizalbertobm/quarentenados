var app = new Vue({
    el: '#app',
    data: {
        covid: {},
        news: {
            title: '',
            externalLink: ''
        }
    },
    methods: {

    },
    filters:{
        numberFormat: function(value){
            return new Intl.NumberFormat('de-DE', { style: 'decimal'}).format(value)
        }
    },
    created() {
        axios.get('https://coronavirus-19-api.herokuapp.com/countries/portugal')
            .then(res => {
                console.log(res)
                this.covid = res.data
            })
    },
})


$('.navbar-collapse a').click(function () {
    $(".navbar-collapse").collapse('hide');
});