import Swiper from 'swiper';
import fancybox from '@fancyapps/fancybox';

const singleSlider = new Swiper('.single-slider', {
    slidesPerView: 1,
    on: {
      slideChange: function (){

        document.querySelector('.single-thumbnail.active').classList.remove('active');
        document.querySelector(`[data-slide="${this.activeIndex}"]`).closest('.single-thumbnail').classList.add('active');
        
      }
    }
  });

  const singleThumbs = document.querySelector('.single-thumbs');
  if(singleThumbs){
      singleThumbs.addEventListener('click', (evt) =>{

        const slideIndex = evt.target.dataset.slide;
        if(!slideIndex) return;
        singleSlider.slideTo(slideIndex);

      })
  }

  $('[data-fancybox="images"]').fancybox({
    buttons : [ 
      'thumbs',
      'close'
    ],
  });



