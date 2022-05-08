let shows = document.querySelectorAll(".slideshow, #overlay");
let slideIndex;
let slideIndex2;
let categorieId;
let oeuvreId;

window.onload = function () {
  let oeuvreIdx = sessionStorage.getItem("oeuvreIndex")
  let photoIdx = sessionStorage.getItem("photoIndex")
  sessionStorage.removeItem("oeuvreIndex")
  sessionStorage.removeItem("photoIndex")
  if (oeuvreIdx && photoIdx) {
    console.log("onload")
    console.log(oeuvreIdx)
    slideIndex = oeuvreIdx;
    slideIndex2 = photoIdx
    slideArt(slideIndex);
    openShowLocal()
  } else {
    //slideIndex = 1;
    slideIndex2 = 1;
    slideArt(slideIndex);
  }
}

window.activeArtLinkExtended = function (c, oeuvreIdx, photoIdx) {
  sessionStorage.setItem("art-link", c);
  sessionStorage.setItem("oeuvreIndex", oeuvreIdx);
  sessionStorage.setItem("photoIndex", photoIdx);
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

function setPhotoShowLocal(oeuvreId) {
  oeuvreId = oeuvreId;
  slideArt2(slideIndex2);
}

window.plusSlides2 = function (n) {
  slideArt2(slideIndex2 += n);
}
window.currentSlide2 = function (n) {
  slideArt2(slideIndex2 = n);
}

function slideArt2(n) {
  //console.log("photo index")
  //console.log(n)
  //console.log(oeuvreId)  // undefined WHY ????
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