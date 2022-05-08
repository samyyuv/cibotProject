let shows = document.querySelectorAll(".slideshow, #overlay");
let slideIndex;
let slideIndex2;
let categorieId;
let oeuvreId;

window.onload = function () {
  let catgrId = sessionStorage.getItem("categorieId")
  let oevrId = sessionStorage.getItem("oeuvreId")
  sessionStorage.removeItem("categorieId")
  sessionStorage.removeItem("oeuvreId")
  if (catgrId && oevrId) {
    var slides = document.getElementsByClassName("slide-1-" + catgrId);
    var activeIdx;
    for (i = 0; i < slides.length; i++) {
      if (slides[i].id == oevrId) {
        activeIdx = i;
      }
    };
    slideIndex = activeIdx;
    slideIndex2 = 0;
    openShowLocal(catgrId, oevrId)
    slideArt(slideIndex);
  } else {
    slideIndex2 = 0;
    slideArt(slideIndex);
  }
}

window.activeArtLinkExtended = function (catgrId, oevrId) {
  sessionStorage.setItem("categorieId", catgrId);
  sessionStorage.setItem("oeuvreId", oevrId);
}

function openShowLocal(catgrId, oevrId) {
  categorieId = catgrId;
  oeuvreId = oevrId;
  let active = document.getElementById("slideshow-" + categorieId);
  active.style.display = "flex";
}

if (shows) {

  window.openShow = function (catgrId, oevrId) {
    openShowLocal(catgrId, oevrId)
  }

  window.closeShow = function () {
    shows.forEach(function (i) {
      i.style.display = "none";
    });
  }
}

window.plusSlides = function (n) {
  slideArt(slideIndex += n);
}
window.currentSlide = function (n) {
  slideArt(slideIndex = n);
}

function slideArt(n) {
  var slides = document.getElementsByClassName("slide-1-" + categorieId);
  if (slides && slides.length > 0) {
    var i;
    if (n > slides.length - 1) { slideIndex = 0 }
    if (n < 0) { slideIndex = slides.length - 1 }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"
      slides[i].style.opacity = "0";
    }

    slides[slideIndex].style.display = "flex";
    slides[slideIndex].style.opacity = "1";
    setPhotoShowLocal(slides[slideIndex].id)
  }
}

window.setPhotoShow = function (id) {
  setPhotoShowLocal(id, 1)
}

function setPhotoShowLocal(oevrId) {
  oeuvreId = oevrId;
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
    if (n > slides.length - 1) { slideIndex2 = 0 }
    if (n < 0) { slideIndex2 = slides.length - 1 }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"
      slides[i].style.opacity = "0";
    }

    slides[slideIndex2].style.display = "block";
    slides[slideIndex2].style.opacity = "1";
  }
}