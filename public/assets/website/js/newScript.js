/**
 * add event listener on multiple elements
 */
// const addEventOnElements = function (elements, eventType, callback) {
//   for (let i = 0, len = elements.length; i < len; i++) {
//     elements[i].addEventListener(eventType, callback);
//   }
// }


// toggle
// document.addEventListener("DOMContentLoaded", function () {
//   var navOpenBtn = document.querySelector('.nav-open-btn');
//   var navbar = document.querySelector('.navbar');

//   navOpenBtn.addEventListener('click', function () {
//     navbar.classList.toggle('active');
//     navOpenBtn.classList.toggle('active');
//   });
// });

function addEventOnElements(elements, event, handler) {
  elements.forEach(function (element) {
    element.addEventListener(event, handler);
  });
}


/**
 * HEADER & BACK TOP BTN
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

let lastScrollPos = 0;

const hideHeader = function () {
  const isScrollDown = lastScrollPos < window.scrollY; // Corrected variable name
  if (isScrollDown) {
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }

  lastScrollPos = window.scrollY;
}

window.addEventListener("scroll", function () {
  if (window.scrollY >= 10) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
    hideHeader();
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});

/**
 * NAVBAR
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");
const navbarLinks = document.querySelectorAll(".navbar-link");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

const toggleActiveLink = function (clickedLink) {
  navbarLinks.forEach(link => {
    if (link !== clickedLink && link.classList.contains("active")) {
      link.classList.remove("active");
    }
  });
  clickedLink.classList.toggle("active");
}

// Added event listeners to navTogglers
addEventOnElements(navTogglers, "click", toggleNavbar);

// Added event listener to navbar links
navbarLinks.forEach(link => {
  link.addEventListener("click", function () {
    toggleActiveLink(link);
  });
});

/**
 * HERO SLIDER
 */

const heroSlider = document.querySelector("[data-hero-slider]");
const heroSliderItems = document.querySelectorAll("[data-hero-slider-item]");
const heroSliderPrevBtn = document.querySelector("[data-prev-btn]");
const heroSliderNextBtn = document.querySelector("[data-next-btn]");

let currentSlidePos = 0;
let lastActiveSliderItem = heroSliderItems[0];
let slideInterval;

const updateSliderPos = function () {
  lastActiveSliderItem.classList.remove("active");
  heroSliderItems[currentSlidePos].classList.add("active");
  lastActiveSliderItem = heroSliderItems[currentSlidePos];
}

const slideNext = function () {
  if (currentSlidePos >= heroSliderItems.length - 1) {
    currentSlidePos = 0;
  } else {
    currentSlidePos++;
  }

  updateSliderPos();
}

heroSliderNextBtn.addEventListener("click", function () {
  clearInterval(slideInterval);
  slideNext();
});

const slidePrev = function () {
  if (currentSlidePos <= 0) {
    currentSlidePos = heroSliderItems.length - 1;
  } else {
    currentSlidePos--;
  }

  updateSliderPos();
}

heroSliderPrevBtn.addEventListener("click", function () {
  clearInterval(slideInterval);
  slidePrev();
});

// Function to automatically slide to the next item
const autoSlide = function () {
  slideNext();
}

// Start automatic sliding
slideInterval = setInterval(autoSlide, 5000); // Adjust the interval as needed (5000 milliseconds = 5 seconds)



/**
 * PARALLAX EFFECT
 */

const parallaxItems = document.querySelectorAll("[data-parallax-item]");

let x, y;

window.addEventListener("mousemove", function (event) {

  x = (event.clientX / window.innerWidth * 10) - 5;
  y = (event.clientY / window.innerHeight * 10) - 5;

  // reverse the number eg. 20 -> -20, -5 -> 5
  x = x - (x * 2);
  y = y - (y * 2);

  for (let i = 0, len = parallaxItems.length; i < len; i++) {
    x = x * Number(parallaxItems[i].dataset.parallaxSpeed);
    y = y * Number(parallaxItems[i].dataset.parallaxSpeed);
    parallaxItems[i].style.transform = `translate3d(${x}px, ${y}px, 0px)`;
  }

});

