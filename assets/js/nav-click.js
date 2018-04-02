$(document).ready(function () {
    $('a[href="#about"]').on('click', function (){
        $('html, body').animate({scrollTop: $('#about').offset().top}, 'slow');
        console.log("teste");
    });
});