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

function muestranuevo(ida,idn,rb){
	if (document.getElementById){
		var el = document.getElementById(idn); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
		var ele = document.getElementById(ida); 
		ele.style.display = (rb == 'Si') ? 'none' : 'block'; 
	}
}



