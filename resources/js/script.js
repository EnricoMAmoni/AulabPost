const navbarLogo = document.querySelector('.navbar-logo-dinamico');
var scrollpos = window.scrollY;

navbarLogo.classList.remove('custom-opacity');

window.addEventListener('scroll', function(){ 

    scrollpos = window.scrollY;


    if(scrollpos > 100){
        navbarLogo.classList.add('custom-opacity');
    }
    if(scrollpos < 100){
        navbarLogo.classList.remove('custom-opacity');
    }
});