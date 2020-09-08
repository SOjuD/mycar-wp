import M from "materialize-css"


document.addEventListener('DOMContentLoaded', function() {
    const sidenav = document.querySelector('#slide-out-contacts');
    const triggerPath = document.querySelector('.top-contactTrigger path');

    const Sidenav = M.Sidenav.init(sidenav, {
        edge: 'left',
        onOpenStart: function() {
            triggerPath.style.fill = '#ED7702';
        },
        onCloseEnd: function() {
            triggerPath.style.fill = '#fff';
        },
    });

});