// script.js

document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.getElementById('burger-menu');
    const navbarLinks = document.getElementById('navbar-links');

    burgerMenu.addEventListener('click', () => {
        navbarLinks.classList.toggle('show');
    });

    const faqItems = document.querySelectorAll('.faq-question');
    faqItems.forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.nextElementSibling;
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        });
    });
});
