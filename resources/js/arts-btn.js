window.addEventListener("load", () => {
  var container, i;
  var activeLink = sessionStorage.getItem("art-link");
  sessionStorage.removeItem("art-link");

  var btnNews = document.getElementById("btn-arts");
  var btns = btnNews && btnNews.getElementsByClassName("btn-art");
  var container = document.getElementsByClassName("art");
  var title = document.getElementsByClassName("title-art");

  if (activeLink) {
    if (container) {
      for (i = 0; i < container.length; i++) {
        remove(container[i], "show");
        if (container[i].className.split(" ").includes(activeLink)) add(container[i], "show");
      }
    }

    if (title) {
      console.log(activeLink)
      for (var i = 0; i < title.length; i++) {
        remove(title[i], "show")
        if (title[i].id == activeLink) add(title[i], "show");
      }
    }

    if (btns) {
      console.log(activeLink)
      for (var i = 0; i < btns.length; i++) {
        remove(btns[i], "active")
        if (btns[i].id == activeLink) add(btns[i], "active");
      }
    }
  } else if (btns && container && title) {
    add(btns[0], "active")
    add(container[0], "show")
    add(title[0], "show")
  }
})

window.selectBtnArts = function (c) {
  var container, i;
  container = document.getElementsByClassName("art");
  if (container) {
    for (i = 0; i < container.length; i++) {
      remove(container[i], "show");
      if (container[i].className.split(" ").includes(c)) {
        add(container[i], "show");
      }
    }
  }
}

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