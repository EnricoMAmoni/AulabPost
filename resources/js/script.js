const navbarLogo = document.querySelector('.navbar-logo-dinamico');
var scrollpos = window.scrollY;

window.addEventListener('scroll', function(){ 

    scrollpos = window.scrollY;

    if(scrollpos > 170){
        navbarLogo.classList.remove('d-none');
    }
    if(scrollpos < 170){
        navbarLogo.classList.add('d-none');
    }
});