/*

    Script file for the functionality of the burger menu

*/

const burger = document.querySelector('.burger');
const burgerMenu = document.querySelector('.burgerMenu');

burger.addEventListener('click', () =>{

    burger.classList.toggle("open");
    burgerMenu.classList.toggle("openBurgerMenu");

});