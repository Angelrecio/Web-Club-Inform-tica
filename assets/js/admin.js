// obtenemos una referencia al elemento video
var video = document.getElementById("intro_video");

document.getElementById('presentac').style.display = 'block';

    
// agregamos un evento que se ejecutará cuando el video finalice su reproducción
video.addEventListener("ended", function() {
  // aquí eliminamos el elemento video de la página
  //video.parentNode.removeChild(video);
  console.log("video borrado");
    
  var imagen = document.createElement("img");
  // y establecer su atributo src para indicar la ruta de la imagen que deseas mostrar
  imagen.className = "intro";
  imagen.id = "intro_img"
  imagen.src = "assets/img/leters.png";
  
    
  console.log(imagen);
  // luego, puedes reemplazar el elemento video por el elemento img utilizando el método replaceChild():
  video.parentNode.replaceChild(imagen, video);
  console.log("video remplazado por imagen");


var image = $('#intro_img');


setTimeout(() => { 
  image.animate({
  width: '12%',
  top: '10px',
  marginBottom: "0"
  }, 500);
 }, 1000);

 setTimeout(() => { 
  
  logo_uem = document.getElementById("logo_uem");
  logo_uem.style.display="block";
 }, 1500);




});

$(document).ready(function(){
  $("#present").click(function(){
    $("#presentac").slideToggle("slow")
    $("#propuesta").slideUp("slow")
    $("#proyect").slideUp("slow")
    $("#proant").slideUp("slow")
  });
  $("#proyecto_ant").click(function(){
    $("#proant").slideToggle("slow")
    $("#propuesta").slideUp("slow")
    $("#proyect").slideUp("slow")
    $("#presentac").slideUp("slow")
  });
  $("#proyec_curso").click(function(){
    $("#proyect").slideToggle("slow")
    $("#propuesta").slideUp("slow")
    $("#proant").slideUp("slow")
    $("#presentac").slideUp("slow")
  });
  $("#propues").click(function(){
    $("#propuesta").slideToggle();
    $("#proyect").slideUp("slow")
    $("#proant").slideUp("slow")
    $("#presentac").slideUp("slow")
  });
});