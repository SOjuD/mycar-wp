import { objFromSearch, searchFromObj, addModels, changeCatalog } from '../../../assets/scripts/functions';
import { changeCatalogView } from '../../catalog-sort/catalog-sort';
import M from "materialize-css";

(()=>{
    const filter = document.querySelector('#filter');
    if(!filter) return;

    const form = filter.querySelector('#slide-out-filter');
    
    const path = window.location;


    filter.querySelector("[type='reset']").addEventListener('click', ()=> {

        if( !path.search ) return;
        
        window.history.pushState(undefined, 'Unfiltered', path.origin + path.pathname);
        filter.querySelector('[name="model"]').innerHTML = "<option selected disabled>Модели</option>";

        changeCatalog();

    });

    let params = {};
    
    filter.addEventListener('change', async (evt)=>{

        const elem = evt.target;

        if(elem.name == 'view'){
            if( elem.value == 'row' ) changeCatalogView('#catalog', true);
            else changeCatalogView('#catalog', false);
            return;
        }
        
        params[elem.name] = elem.value;
        
        if(elem.name == 'mark') addModels(elem.value, form); 
        
        if(elem.name == 'sort'){
            const args = searchFromObj(params);
            window.history.pushState(undefined, 'Filtered', args);
            changeCatalog(args);
        }

        if(elem.name == 'list'){
            const args = searchFromObj(params);
            window.history.pushState(undefined, 'Filtered', args);
            changeCatalog(args);
        }else {
            delete params.list;
        }

    });

    filter.addEventListener('submit', evt => {
        evt.preventDefault();
        const args = searchFromObj(params);
        window.history.pushState(undefined, 'Filtered', args);
        changeCatalog(args);
    })
    
    const Sidenav = M.Sidenav.init(form, {});
    const closeFilterButton = document.querySelector('#close-filter');

})();

