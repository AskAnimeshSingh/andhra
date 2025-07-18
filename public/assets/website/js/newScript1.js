// /**
//  * PRELOAD
//  *
//  * loading will be end after document is loaded
//  */

// document.addEventListener('DOMContentLoaded', function () {
//   // Your JavaScript code here

// const preloader = document.querySelector("[data-preaload]");

// // Get the preloader container and images
// const preloadContainer = document.getElementById('preload-container');
// const preloadImages = document.querySelectorAll('#preload-container img');

// // Function to fade out the preloader container
// function fadeOutPreloader() {
//   preloadContainer.style.opacity = '0';
//   setTimeout(() => {
//     preloadContainer.style.display = 'none';
//   }, 1000);
// }

// // Event listener for when all images are loaded
// window.addEventListener('load', function () {
//   // Set a timeout to ensure a smooth transition
//   setTimeout(fadeOutPreloader, 500);
// });

// window.addEventListener("load", function () {
//   preloader.classList.add("loaded");
//   document.body.classList.add("loaded");
// // });
// // });

// document.addEventListener("DOMContentLoaded", function () {
//   // document.getElementById("loader").style.display = "none";
//   // document.getElementById("content").style.display = "block"
//   setTimeout(function () {
//     document.getElementById("loader").style.display = "none";
//     document.getElementById("content").style.display = "block"
//   }, 3000)
// })



/**
 * add event listener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}



/**
 * NAVBAR
 */

document.addEventListener('DOMContentLoaded', function () {
  setActiveNavLink();
});

function setActiveNavLink() {
  const pathName = window.location.pathname;
  console.log('Current Path Name:', pathName);
  const navLinks = document.querySelectorAll('.navbar-link');

  navLinks.forEach(link => {
    const linkPath = link.getAttribute('href');
    console.log('Link Path:', linkPath);
    if (pathName.endsWith(linkPath)) {
      link.classList.add('active');
      link.classList.add('active-hover');
    } else {
      link.classList.remove('active');
      link.classList.remove('active-hover');
    }
  });
}

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNavbar);


/**
 * HEADER & BACK TOP BTN
 */

// const header = document.querySelector("[data-header]");
// const backTopBtn = document.querySelector("[data-back-top-btn]");

// let lastScrollPos = 0;

// const hideHeader = function () {
//   if (isScrollBottom && !header.classList.contains("hide")) {
//     header.classList.add("hide");
//   } else if (!isScrollBottom && header.classList.contains("hide")) {
//     header.classList.remove("hide");
//   }

//   lastScrollPos = window.scrollY;
// }

// window.addEventListener("scroll", function () {
//   if (window.scrollY >= 50) {
//     header.classList.add("active");
//     backTopBtn.classList.add("active");
//     hideHeader();
//   } else {
//     header.classList.remove("active");
//     backTopBtn.classList.remove("active");
//     header.classList.remove("active"); // Ensure the header is not hidden when scrolling to the top
//   }
// });


// header.addEventListener('mouseenter', function () {
//   header.classList.add('active');
// });

// header.addEventListener('mouseleave', function () {
//   header.classList.remove('active');
// });

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  var header = document.getElementById("myHeader");
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    header.classList.add("active"); /* Add active class when scrolled beyond 50px */
  } else {
    header.classList.remove("active"); /* Remove active class otherwise */
  }
}


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
 * auto slide
 */

// let autoSlideInterval;

// const autoSlide = function () {
//   autoSlideInterval = setInterval(function () {
//     slideNext();
//   }, 7000);
// }

// addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseover", function () {
//   clearInterval(autoSlideInterval);
// });

// addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseout", autoSlide);

// window.addEventListener("load", autoSlide);


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

/**
 * BRANCHES
 */

// let items = document.querySelectorAll('.slider .item');
// let active = 2;
// function loadShow() {
//   items[active].style.transform = `none`;
//   items[active].style.zIndex = 1;
//   items[active].style.filter = 'none';
//   items[active].style.opacity = 1;
//   // show after
//   let stt = 0;
//   for (var i = active + 1; i < items.length; i++) {
//     stt++;
//     items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
//     items[i].style.zIndex = -stt;
//     items[i].style.filter = 'blur(5px)';
//     items[i].style.opacity = stt > 2 ? 0 : 0.6;
//   }
//   stt = 0;
//   for (var i = (active - 1); i >= 0; i--) {
//     stt++;
//     items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
//     items[i].style.zIndex = -stt;
//     items[i].style.filter = 'blur(5px)';
//     items[i].style.opacity = stt > 2 ? 0 : 0.6;
//   }
// }
// loadShow();
// let bnext = document.getElementById('b-next');
// let bprev = document.getElementById('b-prev');
// bnext.onclick = function () {
//   active = active + 1 < items.length ? active + 1 : active;
//   loadShow();
// }
// bprev.onclick = function () {
//   active = active - 1 >= 0 ? active - 1 : active;
//   loadShow();
// }


// // Add click event listeners for all five images
// document.getElementById('branch1').addEventListener('click', function () {
//   window.location.href = 'branch1.html';
// });

// document.getElementById('branch2').addEventListener('click', function () {
//   window.location.href = 'branch2.html';
// });

// document.getElementById('branch3').addEventListener('click', function () {
//   window.location.href = 'branch3.html';
// });

// document.getElementById('branch4').addEventListener('click', function () {
//   window.location.href = 'branch4.html';
// });

// document.getElementById('branch5').addEventListener('click', function () {
//   window.location.href = 'branch5.html';
// });


// document.addEventListener('DOMContentLoaded', function () {
//   const boxes = document.querySelectorAll('.box');

//   window.addEventListener('scroll', checkBoxes);

//   function checkBoxes() {
//     const triggerBottom = (window.innerHeight / 5) * 4;

//     boxes.forEach((box) => {
//       const boxTop = box.getBoundingClientRect().top;

//       if (boxTop < triggerBottom) {
//         box.classList.add('show');
//       } else {
//         box.classList.remove('show');
//       }
//     });
//   }
// });


