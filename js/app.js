const $http = axios.create({
    baseURL: 'https://quarentenados-f4227.firebaseio.com/',
    timeout: 10000,
});
const insta_url = 'https://www.instagram.com/luizalbertobm/?__a=1'
var app = new Vue({
    el: '#app',
    data: function () {
        return {
            covid: {},
            user: {},
            news: [],
            stores: [],
            technologies: []
        }
    },
    methods: {
        getStores() {
            $http.get('stores.json')
                .then(res => {
                    this.stores = res.data
                })
        },
        getNews() {
            $http.get('news.json')
                .then(res => {
                    this.news = res.data
                })
        },
        getTech() {
            $http.get('techno.json')
                .then(res => {
                    this.technologies = res.data
                })
        },
        saveUser() {
            $http.post('users.json', this.user)
                .then(res => {
                    $('#jobsModal').modal('hide')
                    this.user = {}
                    window.alert("Dados gravados com sucesso. Obrigado!")
                })
        }
    },
    mounted() {
        this.getStores()
        this.getNews()
        this.getTech()
    },
    filters: {
        numberFormat: function (value) {
            return new Intl.NumberFormat('de-DE', {
                style: 'decimal'
            }).format(value)
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