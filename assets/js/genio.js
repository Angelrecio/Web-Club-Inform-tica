// obtenemos una referencia al elemento video
var video = document.getElementById("intro_video");


    
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

document.getElementById('present').onclick=function(){
  document.getElementById('proyect').style.display = '';
  document.getElementById('propuesta').style.display = '';
  document.getElementById('presentac').style.display = 'block';
};

document.getElementById('proyec_curso').onclick=function(){
  document.getElementById('presentac').style.display = '';
  document.getElementById('propuesta').style.display = '';
  document.getElementById('proyect').style.display = 'block';
};

document.getElementById('propues').onclick=function(){
  document.getElementById('presentac').style.display = '';
  document.getElementById('proyect').style.display = '';
  document.getElementById('propuesta').style.display = 'block';
};