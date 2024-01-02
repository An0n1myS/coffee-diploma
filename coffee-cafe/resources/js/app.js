import './bootstrap';
const swiper = new Swiper('.swiper', {
    // Optional parameters

    loop: true,
    slidesPerView: 1,
    spaceBetween:100,
    speed: 400,


    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});
