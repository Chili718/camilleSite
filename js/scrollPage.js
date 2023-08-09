const container = document.getElementById('scroll-container');
const items = document.querySelectorAll('.scroll-item');
var pageContent = document.getElementById('pageContent');
//starting index of the gallery is the first scroll item
//could be used to account for returning to the last viewed element
var elementIndex = 0;
//distance to move the gallery up or down
var translateDistance = 0;

container.addEventListener('wheel', (event) => {
    event.preventDefault();
    const delta = event.deltaY;
    //console.log(delta);

    if(event.deltaY > 0 && elementIndex < items.length-1){

        console.log('Scroll Down');
        elementIndex++;

    } else if (event.deltaY < 0 && elementIndex > 0){

        console.log('Scroll Up');
        elementIndex--;

    }

    translateDistance = elementIndex * items[0].offsetHeight * Math.sign(delta);
    
    if (translateDistance == -0)
        translateDistance = 0;

    console.log(translateDistance);

    console.log(elementIndex);
    /*container.scrollBy({
        top: delta,
        behavior: 'smooth'
    });
    */
});

function direction(dir) {

    if (dir == 'u' && elementIndex < items.length-1) {

        console.log('Scroll Down');
        elementIndex++;
        translateDistance = elementIndex * items[0].offsetHeight;

    } else if (dir == 'd' && elementIndex > 0) {

        console.log('Scroll Up');
        elementIndex--;
        translateDistance = elementIndex * items[0].offsetHeight * -1;

    }

    if(translateDistance == -0)
        translateDistance = 0;

    console.log(translateDistance);

    console.log(elementIndex);

}

detectSwipe('scroll-container', direction);

//console.log(items[0].clientHeight);