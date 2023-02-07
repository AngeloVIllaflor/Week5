
// LESSON 1 - COMMENT // 
window.addEventListener('DOMContentLoaded', event => {

    // LESSON 2 - CONST //
    const sideNav = document.body.querySelector('#sideNav');
    if (sideNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#sideNav',
            offset: 74,
        });
    };

   // LESSON 22 - DOCUMENT //
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    // LESSON 27 - QUERY SELECTORS //
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        // LESSONS 11 - MAPS //
        responsiveNavItem.addEventListener('click', () => {
            // LESSON 23 - WINDOW // 
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});
