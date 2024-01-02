import './bootstrap';
const swiper = new Swiper('.swiper', {
    // Optional parameters

    loop: true,
    slidesPerView: 1,
    spaceBetween:100,
    speed: 400,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});

const productSwiper = new Swiper('.swiper-products', {
    // Optional parameters
    slidesPerView: 4,
    spaceBetween:100,


    // Navigation arrows
    navigation: {
        nextEl: '.swiper-products-button-next',
        prevEl: '.swiper-products-button-prev',
    },

});

const newProductSwiper = new Swiper('.swiper-new-products', {
    // Optional parameters

    slidesPerView: 4,
    spaceBetween:100,


    // Navigation arrows
    navigation: {
        nextEl: '.swiper-new-products-button-next',
        prevEl: '.swiper-new-products-button-prev',
    },

});
