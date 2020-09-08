const topMenu = document.querySelector('.home .top');

if(topMenu){
    function toggleFixedClass(){
        if(window.pageYOffset > 600){
            topMenu.classList.add('fixed');
        }else{
            topMenu.classList.remove('fixed');
        }
    }
    
    toggleFixedClass();
    
    window.addEventListener('scroll', function(){
        toggleFixedClass();
    });
}
  
  
