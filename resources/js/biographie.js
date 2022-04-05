window.onload = function () {
  var bioPresentation, i;
  var activeLink = sessionStorage.getItem("biographie-link");
  sessionStorage.removeItem("biographie-link");

  if (activeLink) {
    bioPresentation = document.getElementsByClassName("biographie-presentation");
    if (bioPresentation) {
      for (i = 0; i < bioPresentation.length; i++) {
        remove(bioPresentation[i], "show");
        if (bioPresentation[i].className.indexOf(activeLink) > 1) add(bioPresentation[i], "show");
      }
    }

    var btnBio = document.getElementById("bio-drop");
    var buttons = btnBio && btnBio.getElementsByClassName("btn");
    if (buttons) {
      for (var i = 0; i < buttons.length; i++) {
        remove(buttons[i], "active");
        if (buttons[i].id == activeLink) add(buttons[i], "active");
      }
    }
  }
}

window.selectBtnBio = function (c) {
  var bioPresentation, i
  bioPresentation = document.getElementsByClassName("biographie-presentation");
  if (bioPresentation) {
    for (i = 0; i < bioPresentation.length; i++) {
      remove(bioPresentation[i], "show");
      if (bioPresentation[i].className.indexOf(c) > 1) add(bioPresentation[i], "show");
    }
  }
}

window.activeBioLink = function (c) {
  sessionStorage.setItem("biographie-link", c);
}

// Show filtered pags
function add(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function remove(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button
var btnBio = document.getElementById("bio-drop");
var buttons = btnBio && btnBio.getElementsByClassName("btn");
if (buttons) {
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";

    });
  }
}

// Add active class to the current control button
var btnBioFoot = document.getElementById("bio-foot");
var buttonsFoot = btnBioFoot && btnBioFoot.getElementsByClassName("foot-bio");
if (buttons) {
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";

    });
  }
}