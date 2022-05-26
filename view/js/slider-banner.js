let slideIndex = 1;
clickImg(slideIndex);

function pushSlides(slide) {
    clickImg(slideIndex += slide);
}


function clickImg(slide) {
    let i;
    let slides = document.getElementsByClassName("slider-item");
    if (slide > slides.length) {
        slideIndex = 1;
    }
    if (slide < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

// let slideIndex = 0;
autoImg();

function autoImg() {
    let i;
    let slides = document.getElementsByClassName("slider-item");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(autoImg, 6000);
}