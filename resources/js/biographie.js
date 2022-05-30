window.addEventListener("load", () => {
  let url = window.location.pathname;
  var bioTitleId = getBioTitleId(url)

  var btnBio = document.getElementById("bio-drop");
  var buttons = btnBio && btnBio.getElementsByClassName("btn");
  if (bioTitleId) {
    for (var i = 0; i < buttons.length; i++) {
      remove(buttons[i], "active");
      if (buttons[i].id == bioTitleId) add(buttons[i], "active");
    }
  }
})

function getBioTitleId(url) {
  var parameters = url.split("/")
  var categorieIndex = parameters.indexOf('biographie')
  var categorieId = parameters[categorieIndex + 1]
  return categorieId
}


window.selectCritic = function (c) {
  var critic, i
  critic = document.getElementsByClassName("critics");

  if (critic) {
    for (i = 0; i < critic.length; i++) {
      remove(critic[i], "show");
      if (critic[i].className.indexOf(c) > 1) add(critic[i], "show");
    }
  }
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