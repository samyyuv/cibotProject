
//mobile footer menu
const iconFoot = document.querySelectorAll('.menu-foot');
iconFoot.forEach(icon => {
  icon.addEventListener('click', (event) => {
    icon.classList.toggle("open");
  });
});

const footExpand = [].slice.call(document.querySelectorAll('.foot-expand'))


const hamon = document.getElementById('hamon')
hamon.addEventListener('click', function () {
  document.body.classList.toggle('footer-is-toggled')
})

const backLinkFoot =
  `<li class="foot-item foot-expand foot-back">
    <i class="fas fa-chevron-left"></i>
    <a class="foot-link foot-back-link" href="javascript:;">
      Back
    </a>
  </li>`

if (footExpand) {
  footExpand.forEach(item => {
    item.querySelector('.foot-expand-content').insertAdjacentHTML('afterbegin', backLinkFoot)
    item.querySelector('.foot-link-title').addEventListener('click', () => item.classList.add('active'))
    item.querySelector('.foot-back-link').addEventListener('click', () => item.classList.remove('active'))
  })
}



// //mobile footer menu
// const iconsFoot = document.querySelectorAll('.menu-foot');
// iconsFoot.forEach(icon => {
//   icon.addEventListener('click', (event) => {
//     icon.classList.toggle("open");
//   });
// });

// const hamon = document.getElementById('hamon')
// hamon.addEventListener('click', function () {
//   document.body.classList.toggle('footer-is-toggled')
// })

// const footExpand = [].slice.call(document.querySelectorAll('.foot-expand'))
// const backLink = `<li class="foot-item">
// 	<a class="foot-link foot-back-link" href="javascript:;">
// 		Back
// 	</a>
// </li>`

// footExpand.forEach(item => {
//   item.querySelector('.foot-expand-content').insertAdjacentHTML('afterbegin', backLink)
//   item.querySelector('.foot-link').addEventListener('click', () => item.classList.add('active'))
//   item.querySelector('.foot-back-link').addEventListener('click', () => item.classList.remove('active'))
// })
