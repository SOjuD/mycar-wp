import Swiper from 'swiper';


const carSlider = new Swiper('.swiper-ourCustomers', {
    init: false,
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        360: {
            slidesPerView: 1,
        },
        680: {
            slidesPerView: 2,
        },
        920: {
            slidesPerView: 3,
        },
        1100: {
            slidesPerView: 4,
        }
    }
  });

  if(Array.isArray(carSlider)){

      carSlider.forEach( el => {
        el.navigation.nextEl = el.$el[0].closest('.swiper-wrap').querySelector('.swiper-button-next');
        el.navigation.prevEl = el.$el[0].closest('.swiper-wrap').querySelector('.swiper-button-prev');
        el.init();
    })

  }else if(carSlider.$el){

      carSlider.navigation.nextEl = carSlider.$el[0].closest('.swiper-wrap').querySelector('.swiper-button-next');
      carSlider.navigation.prevEl = carSlider.$el[0].closest('.swiper-wrap').querySelector('.swiper-button-prev');

      carSlider.init();
  }
