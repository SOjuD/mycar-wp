import Sidenav from '../navigation-mobile/navigation-mobile';


let menuItems = document.querySelectorAll('.menu-item a');
menuItems = [...menuItems];

for (const menuItem of menuItems) {
    menuItem.addEventListener('click', (evt)=>{
        evt.preventDefault();
        let href = menuItem.href;
        const index = href.indexOf('#');
        if( index == -1 ) return;
        href = href.substr(index);
        const block = document.querySelector( href );
        if(!block) return;
        block.scrollIntoView({behavior: 'smooth'});
        if( Sidenav.isOpen ) Sidenav.close();
    })
}