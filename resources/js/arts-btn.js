window.addEventListener("load", () => {
  let url = window.location.pathname;
  var categorieId = getCategorieId(url)

  var btnNews = document.getElementById("btn-arts");
  var btns = btnNews && btnNews.getElementsByClassName("btn-art");

  if (categorieId) {
    if (btns) {
      for (var i = 0; i < btns.length; i++) {
        remove(btns[i], "active")
        if (btns[i].id == "categorie-" + categorieId) add(btns[i], "active");
      }
    }
  }
})

function getCategorieId(url) {
  var parameters = url.split("/")
  var categorieIndex = parameters.indexOf('categories')
  var categorieId = parameters[categorieIndex + 1]
  return categorieId
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