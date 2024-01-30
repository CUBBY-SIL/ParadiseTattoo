let bodyElem = document.body;
let preloader = document.querySelector('.preloader');

window.addEventListener('load', function(){
    preloader.classList.add('_hidden-loader');
    bodyElem.classList.remove('hide-scrollbar');
})