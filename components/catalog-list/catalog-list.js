import { changeCatalog, objFromSearch } from '../../assets/scripts/functions';

(()=>{

    try{
        const catalogEl = document.querySelector('#catalog');
    if( !catalogEl ) return;
    const args = window.location.search;

    changeCatalog(args);
    if( !args ) return;
    
    const { sort } = objFromSearch(args);
    document.querySelector(`[value="${ sort }"]`).selected = true
    }catch( error ) {
        alert(error);
    }


})();