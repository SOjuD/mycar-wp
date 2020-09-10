import { addModels, addCars, sendFeedback, setCarToCredit, calcMinCreditPay } from '../../assets/scripts/functions';

(()=>{
    const form = document.querySelector('#kreditForm');

    if(!form) return;
    
    const percent = form.dataset.percent;
    
    form.addEventListener('change', async (evt)=>{
        const elem = evt.target;

        if(elem.name == 'mark') addModels(elem.value, form); 
        if(elem.name == 'model') addCars(elem.value, form); 
        if(elem.name == 'car')  {
            const id = elem.querySelector('option:checked').dataset.id;
            setCarToCredit(id, form);
        }

        elem.classList.remove('error');
    });

    form.addEventListener('input', async (evt)=>{
        const elem = evt.target;
        
        if(elem.type == 'range'){
            const counterEl = elem.closest('.rangeWrapper').querySelector('.rangeVal');
            counterEl.textContent = elem.value;

            const price = parseInt( form.querySelector('.priceByn').textContent, 10 );
            const months = form.querySelector('#creditTime-range').value;
            const prePay = form.querySelector('#aanbetaling-range').value;


            const minPay = calcMinCreditPay (percent, months, price, prePay);
        
            form.querySelector('#creditCalc-price').textContent = `${minPay} р.`;
        }

        elem.classList.remove('error');
    });

    form.addEventListener('submit',sendFeedback)
    



})();