//desktop menu
document.addEventListener("click", e => {
  const isDropdownButton = e.target.matches("[data-dropdown-button]")
  if (!isDropdownButton && e.target.closest("[data-dropdown]") != null) return

  let currentDropdown
  if (isDropdownButton) {
    currentDropdown = e.target.closest("[data-dropdown]")
    currentDropdown.classList.toggle("active")
  }

  document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
    if (dropdown === currentDropdown) return
    dropdown.classList.remove("active")
  })
})

//mobile header menu
const iconNav = document.querySelectorAll('.menu-nav');
iconNav.forEach(icon => {
  icon.addEventListener('click', (event) => {
    icon.classList.toggle("open");
  });
});

const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'))
const backLink = `<li class="nav-item nav-expand nav-back">
<i class="fas fa-chevron-left"></i>	
<a class="nav-link nav-back-link" href="javascript:;">
  Back
	</a>
</li>`

navExpand.forEach(item => {
  item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink)
  item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'))
  item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'))
})

const ham = document.getElementById('ham')
ham.addEventListener('click', function () {
  document.body.classList.toggle('nav-is-toggled')
})
