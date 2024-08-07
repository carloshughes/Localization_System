<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
//include("verificasessionexa.php");


if (($_POST["aplicativo"]!='Seleccione una opcion') && ($_POST["producto"]!='Seleccione una opcion') && ($_POST["supervisor"]!='Seleccione una opcion') && ($_POST["reporto"]) && ($_POST["usuarios"]) &&  ($_POST["hora_inicio"]) && ( $_POST["hora_final"]) && ($_POST["duracion"]) && ($_POST["fecha"]) && ($_POST["problema"])!='' && ($_POST["ticket"])=='')
{

// consulta para ingresar los datos a la tabla descripcion_inmueble todos menos el del telefono
mysql_query ("INSERT INTO reportes(
reporto, aplicativo, producto, supervisor, usuarios, hora_inicio, hora_final, duracion, fecha, problema)"." VALUES (
'".$_POST["reporto"]."','".$_POST["aplicativo"]."', '".$_POST["producto"]."','".$_POST["supervisor"]."','".$_POST["usuarios"]."','".$_POST["hora_inicio"]."','".$_POST["hora_final"]."', '".$_POST["duracion"]."','".$_POST["fecha"]."','".$_POST["problema"]."');",$conexion);
}


if (($_POST["aplicativo"]!='Seleccione una opcion') && ($_POST["producto"]!='Seleccione una opcion') && ($_POST["supervisor"]!='Seleccione una opcion') && ($_POST["reporto"]) && ($_POST["usuarios"]) &&  ($_POST["ticket"]) && ($_POST["hora_inicio"]) && ( $_POST["hora_final"]) && ($_POST["duracion"]) && ($_POST["fecha"]) && ($_POST["problema"])!='')
{

// consulta para ingresar los datos a la tabla descripcion_inmueble todos menos el del telefono
mysql_query ("INSERT INTO reportes(
reporto, aplicativo, producto, supervisor, usuarios, ticket, hora_inicio, hora_final, duracion, fecha, problema)"." VALUES (
'".$_POST["reporto"]."', '".$_POST["aplicativo"]."', '".$_POST["producto"]."','".$_POST["supervisor"]."','".$_POST["usuarios"]."','".$_POST["ticket"]."','".$_POST["hora_inicio"]."','".$_POST["hora_final"]."', '".$_POST["duracion"]."','".$_POST["fecha"]."','".$_POST["problema"]."');",$conexion);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Soluciones de Credito Bancomer</title>
<style type="text/css">
<!-- Color de las Letras para la pagina 
.style3 {
	color: #000099;
	font-size: 24px;
	font-weight: bold;
}
.style4 {
	color: #0033CC;
	font-weight: bold;
}
.style5 {
	color: #0066CC;
	font-weight: bold;
}
.style12 {color: #000099; font-size: 18px; font-weight: bold; }
.style14 {color: #0066CC; font-size: 18px; font-weight: bold; }
a:visited {
	color: #0066FF;
}
a:hover {
	color: #00CCFF;
}
.style15 {
	color: #0066CC;
	font-size: 18px;
}
.style16 {font-size: 18px}
a:link {
	color: #003399;
}
a:active {
	color: #003399;
}
.style21 {color: #000099; font-weight: bold; }
.style22 {color: #000099}
.style23 {color: #0066CC}
.style24 {
	color: #003399;
	font-weight: bold;
}
-->
</style>

<script language="JavaScript"> 

//funcion para mostrar la hora actualizada 
function mueveReloj()
{ 
	momentoActual = new Date() 
	hora = momentoActual.getHours() 
	minuto = momentoActual.getMinutes() 
	segundo = momentoActual.getSeconds() 
	str_segundo = new String (segundo) 
		if (str_segundo.length == 1) 
			segundo = "0" + segundo 
			str_minuto = new String (minuto) 
				if (str_minuto.length == 1) 
					minuto = "0" + minuto 
					str_hora = new String (hora) 
						if (str_hora.length == 1) 
							hora = "0" + hora 
							horaImprimible = hora+":"+minuto+":"+segundo //horaImprimible = hora+":"+minuto
							document.form1.hora_final.value = horaImprimible 
							setTimeout("mueveReloj()",1000) 
} 

//variables para la funcion de cronometro

var horas = "0"
var minutos = "00"
var segundos = "0"

//Funcion para el cronometro
function cronometro()
{
		if ((minutos < 10) && (minutos != "00")){
		bajamin = "0" + minutos
}else{
		bajamin = minutos
	}
		bajasec = (segundos < 10) ? segundos = "0" + segundos : segundos
		document.form1.duracion.value = horas + ":" + bajamin + ":" + bajasec
			if (segundos < 59){
			segundos++
			}else{
			segundos = "0"
			minutos++
			if (minutos > 59){
			minutos = "00"
			horas++
			}
}
window.setTimeout("cronometro()",1000) 
}
</SCRIPT>
</head>
<body onLoad="mueveReloj();cronometro()">
<div align="center"><img src="imagenes/margen11.jpg"/></div>
<table width="709" border="0" align="center">
  <tr>
    <td width="473" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="226"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style4"><img src="imagenes/bitacora.JPG" width="280" height="169" /></p>
<p class="style4">Bienvenido
   <span class="style15">
   <?php /*Mostrando nombre de Usuario*/ echo $_COOKIE["usuario_nombre"]; ?>
   </span></p>
<p align="center" class="style5 style16"><span class="style3">CC Sevilla</span></p>
<form id="form1" name="form1" method="post">
  <p>&nbsp;</p>
  <table width="1224" border="0" align="center">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3"><div align="center"><span class="style5">Hora Problema </span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="81"><div align="center" class="style21">
        <div align="center">Reporto</div>
      </div></td>
      <td width="167"><div align="center" class="style21">
        <div align="center">Aplicativo</div>
      </div></td>
      <td width="165"><div align="center"><span class="style21">Producto</span></div></td>
      <td width="183"><div align="center"><span class="style21">Supervisor</span></div></td>
      <td width="96"><div align="center"><span class="style21">Usuarios Afectados</span></div></td>
      <td width="70"><div align="center"><span class="style21">Ticket N</span><span class="style22">°</span> </div></td>
      <td width="68"><div align="center" class="style21">
        <div align="center" class="style23">Inicio </div>
      </div></td>
      <td width="56"><div align="center"><span class="style5">Final</span></div></td>
      <td width="61"><div align="center" class="style5">Duraci&oacute;n</div></td>
      <td width="69"><div align="center" class="style21"> Fecha</div></td>
      <td width="162"><div align="center" class="style21">
        <div align="center">Problema</div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <input name="reporto" type="text" id="reporto" value="<?php echo $_COOKIE["usuario_nombre"]; ?>" size="10" readonly="true"/>
      </div></td>
      <td><div align="center">
        <select name="aplicativo">
		  <option value=" ">Seleccione una opcion</option>
          <option value="Call Manager">Call Manager</option>
          <option value="Cyber">Cyber</option>
          <option value="IG">IG</option>
          <option value="PU">PU</option>
          <option value="Sistema de Red">Sistema de Red</option>
          <option value="UIP">UIP</option>
          <option value="Otros">Otros</option>
        </select>
      </div></td>
      <td><div align="center">
        <select name="producto" onchange="opicionessupervisor(this.form)">
		  <option value=" ">Seleccione una opcion</option>
          <option>Consumo</option>
          <option>Consumo Auto</option>
		  <option>TDC Banco</option>
  		  <option>TDC Banco Finanzia</option>
          <option>TDC Banco Castigo</option>
          <option>TDC Banco Mora 5</option>
          <option>TDC Banco Mora 6</option>
          <option>TDC Banco Mora 7+</option>
          <option>TDC Finanzia</option>
          <option>Otros</option>
          <option>Todos</option>
        </select>
      </div></td>
      <td><div align="center">
        <select name="supervisor">
		<option value=" " selected="selected">Seleccione una opcion</option>
        </select>
      </div></td>
      <td><div align="center">
        <input name="usuarios" type="text" id="usuarios" size="5" maxlength="4" onblur="javascript:Numeros(this,0);"/>
      </div></td>
      <td><label>
        <div align="center">
          <input name="ticket" type="text" id="ticket" size="6" maxlength="10" />        
        </div>
      </label></td>
      <td><div align="center">
        <?php date_default_timezone_set("America/Mexico_City"); $hora = date ("H:i:s");?>
          <input name="hora_inicio" size="5" value="<?php echo $hora;?>" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="hora_final" value="horaImprimible" size="5	" readonly="true" />	
      </div></td>
      <td><div align="center">
		<input name="duracion" size="4" readonly="true">
	  </div>
          <div align="center"></div></td>
      <td>
	    <div align="center">
	      <?php $fecha = date ("Y-m-d");?>
	      <input name="fecha" type="text" id="fecha" size="8" value="<?php echo $fecha;?>" readonly="true"/>
      </div></td>
      <td><textarea name="problema" rows="2" id="problema"></textarea></td>
    </tr>	
          <td colspan="11"><div align="center">
        <input name="Guardar" type="button" onclick="validar(this.form)" value="Guardar"/>
      </div></td>
  </table>
</form>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><span class="style24"><a href="Reportes.php">Reportes</a></span> <font color="#000000"><font color="#000000"><font color="#000000"><font color="#003399">||</font></font></font></font> <font color="#003399"><strong><a href="Salirexa.php">Salir</a></strong></font></p>
<hr align="center" color="#003399" />
<p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2011</strong></font></font></font></p>
<center></center>
</form>
<form>
<input type="Text" style="width:100px;height:20px;background-color:red;color:yellow;font-size:10pt; font-family:Verdana;text-align:center;">
<?php <input type="Text" style="width:100px;height:20px;background-color:red;color:yellow;font-size:10pt; font-family:Verdana;text-align:center;"> ?>
</form>
</body>
</html>
<script>
function Numeros(obj,l)
{
with (obj)
	{ var Num; Num = false; 
	for ( i=0; i < value.length; i++ )
			{if ( isNaN ( parseInt( value.charAt(i) ) ) == true) {Num = true;}}
		}
	if ( Num == true )
		{alert("ESTE CAMPO ES NUMÉRICO Y NO ACEPTA LETRAS, ESPACIOS, NI SIGNOS");obj.focus(); }
	if ( obj.value != "" && l != 0 )
		{ if ( obj.value.length < l || l < obj.value.length){alert("ESTE CAMPO DEBE DE CONTENER " + l + " NÚMEROS"); obj.			focus();} }

}

function validar(form1)
{

//validando la seleccion de un aplicativo 
    if (form1.aplicativo.options[form1.aplicativo.selectedIndex].value == " ")
    {
    alert("Por favor, Seleccione un Aplicativo");
    form1.aplicativo.focus(); return false;
    }

//validando el producto 
    if (form1.producto.options[form1.producto.selectedIndex].value == " ")
    {
    alert("Por favor, Seleccione un Producto");
    form1.producto.focus(); return false;
    }

//validando el supervisor

	if (form1.supervisor.options[form1.supervisor.selectedIndex].value == "Seleccione una opcion")
    {
    alert("Por favor, Seleccione un Supervisor");
    form1.supervisor.focus(); return false;
    }
		
//validando el numero de Usuarios afectados 
	if (form1.usuarios.value.length==0){
		alert("Determina cuantos usuarios fueron afectados");
	form1.usuarios.focus(); return true;
	}

//validando el ticket proporcionado por Comand Center
	if (form1.ticket.value.length==0){
		alert("Si no cuentas con el N° Ticket proporcionado por Comand Center coloca 'Sin ticket'");
		form1.ticket.focus(); return true;
	}

//Validando el campo de Problema

	if (form1.problema.value.length==0){
		alert("Escribe una descripcion del problema");
	form1.problema.focus(); return true;
	}
//Mensaje Reporte Generado Exitosamente 
		alert("Reporte Generado Exitosamente");
		form1.submit();

}
</script>


<script language="javascript">

function opicionessupervisor(form)
{
	var select = form.producto.options;
	var combo = form.supervisor.options;
	combo.length = null;
	

	if (select[0].selected == true){
		
		var seleccionar = new Option ("Seleccione una opcion","","");
		combo[0]=seleccionar;		
	}
	
	//Seleccionando Consumo
	if (select[1].selected == true)	{
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Jose Ignacio Vazquez","Jose Ignacio Vazquez","","");
		var supervisor2 = new Option("Jose Alberto Pardo","Jose Alberto Pardo","","");
		var supervisor3 = new Option("Esteban Ledesma","Esteban Ledesma","","");
		var supervisor4 = new Option("Paola Santamaria Romero","Paola Santamaria Romero","","");
		var supervisor5 = new Option("Vacante","Vacante","","");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
		combo[2] = supervisor2;
		combo[3] = supervisor3;
		combo[4] = supervisor4;
		combo[5] = supervisor5;
	}

	//Seleccionando Consumo Auto
	if (select[2].selected == true){
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Raquel Garcia");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	
	//Seleccionando a todos los de TDC Banco 
		if (select[3].selected == true){
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Todos");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	
	//Seleccionando a todos los de TDC Banco y Finanzia
		if (select[4].selected == true){
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Todos");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	
		
	//Seleccionando TDC Banco Castigo
	if (select[5].selected == true){
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Frank Perez");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	
	//Seleccionando TDC Banco Mora 5
	
	if (select[6].selected == true){
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Angelica Martinez Hernandez");
		var supervisor2 = new Option("Annie Marentes Juarez");
		var supervisor3 = new Option("Gabriela Esquivias Ayala");
		var supervisor4 = new Option("Omar Flores Pichardo");		
		var supervisor5 = new Option("Omar Rodriguez Garduño");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
		combo[2] = supervisor2;
		combo[3] = supervisor3;
		combo[4] = supervisor4;
		combo[5] = supervisor5;
	}
	
	//Seleccionando TDC Banco Mora 6
	if (select[7].selected == true){
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Juan Manuel Jardon");
		var supervisor2 = new Option("Arturo Rodriguez");
		var supervisor3 = new Option("Manuel Leal Navarro");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
		combo[2] = supervisor2;
		combo[3] = supervisor3;


	}
	
	//Seleccionando TDC Banco Mora 7 +
	
	if (select[8].selected == true){
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Daniel Badillo Morales");
		var supervisor2 = new Option("Jorge Medina Garcia");
		var supervisor3 = new Option("Jorge Oropeza Irlanda");
		var supervisor4 = new Option("Mary Carmen Garcia Monreal");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
		combo[2] = supervisor2;
		combo[3] = supervisor3;
		combo[4] = supervisor4;
	}

	//Seleccionando Finanzia
	
	if (select[9].selected == true){
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Gabriel Albis Garcia");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	

	//validando la opcion de Otros
	if (select[10].selected == true){
	
		var supervisor1 = new Option("Otros");
		combo[0] = supervisor1;

	}

	//validando la opcion de todos
	if (select[11].selected == true){
	
		var supervisor1 = new Option("Todos");
		combo[0] = supervisor1;

	}
		

}

</script>




