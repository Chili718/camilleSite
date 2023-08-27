//the inner most border area that the scroll will apply to 
const container = document.getElementById('scroll-container');
//each item in the gallery
const items = document.querySelectorAll('.scroll-item');
//the container that only houses the scroll items
var pageContent = document.getElementById('pageContent');
//delay for the scrolling of the gallery to prevent a continuous scroll
var scrollDelay = false;
//starting index of the gallery is the first scroll item
//could be used to account for returning to the last viewed element
var elementIndex = 0;
//distance to move the gallery up or down
var translateDistance = 0;
//margin is not included with the height method so this must be
//added to ensure the images are in the same position after each scroll
var scrollItemMargin = 18;

container.addEventListener('wheel', (event) => {
    //prevent normal scroll wheel behavior
    event.preventDefault();
    //will only scroll if the timeout funciton has executed or its the first scroll
    if(scrollDelay == false){

        const delta = event.deltaY;
        //console.log(delta);

        if (event.deltaY > 0 && elementIndex < items.length - 1) {

            //console.log('Scroll Down');
            elementIndex++;
            translateDistance += (items[0].getBoundingClientRect().height + scrollItemMargin) * -1;

        } else if (event.deltaY < 0 && elementIndex > 0) {

            //console.log('Scroll Up');
            elementIndex--;
            translateDistance += (items[0].getBoundingClientRect().height + scrollItemMargin);
        }
        //add translate style to the gallery content
        pageContent.style.transform = 'translate3d(0px, ' + translateDistance + 'px, 0px)';
        //prevent user from scrolling again until animation is done playing
        scrollDelay = true;
        //set timed function to allow the user to scroll again
        setTimeout(() => {
            scrollDelay = false;
        }, "1200");


    }

});

function direction(dir) {
    //will only scroll if the timeout funciton has executed or its the first scroll
    if(scrollDelay == false){

        if (dir == 'u' && elementIndex < items.length - 1) {

            //console.log('Scroll Down');
            elementIndex++;
            translateDistance += (items[0].getBoundingClientRect().height + scrollItemMargin) * -1;

        } else if (dir == 'd' && elementIndex > 0) {

            //console.log('Scroll Up');
            elementIndex--;
            translateDistance += items[0].getBoundingClientRect().height + scrollItemMargin;

        }
        //add translate style to the gallery content
        pageContent.style.transform = 'translate3d(0px, ' + translateDistance + 'px, 0px)';
        //prevent user from scrolling again until animation is done playing
        scrollDelay = true;
        //set timed function to allow the user to scroll again
        setTimeout(() => {
            scrollDelay = false;
        }, "1500");

    }

}
//add swipe detection to the scrolling container on main page and have it play scroll function
detectSwipe('scroll-container', direction);