import { objFromSearch, searchFromObj, changeCatalog } from '../../assets/scripts/functions';

document.addEventListener('DOMContentLoaded', function() {
    const pagginationEl = document.querySelector('#pagination');

    pagginationEl.addEventListener('click', function(evt) {
        const activeInput = document.querySelector('#pagination [name="list"]:checked');
        if( !activeInput ) return;

        let params = objFromSearch(window.location.search);
        const activePage = +activeInput.value;

        if(evt.target.classList.contains('pagination-prev') || evt.target.closest('.pagination-prev')){

            const prevPage = document.querySelector(`#pagination [value="${activePage -1}"]`);
            if(prevPage) {
                params.list = activePage -1;
            }
            
        } else if(evt.target.classList.contains('pagination-next') || evt.target.closest('.pagination-next')){

            const nextPage = document.querySelector(`#pagination [value="${activePage + 1}"]`);
            if(nextPage){
                params.list = activePage + 1;
            } 

        }

        if(!params.list || params.list == activePage) return;

        const args = searchFromObj(params);
        window.history.pushState(undefined, 'Filtered', args);
        changeCatalog(args);

    })

});