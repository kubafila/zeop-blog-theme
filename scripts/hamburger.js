const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".menu")

const contact = document.querySelector(".menu__item-contact");


const toggleMenu  = () => {
  hamburger.classList.toggle('hamburger--closed')
  menu.classList.toggle("menu--open")
}


hamburger.addEventListener('click', toggleMenu)
contact.addEventListener('click', toggleMenu)