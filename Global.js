
  var menuHamburger = document.querySelector(".menu-hamburger")
var navLinks = document.querySelector(".nav-links")

menuHamburger.addEventListener('click',()=>{
navLinks.classList.toggle('mobile-menu')
})

window.addEventListener('scroll', function() {
  var nav = document.querySelector('.sticky-nav');
  nav.classList.toggle('sticky', window.scrollY > 0);
});

// Carrousel

const carouselContainer = document.querySelector('.carousel-container');
const carousel = document.querySelector('.carousel');
const carouselItems = document.querySelectorAll('.carousel-item');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

// Condition pour afficher ou masquer le carrousel
const condition = true; 

if (condition) {
  carouselContainer.classList.remove('hidden');
} else {
  carouselContainer.classList.add('hidden');
}

let currentIndex = 0;
const slideWidth = carouselItems[0].clientWidth;
const totalItems = carouselItems.length;

// Decide de defiler le carrousel d'une certaine distance quand l'on clique
prevButton.addEventListener('click', () => {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = totalItems - 1;
  }
  carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
});

nextButton.addEventListener('click', () => {
  currentIndex++;
  if (currentIndex >= totalItems) {
    currentIndex = 0;
  }
  carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
});

const sections = document.querySelectorAll("section");

[...sections].forEach((section) => {
  const checkbox = section.querySelector("input");

  checkbox.addEventListener("change", () => {
    section.classList.toggle("enable-animation");
  });
});