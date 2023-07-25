// BOTON DE MENU CONFIG USER/ADMIN
document.getElementById('configButton').addEventListener('click', toggleConfigMenu);

function toggleConfigMenu() {
  var menu = document.getElementById('configMenu');
  menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
}

// BOTON CAMBIAR A MODO NOCTURNO / NORMAL
function cambiarModo() {
    var body = document.querySelector("body");
    var icono = document.getElementById("icono");

    body.classList.toggle("modo-nocturno");
    icono.classList.toggle("fa-sun");
    icono.classList.toggle("fa-moon");
}
// FUNCION PARA HEADER SCROLL INDEX
window.addEventListener('scroll', function() {
  var nav = document.querySelector('.scroll');
  var navHeight = nav.offsetHeight;
  var scrollPosition = window.scrollY;

  if (scrollPosition > navHeight) {
    nav.classList.add('fixed');
    nav.classList.add('show'); 
  } else {
    nav.classList.remove('fixed');
    nav.classList.remove('show');
  }
});






