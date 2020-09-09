import M from "materialize-css";


const baseURL = document.querySelector('[property="og:url"]').content;

function objFromSearch(str) {
    try{
        if( !str ) return {};
        let newStr = str.replace(/\?/ , '"');
        newStr = newStr.replace(/=/gm, '":"');
        newStr = newStr.replace(/&/gm, '","');
        return JSON.parse(`{${newStr}"}`)
    }catch(err){
        return new Error(`Неправильные параметры запроса: ${err}`);
    }
}

function searchFromObj (obj){
    let str = '';
    if( !obj ) return '';
    for (const key in obj) {
        if (obj.hasOwnProperty(key)) {
            const q = str.length ? '&' : '?';
            str += q + key +"="+ obj[key];
        }
    }
    return str;
}

async function getData (url) {
    const response = await fetch(url);
    if(response.ok) return await response.json();
    return new Error(`Ошибка получения данных, ошибка: ${response.status}`);
}

function changeCatalog( args = '' ){

    const catalogEl = document.querySelector('#catalog');
    if( !catalogEl ) return;
    
    catalogEl.innerHTML = '';
    catalogEl.classList.add('wait');
    
    document.querySelector('#catalogAnchor').scrollIntoView({behavior: 'smooth'});
    getData(`${baseURL}/wp-json/mycar/v1/posts/${args}`)
    .then( data => {
        catalogEl.innerHTML = data.cards;
        buildPagination(data.params);
    })
    .catch( err => {
        catalogEl.innerHTML = `<h2>Ошибка ответа сервера: ${err}</h2>`;
    })
    .finally(() => {
        catalogEl.classList.remove('wait');
    })
}

function buildPagination({ pages, page }){

    const paginationEl = document.querySelector('#pagination');
    if( !paginationEl ) return;

    if(pages <= 1){
        paginationEl.classList.add('d-none');
        return;
    }

    paginationEl.classList.remove('d-none');
    let template = '';
    for(let i = 1; i <= pages; i++){
        template += `
            <label>
                <input type="radio" name="list" value="${i}" ${ i == page ? 'checked' : '' }>
                <span class="c1">${i}</span>
            </label>
        `;
    }
    paginationEl.querySelector('.pagination-container').innerHTML = template;

}

async function addModels (mark, form) {    
    form.classList.add('wait');    
    try{
        const models = await getData(`${baseURL}/wp-json/wp/v2/categories/?parent=${mark}`)
        
        const modelEl = form.querySelector('[name="model"]');

        let content = '<option selected disabled value="">Модели</option>';

        if( models.length ){
            models.forEach( el => {
                content += `<option value="${el.id}">${el.name}</option>`;
            });
        }else{
            content = '<option selected disabled value="">Ничего не найдено</option>';
        }
        modelEl.innerHTML = content;
    }catch (err){
        alert(err);
    }
    form.classList.remove('wait');
}

async function addCars (label, form) {    
    form.classList.add('wait');    
    try{
        const models = await getData(`${baseURL}/wp-json/wp/v2/posts/?categories=${label}`)
        
        const carEl = form.querySelector('[name="car"]');

        let content = '<option selected disabled value="">Автомобиль</option>';

        if( models.length ){
            models.forEach( el => {
                content += `<option value="${el.link}">${el.title.rendered}</option>`;
            });
        }else{
            content = '<option selected disabled value="">Ничего не найдено</option>';
        }
        carEl.innerHTML = content;
    }catch (err){
        alert(err);
    }
    form.classList.remove('wait');
}

async function sendFeedback (evt) {

    evt.preventDefault();

    const formData = new FormData(evt.target);
    let response = await fetch('/mail.php', {
        method: 'POST',
        body: formData
      });
   if(response.status == 200){
        evt.reset();
        showSuccess();
    }else{
        showError(response.status);
   }
}

function showSuccess (){
    const elem = document.querySelector('#modalForm');
    const instance = M.Modal.getInstance(elem);
    jQuery(function($){
        $('.modal-message_success').fadeIn();
    });
    instance.open();
}
function showError (err){
    const elem = document.querySelector('#modalForm');
    const instance = M.Modal.getInstance(elem);
    console.error(`error: ${err}`);
        jQuery(function($){
            $('.modal-message_error').fadeIn();
        });
    instance.open();
}

export {
    baseURL,
    objFromSearch,
    searchFromObj,
    getData,
    changeCatalog,
    addModels,
    addCars,
    sendFeedback
}