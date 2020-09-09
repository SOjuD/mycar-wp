import M from "materialize-css";
import "jquery.maskedinput/src/jquery.maskedinput";
import { sendFeedback } from '../../assets/scripts/functions';

jQuery(function($){
	$('[name = "phone"]').mask("+375(99)999-99-99");
 });

const elems = document.querySelectorAll('.modal');
const instances = M.Modal.init(elems, {
    onOpenStart: function() {

        const button =  this._openingTrigger;

        if( !button ) return;

        const modal = this.el;

        const infoEl = modal.querySelector('[name="info"]');
        const titleEl = modal.querySelector('.modal-title');
        const title = button.textContent;
        const description = button.dataset.description || title;
        

        infoEl.value = description;
        titleEl.textContent = title;

        if( button.textContent.indexOf('выкуп')+1 ) modal.querySelector('.modal-auto').classList.remove('d-none');

        const feedbackForm = modal.querySelector('.feedback');
        
        feedbackForm.addEventListener('submit', sendFeedback );

    },
    onCloseEnd: function(){
        const modal = this.el;

        modal.querySelector('.modal-auto').classList.add('d-none');

        jQuery(function($){
            $('.modal-message_error').hide();
            $('.modal-message_success').hide();
        });

        const feedbackForm = modal.querySelector('.feedback');
        
        feedbackForm.removeEventListener('submit', sendFeedback);
    }
});


