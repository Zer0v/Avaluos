function muestraconjuntocerrado(id,rb){
	if (document.getElementById){ 
		var el = document.getElementById(id); 
		el.style.display = (rb == 'No') ? 'block' : 'none'; 
	}
}

function muestraotrocc(id,rb){
	if (document.getElementById){ 
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}



