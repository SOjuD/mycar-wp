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

        const infoEl = modal.querySelector('[name="info"]');
        const title = button.textContent;
        const description = button.dataset.description || title;

        infoEl.value = description;
        if( button.textContent.indexOf('выкуп')+1 ){
            modal.querySelector('.modal-auto').classList.remove('d-none');
        }else {
            modal.querySelector('.modal-auto').classList.add('d-none');
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

