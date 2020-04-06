<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162791347-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-162791347-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- social metas -->
    <meta property="og:site_name" content="Quarentenados">
    <meta property="og:title" content="Quarentenados">
    <meta property="og:description" content="Fique safe e informado nesta quarentena">
    <meta property="og:image" content="http://www.quarentenados.com/imgs/investment-company.png">
    <meta property="og:url" content="http://www.quarentendados.com">
    <meta name="theme-color" content="#C0BDE8" />
    <title>Quarentenados</title>

    <link href="imgs/fav-icon2.png" rel="icon" type="image/x-icon" />
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Baloo+2:400,700|Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-light bg-light navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="imgs/logo-qmdpi.png" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#destaques">Destaques</a></li>
                    <li class="nav-item"><a class="nav-link" href="#noticias">Notícias</a></li>
                    <li class="nav-item"><a class="nav-link" href="#compras">Compras</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tecnologia">Tecnologia</a></li>
                    <li class="nav-item"><a class="nav-link" href="#map">Mapa de disseminação</a></li>
                    <li class="nav-item"><a class="nav-link" href="#videos">Videos</a></li>
                </ul>
            </div>
        </nav>
        <div class="container mt-4">

            <p class=""><strong>Situação atual em Portugal:</strong></p>
            <div class="info">
                <div class="row">
                    <div class="col-3 col-md-2 mb-4">
                        <div class="neumorphism p-3 h-100 w-100 d-inline-block text-success">
                            <div class="size24"><strong>{{covid.recovered | numberFormat}}</strong></div>
                            <strong>Curados</strong>
                        </div>
                    </div>
                    <div class="col-3 col-md-2 mb-4">
                        <div class="neumorphism p-3 h-100 w-100 d-inline-block">
                            <div class="size24">{{covid.cases | numberFormat}}</div>
                            Confirmados
                        </div>
                    </div>
                    <div class="col-3 col-md-2 mb-4">
                        <div class="neumorphism p-3 h-100 w-100 d-inline-block">
                            <div class="size24">{{covid.active  | numberFormat}}</div>
                            Ativos
                        </div>
                    </div>
                    <div class="col-3 col-md-2 mb-4">
                        <div class="neumorphism p-3 h-100 w-100 d-inline-block">
                            <div class="size24">{{covid.critical | numberFormat}}</div>
                            Críticos
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism news">
                            <img src="imgs/24-h.png" alt="img">
                            <div>
                                <strong>Ajuda</strong> <br> Sente tosse, febre ou falta de ar? Ligue <strong>SNS24 808 24 24 24</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="highlight">
                <h2 id="destaques">Destaques</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="neumorphism news">
                            <img src="imgs/entrega.png" alt="img">
                            <div>
                                <a target="_blank" href="https://forms.gle/VZNVUiBRZfiBdvf19">
                                    <strong>Entregas</strong>
                                    <br>Faz entregas ao domicílio ou sabe quem faça? Faça sua recomendação!
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="neumorphism news">
                            <img src="imgs/banco-alimentar.png" alt="img">
                            <div>
                                <a target="_blank" href="https://www.bancoalimentar.pt/bancos/oeste/">
                                    <strong>Ajuda</strong>
                                    <br>Banco alimentar do Oeste
                                    <br><small>Caldas da Rainha - 262 838 224 | 926 835 535/545</small>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="neumorphism news">
                            <img src="imgs/vizinho-amigo.png" alt="img">
                            <div>
                                <a target="_blank" href="https://www.facebook.com/Vizinho-Amigo-111145073840476/">
                                    <strong>Vizinho Amigo</strong>
                                    <br>Jovens voluntários prontos pra ajudar quem precisa
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/live-nossa-colab.jpg)">
                        </div>
                        <a target="_blank" href="https://www.sympla.com.br/como-ser-camaleao-na-crise-do-coronavirus__830077" class="description size24">
                            Papo colaborativo online. Clique aqui pra se inscrever.
                        </a>
                        <br>
                        <a target="_blank" href="https://www.instagram.com/heleni.barreto/" class="description size24">
                            <small>Recomendado por: Heleni Barreto</small>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/donation.jpg)">
                        </div>
                        <a target="_blank" href="https://www.instagram.com/anahcremonese/" class="description size24">
                            Coleta de alimentos para famílias em necessidade. Falar com Anah Cremonese e Alexandra.
                            <br> <small>351 914 128 532</small>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/jobs.png)">
                        </div>
                        <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdg8s0-15XCe7vCX7gBRRJZhb9F7YEfeMzcFmj0yeXk1-0Xlw/viewform?usp=sf_link/" class="description size24">
                            Está sem emprego por causa da crise do Covid-19? Cadastre-se nesse formulário! Divulgaremos vagas em breve!
                        </a>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2 id="noticias">Notícias</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="neumorphism news">
                            <img src="imgs/remote-job.png" alt="img">
                            <div>
                                <a target="_blank" href="https://medium.com/aliados-the-challenges-consulting/covid-19-o-que-podem-fazer-as-empresas-perante-este-desafio-8c9710015da9">
                                    <br><strong>Negócios</strong>
                                    <br>Covid-19, o que podem fazer as empresas diante deste desafio?
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="neumorphism news">
                            <img src="imgs/picodovirus.png" alt="img">
                            <div>
                                <a target="_blank" href="https://www.publico.pt/2020/03/28/sociedade/noticia/especialista-mudanca-hora-aumenta-risco-infeccao-1909927">
                                    <br><strong>Rotina</strong>
                                    <br>Mudança da hora aumenta risco de infecção
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="neumorphism news">
                            <img src="imgs/remote-job.png" alt="img">
                            <div>
                                <a target="_blank" href="https://www.publico.pt/2020/03/27/sociedade/noticia/coronavirus-pico-surto-portugal-sera-mes-maio-1909818">
                                    <br><strong>Corona</strong>
                                    <br>Pico do surto em Portugal nunca será antes de maio
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section">
                <h2 id="compras">Onde comprar online</h2>

                <div class="row">
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/casaantero.png)">
                        </div>
                        <a target="_blank" href="https://www.instagram.com/casaantero/" class="description size24">
                            Casa Antero
                            <br>
                            <small>Encomendas até às 10h.</small>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/saudaveissemculpa.png)">
                        </div>
                        <a target="_blank" href="https://www.instagram.com/saudaveissemculpa/" class="description size24">
                            Sem Culpa
                            <br>
                            <small>Bolos Saudáveis, muffins, muffins xl e fatia.</small>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/leef.jpg)">
                        </div>
                        <a target="_blank" href="https://www.instagram.com/leefyourlife/" class="description size24">
                            Leef
                            <br>
                            <small>Entregas Terça e sextas</small>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/eusebio.png)">
                        </div>
                        <a target="_blank" href="https://www.instagram.com/eusebioshamburgueria/" class="description size24">
                            Eusebio Hamburgueria
                            <br>
                            <small>Pedidos de 16 as 24h</small>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/mercachefe.jpg)">
                        </div>
                        <a target="_blank" href="https://mercachefe.pt/pt/" class="description size24">
                            MercaChefe
                            <br>
                            <small>Hipermercado</small>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/auchan.png)">
                        </div>
                        <a target="_blank" href="https://auchan.queue-it.net/?c=auchan&e=auchan01&t=https%3A%2F%2Fwww.auchan.pt%2FFrontoffice&cid=pt-PT" class="description size24">
                            Auchan
                            <br>
                            <small>Hipermercado</small> <br>
                            <small>Entregas previstas para 31 de abril</small>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/art-bake.png)">
                        </div>
                        <a target="_blank" href="#" class="description size24">
                            Art Bake - Bolos caseiros
                            <br>
                            <small>Pegar no local</small>
                            <br><small>917 378 117</small>
                        </a>
                    </div>
                </div>
            </div>


            <div class="section">
                <h2 id="tecnologia">Tecnologia</h2>

                <div class="row">
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/queroajudar.png)">
                        </div>
                        <a target="_blank" href="https://app.queroajudar.org//" class="description size24">
                            Quero ajudar! Uma aplicação portuguesa de entreajuda comunitária
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/vizinho.png)">
                        </div>
                        <a target="_blank" href="https://sosvizinho.pt/" class="description size24">
                            Ajuda à grupos de risco.
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/help.png)">
                        </div>
                        <a target="_blank" href="#" class="description size24">
                            Ajuda para grupos de risco. Compras, farmácia e etc (Tornada e Salir do Porto)
                            <br><small>910 422 918</small>
                        </a>
                    </div>


                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/covidografia.png)">
                        </div>
                        <a target="_blank" href="https://covidografia.pt/" class="description size24">
                            Um app para verificar os sintomas dos Portugueses ( Cadastro apenas pela conta do Facebook)
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/quarentena.f40da744.png)">
                        </div>
                        <a target="_blank" href="https://covidapp.pt/about/home" class="description size24">
                            Monitorize os seus sintomas do COVID-19 de forma segura e gratuita!
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="neumorphism box mb-3" style="background-image: url(imgs/covideapp.png);">
                        </div>
                        <a target="_blank" href="http://covidapp.ufsc.br/" class="description size24">
                            CovidApp - Como ajudar no controle da Pandemia do Corona Vírus?
                        </a>
                    </div>

                </div>


                <div class="section">
                    <h2 id="Para o seu negócio">Para o seu negócio</h2>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="neumorphism box mb-3" style="background-image: url(imgs/investment-company.png)">
                            </div>
                            <a target="_blank" href="https://medium.com/@igor_73854/a-crise-do-coronavirus-vai-quebrar-minha-empresa-e-agora-como-se-transformar-em-4-passos-20c30ebb7d3b" class="description size24">
                                A crise do coronavirus vai quebrar minha empresa, e agora? Como se transformar em 4 passos.
                            </a>
                        </div>
                        <div class="col-md-4">
                            <div class="neumorphism box mb-3" style="background-image: url(imgs/corona-o-que-voce-precisa-saber.png)">
                            </div>
                            <a target="_blank" href="https://www.publico.pt/2020/03/27/sociedade/noticia/precisa-saber-hoje-coronavirus-1909913" class="description size24">
                                O que você precisa saber hoje sobre o coronavírus
                            </a>
                        </div>
                        <div class="col-md-4">
                            <div class="neumorphism box mb-3" style="background-image: url(imgs/corona-news.png)">
                            </div>
                            <a target="_blank" href="https://covid19.min-saude.pt/ponto-de-situacao-atual-em-portugal/" class="description size24">
                                Ponto de Situação Atual em Portugal
                            </a>
                        </div>
                    </div>
                </div>

                <div class="business" id="map">
                    <h2 class="mt-5">Mapa da disseminação</h2>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="">
                                <iframe class="" src="https://www.bing.com/covid/local/portugal" frameborder="0" style="width: 100%; height: 600px" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="promotions" id="videos">
                    <h2 class="mt-5">Videos</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="neumorphism">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" style="border-radius: 15px; " src="https://www.youtube.com/embed/4yIR2rxwV-0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <p class="description size24">
                                Mudanças de hábitos dos brasileiros nos primeiros dias de Coronavírus
                            </p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="neumorphism">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ra7i39lotk4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div>
                            </div>
                            <p class="description size24">
                                Atila Iamarino comenta teorias relacionadas à origem do novo coronavírus
                            </p>
                        </div>
                    </div>
                </div>

                <div class="health">

                </div>

                <div class="food">

                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">{{news.title}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe id="iframe" style="border:none; width:100%; height:350px" :src="news.externalLink"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
    <script type="text/javascript" src="js/app.js"></script>

</body>

</html>