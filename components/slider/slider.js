import Swiper from 'swiper'



new Swiper('.header-slider', {
    slidesPerView: 1,
    slidesPerColumn: 1,
    spaceBetween: 0,
    slidesPerGroup: 1,
    loop: true,
    speed: 1500,
    autoplay: {
        delay: 4000
    },
    pagination: {
      el: '.header-pagination',
      clickable: true,
    },
  });