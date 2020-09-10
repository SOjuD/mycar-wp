import { addModels, addCars, sendFeedback } from '../../assets/scripts/functions';

(()=>{
    const formCar = document.querySelector('#leasingCars');
    const form = document.querySelector('#leasingForm');

    if(!formCar || !form) return;
    
    formCar.addEventListener('change', async (evt)=>{
        const elem = evt.target;
        let mark;
        if(elem.name == 'mark') addModels(elem.value, formCar); 
        if(elem.name == 'model') addCars(elem.value, formCar); 

        elem.classList.remove('error');
    });
    

    form.addEventListener('submit', async (evt)=>{

        formCar.querySelectorAll('select').forEach( el => {

            if( !el.value ) el.classList.add('error');
            else el.classList.remove('error');            
        })

        const carLink = formCar.querySelector('[name="car"]').value;
        let templ = '';
        
        form.querySelector('[name="mycar_auto"]').value = carLink;
        
        formCar.querySelectorAll('input').forEach( el => {
            
            if( !el.value ) el.classList.add('error');
            else{
                el.classList.remove('error');
                templ += `${el.value} `;
            };
        })
        
        form.querySelector('[name="customer_auto"]').value = templ;


        if(formCar.querySelectorAll('.error').length > 0) return;

        sendFeedback(evt);

    });


})();