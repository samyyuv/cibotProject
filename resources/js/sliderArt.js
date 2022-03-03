let show = document.querySelectorAll(".slideshow, #overlay");

if (show) {

  window.openShow = function () {
    show.forEach(function (i) {
      i.style.display = "block";
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
  }
}