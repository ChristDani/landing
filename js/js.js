var imagenes = ["../img/imagen0.jpg',../img/imagen1.jpg", "../img/imagen2.jpg", "../img/imagen3.jpg"];
var indiceImagen = 0;
var duracionIntervalo = 5000; // en milisegundos (5 segundos)

setInterval(cambiarImagen, duracionIntervalo);

function cambiarImagen() {
  indiceImagen = (indiceImagen + 1) % imagenes.length;
  document.getElementById("main").style.backgroundImage = "url('" + imagenes[indiceImagen] + "')";
}
