document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelectorAll('.mobile-menu');
    const menu = document.querySelector('.menu');
    menuToggle.forEach((element,index) => {
        element.addEventListener('click', function () {
            menu.classList.toggle('show-menu');
            menuToggle[0].classList.toggle('close-x');
        })
    });

});