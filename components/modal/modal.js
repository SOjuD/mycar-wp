import M from "materialize-css";
import "jquery.maskedinput/src/jquery.maskedinput";

jQuery(function($){
	$('[name = "phone"]').mask("+375(99)999-99-99");
 });

const elems = document.querySelectorAll('.modal');
const instances = M.Modal.init(elems, {
    onOpenStart: function() {

        const button =  this._openingTrigger;
        const modal = this.el;
        // const titleEl = modal.querySelector('.modal-title');
        // const descriptionEl = modal.querySelector('.modal-description');
        const infoEl = modal.querySelector('[name="info"]');
        const title = button.textContent;
        const description = button.dataset.description;
        const info = button.dataset.info;
        // titleEl.textContent = title;
        // descriptionEl.textContent = description;
        if(title) infoEl.value = title;
        if(button.textContent == 'Оставить отзыв'){
            const textarea = modal.querySelector('textarea');
            textarea.classList.remove('d-none');
        }

    },
    onCloseEnd: function(){
        const modal = this.el;
        const textarea = modal.querySelector('textarea');
        textarea.classList.add('d-none');
        jQuery(function($){
            $('.modal-message_error').hide();
            $('.modal-message_success').hide();
        });
    }
});


const forms = document.querySelectorAll('.feedback');

forms.forEach(form => {
    form.addEventListener('submit', async evt => {
        evt.preventDefault();
        const formData = new FormData(evt.target);
        let response = await fetch('/mail.php', {
            method: 'POST',
            body: formData
          });
       if(response.status == 200){
            jQuery(function($){
                $('.modal-message_success').fadeIn();
            });
        }else{
            console.error(`error: ${response.status}`);
            jQuery(function($){
                $('.modal-message_error').fadeIn();
            });
       }
    })
});