/*

    Script file for the functionality of the burger menu

*/

const burger = document.querySelector('.burger');
const burgerMenu = document.querySelector('.burgerMenu');

var infoBlockBurg = document.getElementById('infoBlock');

burger.addEventListener('click', () =>{

    if (infoBlockBurg.classList.contains('openInfoMenu') && !burgerMenu.classList.contains('openBurgerMenu')){

        burger.classList.toggle("open");
        infoBlockBurg.classList.toggle("openInfoMenu");

    }else{

        burger.classList.toggle("open");
        burgerMenu.classList.toggle("openBurgerMenu");
        console.log('here');

    }


});