window.addEventListener("load", () => {
  var activeLink = sessionStorage.getItem("art-link");
  sessionStorage.removeItem("art-link");

  var btnNews = document.getElementById("btn-arts");
  var btns = btnNews && btnNews.getElementsByClassName("btn-art");

  if (activeLink) {
    if (btns) {
      for (var i = 0; i < btns.length; i++) {
        remove(btns[i], "active")
        if (btns[i].id == activeLink) add(btns[i], "active");
      }
    }
  }
})

window.activeArtLink = function (c) {
  sessionStorage.setItem("art-link", c);
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
var btnNews = document.getElementById("btn-arts");
var btns = btnNews && btnNews.getElementsByClassName("btn-art");
if (btns) {
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";

    });
  }
}