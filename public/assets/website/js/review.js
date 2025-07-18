// Access the testimonials
let testSlide = document.querySelectorAll('.testItem');
// Access the indicators
let dots = document.querySelectorAll('.dot');

var counter = 0;
let deleteInterval; // Declare deleteInterval globally

// Add click event to the indicators
function switchTest(testId) {
    testSlide[counter].classList.remove('active');
    counter = testId;
    testSlide[counter].classList.add('active');
    indicators();
}

// Add and remove active class from the indicators
function indicators() {
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove('active');
    }
    dots[counter].classList.add('active');
}

// Code for auto sliding
function sliderNext() {
    testSlide[counter].classList.remove('active');
    if (counter >= testSlide.length - 1) {
        counter = 0;
    } else {
        counter++;
    }
    testSlide[counter].classList.add('active');
    indicators();
}

function autoSliding() {
    deleteInterval = setInterval(sliderNext, 4000); // Call sliderNext, not timer
}
autoSliding();

// Stop auto sliding when mouse is over the indicators
const container = document.querySelector('.indicators');
container.addEventListener('mouseover', pause);

function pause() {
    clearInterval(deleteInterval);
}

// Resume sliding when mouse is out of the indicators
container.addEventListener('mouseout', autoSliding);


