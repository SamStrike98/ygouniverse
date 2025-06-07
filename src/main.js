document.addEventListener('DOMContentLoaded', () => {

const hamburger = document.querySelector(".hamburger");
const cross = document.querySelector(".cross");
const mobileNav = document.querySelector(".mobile_nav");
const hamburgerContainer = document.querySelector(".hamburger_container");

hamburger.addEventListener('click', () => {
    console.log('hamburger clicked');
    hamburger.classList.toggle('hidden');
    cross.classList.toggle('hidden');
    hamburger.classList.toggle('flex');
    cross.classList.toggle('flex');
    mobileNav.classList.toggle('hidden');
    mobileNav.classList.toggle('flex'); 
    hamburgerContainer.classList.toggle('fixed');   
    hamburgerContainer.classList.toggle('absolute');
});

cross.addEventListener('click', () => {
    console.log('cross clicked');
    cross.classList.toggle('hidden');
    hamburger.classList.toggle('hidden');
    hamburger.classList.toggle('flex');
    cross.classList.toggle('flex');
    mobileNav.classList.toggle('hidden');
    mobileNav.classList.toggle('flex');
    hamburgerContainer.classList.toggle('fixed');
    hamburgerContainer.classList.toggle('absolute');
});
});