//let btnProductos = document.getElementById("btnProductos");
let contenedor2 = document.getElementById("#contenedor2");
var btnProductos = document.getElementById("btnProductos");

//Mostrar productos
//document.querySelector('btnProductos').addEventListener('click', mostrarProductos);
/* if(btnProductos){
    addEventListener('click', mostrarProductos);
} */
/* function mostrarProductos() {
    //alert("Evento onclick ejecutado!");
    //document.getElementById("#contenedor2").style.visibility = 'visible';
    //document.getElementById('#contenedor2').style.display = 'block';
    $("#contenedor2").css("display", "none");
}  */

$(document).ready(function(){
    $("#btnProductos").click(function(){
       //lo que se desee hacer al recibir un clic el checkbox
       $("#contenedor2").css("display", "none");
    });
 });
  
