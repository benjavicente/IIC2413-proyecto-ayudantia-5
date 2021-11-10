// Bulma no incluye javascript, hay que hacerlo uno mismo

document.addEventListener('DOMContentLoaded', () => {
  // Buscamos los elementos del navbar
  const $navbarBurger = document.querySelector('.navbar-burger');
  const $navbarMenu = document.querySelector('.navbar-menu')
  // Se expande el menú si se apreta el navbar-burger
  $navbarBurger.addEventListener('click', () => {
    $navbarBurger.classList.toggle('is-active');
    $navbarMenu.classList.toggle('is-active');
  })
});
