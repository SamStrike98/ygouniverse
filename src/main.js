document.addEventListener('DOMContentLoaded', () => {

const hamburger = document.querySelector(".hamburger");
const cross = document.querySelector(".cross");
    const mobileNav = document.querySelector(".mobile_nav");

hamburger.addEventListener('click', () => {
    console.log('hamburger clicked');
    hamburger.classList.toggle('hidden');
    cross.classList.toggle('hidden');
    hamburger.classList.toggle('flex');
    cross.classList.toggle('flex');
    mobileNav.classList.toggle('hidden');
    mobileNav.classList.toggle('flex');    
});

cross.addEventListener('click', () => {
    console.log('cross clicked');
    cross.classList.toggle('hidden');
    hamburger.classList.toggle('hidden');
    hamburger.classList.toggle('flex');
    cross.classList.toggle('flex');
    mobileNav.classList.toggle('hidden');
    mobileNav.classList.toggle('flex');
});
});