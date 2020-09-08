import { addModels } from '../../../assets/scripts/functions';

(()=>{
    const toFilter = document.querySelector('#toFilter');
    if(!toFilter) return;

    let params = '';
    const pageLink = toFilter.dataset.location;

    
    toFilter.addEventListener('change', async (evt)=>{

        const q = params.length ? '&' : '?';
        const elem = evt.target;
        params += `${q}${elem.name}=${elem.value}`;

        if(elem.name == 'mark') addModels(elem.value, toFilter); 
    });

    toFilter.addEventListener('submit', async (evt)=>{
        evt.preventDefault();
        window.location.href = `${pageLink}${params}`;
    });


})();