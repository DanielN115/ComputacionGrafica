var carouselItems = document.querySelectorAll('.carousel-item');
var currentCarouselItem = 0;
var carouselInterval = setInterval(nextCarouselItem, 5000);

function nextCarouselItem() {
  carouselItems[currentCarouselItem].classList.remove('active');
  currentCarouselItem++;
  if (currentCarouselItem >= carouselItems.length) {
    currentCarouselItem = 0;
  }
  carouselItems[currentCarouselItem].classList.add('active');
}
