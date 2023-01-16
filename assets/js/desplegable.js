// Asumimos que el menú está oculto por defecto con una clase "menu"

// Seleccionar el elemento sobre el cual se coloca el cursor del ratón
var $hoverElement = $(".hover");

// Seleccionar el menú desplegable
var $menu = $(".menu");

// Agregar un evento al elemento para detectar cuando se coloca el cursor del ratón sobre él
$hoverElement.mouseover(function() {
  // Mostrar el menú
  $menu.show();
});

// Agregar un evento al elemento para detectar cuando se saca el cursor del ratón de él
$hoverElement.mouseout(function() {
  // Ocultar el menú
  $menu.hide();
});
