import M from "materialize-css";

const sidenav = document.querySelector('#slide-out');
const hamburger = document.querySelector('.hamburger');

const Sidenav = M.Sidenav.init(sidenav, {
    edge: 'right',
    onOpenStart: function() {
        hamburger.classList.add('is-active');
    },
    onCloseEnd: function() {
        hamburger.classList.toggle('is-active');
    },
});
export default Sidenav;

