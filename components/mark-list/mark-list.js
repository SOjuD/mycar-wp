import Swiper from 'swiper';



const linksSlider = new Swiper('.swiper-links', {
    init: false,
    slidesPerView: 6,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 6,
        },
        768: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 6,
        }
    }
  });

if(Array.isArray(linksSlider)){

    linksSlider.forEach( el => {
      el.navigation.nextEl = el.$el[0].closest('.swiper-wrap').querySelector('.swiper-button-next');
      el.navigation.prevEl = el.$el[0].closest('.swiper-wrap').querySelector('.swiper-button-prev');
      el.init();
  })

}else if(linksSlider.$el){
    linksSlider.navigation.nextEl = linksSlider.$el[0].closest('.swiper-wrap').querySelector('.swiper-button-next');
    linksSlider.navigation.prevEl = linksSlider.$el[0].closest('.swiper-wrap').querySelector('.swiper-button-prev');

    linksSlider.init();
}

  




  