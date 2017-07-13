$(document).ready(function () {
    $('.carousel').slick({
        adaptiveHeight: true, // makes height flexible for resizing I think
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
        fade: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: true
    });
});