/* var app = new Vue({
    el: '#app',
    data: {
        news: {
            title: '',
            externalLink: ''
        }
    },
    methods: {
        loadModal(event) {
            event.preventDefault()
            let target = event.target
            this.news.title = target.textContent
            this.news.externalLink = target.href
            //document.getElementById('iframe').contentWindow.location.reload();

            $('#myModal').modal('show')
        }
    },
}) */


$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});