function Buscador(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	}catch(e){
		try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}catch (E) {
		xmlhttp = false;
	}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
	}

function Buscar(){

var Texto = document.getElementById('telefono_1').value;
var Resultados = document.getElementById('resultados');
ajax = Buscador();
ajax.open("GET","Buscart1.php?q="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}

//buscar el segundo telefono
function Buscarb(){

var Texto = document.getElementById('telefono_2').value;
var Resultados = document.getElementById('resultadosb');
ajax = Buscador();
ajax.open("GET","Buscart2.php?b="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}

//buscar el tercer telefono
function Buscarc(){

var Texto = document.getElementById('telefono_3').value;
var Resultados = document.getElementById('resultadosc');
ajax = Buscador();
ajax.open("GET","Buscart3.php?c="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}



//buscar el cuarto telefono
function Buscard(){

var Texto = document.getElementById('telefono_4').value;
var Resultados = document.getElementById('resultadosd');
ajax = Buscador();
ajax.open("GET","Buscart4.php?d="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}

//buscar el quinto telefono
function Buscare(){

var Texto = document.getElementById('telefono_5').value;
var Resultados = document.getElementById('resultadose');
ajax = Buscador();
ajax.open("GET","Buscart5.php?e="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}

//buscar el sexto telefono
function Buscarf(){

var Texto = document.getElementById('telefono_6').value;
var Resultados = document.getElementById('resultadosf');
ajax = Buscador();
ajax.open("GET","Buscart6.php?f="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}

//buscar el septimo telefono
function Buscarg(){

var Texto = document.getElementById('telefono_7').value;
var Resultados = document.getElementById('resultadosg');
ajax = Buscador();
ajax.open("GET","Buscart7.php?g="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}

//buscar el octavo telefono
function Buscarh(){

var Texto = document.getElementById('telefono_8').value;
var Resultados = document.getElementById('resultadosh');
ajax = Buscador();
ajax.open("GET","Buscart8.php?h="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}

//buscar el noveno  telefono
function Buscari(){

var Texto = document.getElementById('telefono_9').value;
var Resultados = document.getElementById('resultadosi');
ajax = Buscador();
ajax.open("GET","Buscart9.php?i="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}

//buscar el noveno  telefono
function Buscarj(){

var Texto = document.getElementById('telefono_10').value;
var Resultados = document.getElementById('resultadosj');
ajax = Buscador();
ajax.open("GET","Buscart10.php?j="+Texto);
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
			Resultados.innerHTML = ajax.responseText;
	}
									}
		ajax.send(null)
}