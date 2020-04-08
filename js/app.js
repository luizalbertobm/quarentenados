const $http = axios.create({
    baseURL: 'https://quarentenados-f4227.firebaseio.com/',
    timeout: 10000,
});
const insta_url = 'https://www.instagram.com/luizalbertobm/?__a=1'
var app = new Vue({
    el: '#app',
    data: {
        covid: {},
        user:{},
        news: [],
        stores: [],
        new: {
            title: 'Negócios',
            description: 'Covid-19, o que podem fazer as empresas diante deste desafio?',
            externalLink: 'https://medium.com/aliados-the-challenges-consulting/covid-19-o-que-podem-fazer-as-empresas-perante-este-desafio-8c9710015da9',
            image: 'http://quarentenados.com/imgs/remote-job.png'
        },
        store: {
            name: 'Casa Antero',
            description: 'Encomendas até às 10h.',
            phone: '910657140',
            externalLink: 'https://www.instagram.com/casaantero/',
            image: 'http://localhost:8888/quarentenados/imgs/casaantero.png',
            ig_user: 'luizalbertobm'
        }
    },
    methods: {
        createNews() {
            $http.post('news.json', this.new)
                .then(res => {
                    console.log(res)
                })
        },
        createStore() {
            $http.post('stores-fortaleza.json', this.store)
                .then(res => {
                    console.log(res)
                })
        },
        getStores() {
            $http.get('stores-fortaleza.json')
                .then(res => {
                    console.log(res.data)
                    this.stores = res.data
                })
        },
        saveUser(){
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
    },
    filters: {
        numberFormat: function (value) {
            return new Intl.NumberFormat('de-DE', {
                style: 'decimal'
            }).format(value)
        }
    },
    created() {
        axios.get('https://coronavirus-19-api.herokuapp.com/countries/brazil')
            .then(res => {
                console.log(res)
                this.covid = res.data
            })
    },
})


$('.navbar-collapse a').click(function () {
    $(".navbar-collapse").collapse('hide');
});