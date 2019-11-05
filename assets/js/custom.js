$(document).ready(function () {
    $('.slider').slider({
        // indicators: false,
        height: 400,
        transition: 600,
        interval: 3000
    });
    $('.slider-room-content').slider({
        indicators: false,
        height: 400,
        transition: 600,
        interval: 3000
    });
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.materialboxed').materialbox();
    $('.dropdown-button').dropdown({
        coverTrigger: false,
        closeOnClick: false,
        constrainWidth: false, //untuk pas pada kotak dropdown tanpa buat css sendiri
    });
    $('.collapsible').collapsible();
});

function nextSliderRoom() {
    $('.slider-room-content').slider('next');
}

function prevSliderRoom() {
    $('.slider-room-content').slider('prev');
}

document.addEventListener("DOMContentLoaded", function () {
    $('.preloader-background').delay(1700).fadeOut('slow');

    $('.preloader-wrapper')
        .delay(1700)
        .fadeOut();
});