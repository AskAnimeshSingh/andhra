const imagesData = [
    'public/assets/website/indexImages/award3.png',
    'public/assets/website/indexImages/award4.png',
    'public/assets/website/indexImages/award1.png',
    'public/assets/website/indexImages/award2.png',
    'public/assets/website/indexImages/award6.png',
    'public/assets/website/indexImages/award5.jpeg',
];

const dom = {
    btnNext: document.querySelector('.btnnext'),
    btnPrev: document.querySelector('.btnprev'),
    imgContainer: document.querySelector('.rimages'),
    cur: 0,
    imgHeight: 700, // Adjust as needed
    isAuto: true
};

// Set the height of the image container
dom.imgContainer.style.height = dom.imgHeight + 'px';

// Generate image elements and append them to the container
dom.imgContainer.innerHTML = imagesData.map(url => `<img src="${url}" alt="slider image">`).join('');

// Attach event listeners to buttons
dom.btnNext.addEventListener('click', () => handleBtnChangeImg());
dom.btnPrev.addEventListener('click', () => handleBtnChangeImg('prev'));

// Function to handle button click
function handleBtnChangeImg(dir = 'next') {
    dom.isAuto = false;
    changeImage(dir);
}

// Function to change image
function changeImage(dir) {
    if (dir == 'next') {
        dom.cur++;
        if (dom.cur >= imagesData.length) {
            dom.cur = 0;
        }
    } else {
        dom.cur--;
        if (dom.cur < 0) {
            dom.cur = imagesData.length - 1;
        }
    }

    // Move the image container by the height of one image
    dom.imgContainer.style.top = -1 * dom.imgHeight * dom.cur + 'px';
}

// Automatic sliding
setInterval(() => {
    if (dom.isAuto) {
        changeImage('next');
    }
}, 4000);
