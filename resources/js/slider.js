let slider = document.querySelector('.slider');
let sliderContent = document.querySelector('.slider-content');

let pressed = false;
let startx;
let x;

if (slider) {
  slider.addEventListener('mousedown', (e) => {
    pressed = true;
    startx = e.offsetX - sliderContent.offsetLeft;
    slider.style.cursor = 'grabbing';
  });

  // slider.addEventListener('mouseenter', () => {
  //   slider.style.cursor = 'grab';
  // });

  slider.addEventListener('mouseup', () => {
    slider.style.cursor = 'grab';
  });

  window.addEventListener('mouseup', () => {
    pressed = false;
  });

  slider.addEventListener('mousemove', (e) => {
    if (!pressed) return;
    e.preventDefault();

    x = e.offsetX;

    sliderContent.style.left = `${x - startx}px`;
    checkBoundary()
  });
}

function checkBoundary() {
  let outer = slider.getBoundingClientRect();
  let inner = sliderContent.getBoundingClientRect();

  if (parseInt(sliderContent.style.left) > 0) {
    sliderContent.style.left = '0px';
  } else if (inner.right < outer.right) {
    sliderContent.style.left = `-${inner.width - outer.width}px`
  }
}

