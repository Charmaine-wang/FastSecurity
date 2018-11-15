const hamburgerIcon = document.querySelector('.hamburger-icon');
const hamburgerMenu = document.querySelector('.nav-ist');

hamburgerIcon.addEventListener('click', () => {
  hamburgerMenu.classList.toggle('nav-ist__visible');
})