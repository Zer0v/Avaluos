function muestraconjuntocerrado(id,rb){
if (document.getElementById){ //se obtiene el id
var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
el.style.display = (rb == 'No') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
}
}
window.onload = function(){/*hace que se cargue la funci�n lo que predetermina que div estar� oculto hasta llamar a la funci�n nuevamente*/
muestraconjuntocerrado('conjuntocerradomostrar','');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
}


