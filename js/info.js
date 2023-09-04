/*

File for displaying the information for each image of the gallery

*/
const infoBurger = document.querySelector('.burger');
//button for bringing up the information on the image
var informationButton = document.querySelector('.moreInfo');
//the block for the images information
var infoBlock = document.querySelector('.infoBlock');

document.addEventListener('click', (e)=>{

    if(e.target == informationButton){

        infoBlock.classList.toggle('openInfoMenu');
        burger.classList.toggle("open");
        //if user click on anything but the info block the menu will close
    }else if(e.target != infoBlock && infoBlock.classList.contains('openInfoMenu')){

        infoBlock.classList.toggle('openInfoMenu');
        burger.classList.toggle("open");

    }

});