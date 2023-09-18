new Swiper('.swiper',{
    //Стрелки управления
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoheight:true,
    
    loop:true,

    breakpoints: {
        
        320: {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
        670: {
            slidesPerView: 2,
            slidesPerGroup: 2,
        },
        870: {
            slidesPerView: 3,
            slidesPerGroup: 3,
        },
    },
});