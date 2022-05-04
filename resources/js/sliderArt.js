let show = document.querySelectorAll(".slideshow, #overlay");
let slideIndex2;
let oeuvreId;

if (show) {

  window.openShow = function () {
    show.forEach(function (i) {
      i.style.display = "flex";
    });
  }

  window.closeShow = function () {
    show.forEach(function (i) {
      i.style.display = "none";
    });
  }
}

var slideIndex = 1;
slideArt(slideIndex);

window.plusSlides = function (n) {
  slideArt(slideIndex += n);
}
window.currentSlide = function (n) {
  slideArt(slideIndex = n);
}

function slideArt(n) {
  var slides = document.getElementsByClassName("slide-1");
  if (slides && slides.length > 0) {
    var i;
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"
      slides[i].style.opacity = "0";
    }

    slides[slideIndex - 1].style.display = "block";
    slides[slideIndex - 1].style.opacity = "1";
    setPhotoShowLocal(slides[slideIndex - 1].id)
  }
}

window.setPhotoShow = function (id) {
  setPhotoShowLocal(id)
}

function setPhotoShowLocal(id) {
  slideIndex2 = 1;
  oeuvreId = id;
  slideArt2(slideIndex2);
}

window.plusSlides2 = function (n) {
  slideArt2(slideIndex2 += n);
}
window.currentSlide2 = function (n) {
  slideArt2(slideIndex2 = n);
}

function slideArt2(n) {
  var slides = document.getElementsByClassName("slide2-" + oeuvreId);
  if (slides && slides.length > 0) {
    var i;
    if (n > slides.length) { slideIndex2 = 1 }
    if (n < 1) { slideIndex2 = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"
      slides[i].style.opacity = "0";
    }

    slides[slideIndex2 - 1].style.display = "block";
    slides[slideIndex2 - 1].style.opacity = "1";
  }
}

public / css / app.css   public / js / app.js   resources / js / sliderArt.js   resources / scss / _media.scss   resources / scss / app.scss