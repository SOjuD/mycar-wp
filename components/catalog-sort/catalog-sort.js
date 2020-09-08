function changeCatalogView (selector, trigger) {

    const elem = document.querySelector(selector);

    if( !elem ) {
        console.log( new Error('Заданный селектор не найден') );
        return;
    }
    
    if( trigger ) elem.classList.add('simple');
    else elem.classList.remove('simple');

}


export {
    changeCatalogView
}