var carruselItems = document.querySelectorAll('.carrusel-item');
var currentcarruselItem = 0;
var carruselInterval = setInterval(nextcarruselItem, 50);

function nextcarruselItem() {
  carruselItems[currentcarruselItem].classList.remove('active');
  currentcarruselItem++;
  if (currentcarruselItem >= carruselItems.length) {
    currentcarruselItem = 0;
  }
  carruselItems[currentcarruselItem].classList.add('active');
}
