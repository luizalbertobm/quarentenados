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