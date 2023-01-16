// obtenemos una referencia al elemento video
var video = document.getElementById("intro_video");

document.getElementById('presentac').style.display = 'block';


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