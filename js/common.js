document.addEventListener('DOMContentLoaded', () => {

    const hamburger = document.querySelector('.hamburger-menu');

    const menu = document.querySelector('.header__main-menu');

    hamburger.addEventListener('click', () => {

        hamburger.classList.toggle('hamburger-menu--active');

        menu.classList.toggle('header__main-menu--active');

        if (menu.classList.contains('header__main-menu--active')) {
            document.body.style.overflowY = 'hidden';
        } else {
            document.body.style.overflowY = 'scroll';
        }

    });

    document.addEventListener('click', function (event) {

        if (!event.target.closest('.menu-item-has-children')) return;

        const menuParentItem = event.target.closest('.menu-item-has-children');

        menuParentItem.querySelector('.sub-menu').classList.toggle('sub-menu--active');

    });

});