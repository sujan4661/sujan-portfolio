// home page typed js
var typed = new Typed(".element", {
    strings: [
        "a full stack web developer",
        "using Laravel, ReactJS, VueJS, NodeJS",
        " learning new stuff daily",
    ],
    typeSpeed: 50,
    backSpeed: 50,
    loop: true,
});

// owl carousal
$(".experiences").owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    mouseDrag: true,
    nav: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 4,
        },
    },
});

// clint section
$(".details").owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    mouseDrag: true,
    nav: false,
    dots: true,
    items: 1,
});

// mixitup
var mixer = mixitup(".filter");

// aos plagin
AOS.init();
// wow.js
new WOW().init();