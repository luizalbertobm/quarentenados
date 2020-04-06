<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162791347-1"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- social metas -->

    <title>Quarentenados</title>

    <link href="imgs/fav-icon2.png" rel="icon" type="image/x-icon" />
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Baloo+2:400,700|Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app" class="container">
        <img src="imgs/logo-qmdpi.png" height="30" alt="">
        <div class="row">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lojas</h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#inser-stores" role="tab" aria-controls="inser-stores" aria-selected="true">cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-stores-tab" data-toggle="tab" href="#list-stores" role="tab" aria-controls="list-stores" aria-selected="false">Lista</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="inser-stores" role="tabpanel" aria-labelledby="home-tab">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" v-model="store.name">
                                </div>
                                <div class="form-group">
                                    <label for="">Descrição</label>
                                    <input type="text" class="form-control" v-model="store.description">
                                </div>
                                <div class="form-group">
                                    <label for="">Link</label>
                                    <input type="text" class="form-control" v-model="store.externalLink">
                                </div>
                                <div class="form-group">
                                    <label for="">Instagram do Indicante</label>
                                    <input type="text" class="form-control" v-model="store.ig_user">
                                </div>
                                <div class="form-group">
                                    <label for="">Imagem</label>
                                    <input type="text" class="form-control" v-model="store.image">
                                </div>
                                <div class="form-group">
                                    <label for="">Telefone</label>
                                    <input type="text" class="form-control" v-model="store.phone">
                                </div>
                                <button class="btn btn-primary" @click="addStore">Adicionar</button>
                            </div>
                            <div class="tab-pane fade" id="list-stores" role="tabpanel" aria-labelledby="list-stores">
                                <table class="table teble-condensed">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Descriçao</th>
                                            <th>Indicante</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(store, index) in stores" :key="index">
                                            <td>{{store.name}}</td>
                                            <td>{{store.description}}</td>
                                            <td>{{store.ig_user}}</td>
                                            <td>
                                                <button class="btn btn-sm btn-danger" @click="removeStore(index)"> <i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-database.js"></script>
    <!-- <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-analytics.js"></script> -->
    <script src="js/firebase.js"></script>

    <script>
        const $http = axios.create({
            baseURL: 'https://quarentenados-f4227.firebaseio.com/',
            timeout: 1000,
        });
        //const insta_url = 'https://www.instagram.com/luizalbertobm/?__a=1'
        var app = new Vue({
            el: '#app',
            data: {
                stores: [],
                store: {
                    name: '',
                    description: '',
                    phone: '',
                    externalLink: '',
                    image: '',
                    ig_user: ''
                }
            },
            methods: {
                addStore() {
                    $http.post('stores.json', this.store)
                        .then(res => {
                            this.cleanStore()
                            this.getStores()
                        })
                },
                removeStore(id) {
                    $http.delete(`/stores/${id}.json`)
                        .then(res => {
                            this.getStores()
                        })
                },
                getStores() {
                    $http.get('stores.json')
                        .then(res => {
                            console.log(res.data)
                            this.stores = res.data
                        })
                },
                cleanStore() {
                    this.store = {}
                }
            },
            created() {
                this.getStores()
                axios.get('https://coronavirus-19-api.herokuapp.com/countries/portugal')
                    .then(res => {
                        console.log(res)
                        this.covid = res.data
                    })
            },
        })
    </script>


</body>

</html>