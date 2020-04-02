var app = new Vue({
    el: '#app',
    data: {
        time: '',
        date: '',
        news: {
            title: '',
            externalLink: ''
        }
    },
    methods: {
        loadModal(event) {
            event.preventDefault()
            let target = event.target
            console.log('href:')
            console.log(target.href)
                //return
            this.news.title = target.textContent
            this.news.externalLink = target.href
            //document.getElementById('iframe').contentWindow.location.reload();

            $('#myModal').modal('show')
        }
    },
})

var week = ['DOM', 'SEG', 'TER', 'QUA', 'QUI', 'SEX', 'SAB'];
var timerID = setInterval(updateTime, 1000);
updateTime();

function updateTime() {
    var cd = new Date();
    app.time = zeroPadding(cd.getHours(), 2) + ':' + zeroPadding(cd.getMinutes(), 2);
    app.date = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth() + 1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ' + week[cd.getDay()];
    app.date = `${week[cd.getDay()]} - ${zeroPadding(cd.getDate(), 2)}/${zeroPadding(cd.getFullYear(), 4)}/${zeroPadding(cd.getMonth() + 1, 2)}`;
};


function zeroPadding(num, digit) {
    var zero = '';
    for (var i = 0; i < digit; i++) {
        zero += '0';
    }
    return (zero + num).slice(-digit);
}