import './bootstrap';
import 'bootstrap';

const toggleMenu = (event) => {
    event.preventDefault(); // Evita el comportamiento predeterminado del enlace
    const menu = event.currentTarget.nextElementSibling;
    const icon = event.currentTarget.querySelector('.icon-arrow');
    menu.classList.toggle('collapsed');
    menu.classList.toggle('expanded');
    icon.classList.toggle('icon-rotated-90');
};

const main = () => {
    const toggleLinks = document.querySelectorAll('.toggle-menu');
    toggleLinks.forEach(toggleLink => {
        toggleLink.addEventListener('click', toggleMenu);
    });
};

window.addEventListener('load', main);
