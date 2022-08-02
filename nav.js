//selectors
let header=document.querySelector('.header');
let humburgerMenu=document.querySelector('.humburger-menu');
window.addEventListener('scroll', function () {
    let windowPosition=window.scrollY > 0;
    header.classList.toggle('active', windowPosition)
})
 humburgerMenu.addEventListener('click' , function () {
    header.classList.toggle('menu-open');
})
