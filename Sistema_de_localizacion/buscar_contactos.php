<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
include("verificasessionexa.php");

//$asesores=mysql_query("delete FROM base_marcar WHERE status='Trabajada'",$conexion); 

$rst_productoss=mysql_query("SELECT * FROM asesores WHERE usuario='".$_COOKIE["usuario_nombre"]."';",$conexion);
$fila_observaciones=mysql_fetch_array($rst_productoss);

	

/*$rst_productos=mysql_query("SELECT * FROM base_marcar WHERE eslabon=".$_COOKIE["usuario_nombre"]."';",$conexion);
$fila_producto=mysql_fetch_array($rst_productos);*/


				//echo " <script language='JavaScript'>
					//alert('Fallecimiento de TH Y Baja de Telefonos, proporcionar el telefono de CAT')
	               //script>;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PU-<?php echo $fila_observaciones["nombre"];//$_COOKIE["usuario_nombre"];?></title>
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
a:visited {
	color: #0066FF;
}
a:hover {
	color: #00CCFF;
}
.style15 {
	color: #005500;
	font-size: 18px;
	font-weight: bold;
}
a:link {
	color: #003399;
}
a:active {
	color: #003399;
}
.style25 {color: #003399}
.style26 {
	font-size: 24px;
	font-weight: bold;
}
.style19 {color: #0066FF}
.style29 {font-weight: bold}
-->
</style>
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
<style type="text/css">
<!--
body,td,th {
	color: #310063;
}
body {
	background-color: #FFFFFF;
}
-->
</style>
<style type="text/css">
<!--
.excel1 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel2 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:#1F497D;
font-size:14.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel3 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel4 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel5 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:white;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
background:#1F497D;
}
.excel6 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:white;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
background:#1F497D;
}
.excel7 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel8 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel9 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel10 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel11 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.style51 {font-size: 18px}
.style52 {color: #005500}
-->
</style>
</head>
<body>
<div align="center"><img src="imagenes/margen11.jpg" width="1293" height="25"/></div>
<table width="1294" border="0" align="center">
  <tr>
    <td width="543" height="25"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="271" rowspan="2"><div align="center"><img src="imagenes/LOCALIZACION.JPG" width="284" height="144" /></div></td>
    <td width="271" rowspan="2">&nbsp;</td>
    <td width="195" rowspan="2"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
  <tr>
    <td height="25"><div align="center" class="style4 style51">
      <div align="left" class="style52">Buscar Contactos </div>
    </div></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="nuevo_pu_contactos">
  <table width="1001" border="0" align="center">
    <tr>
      <td width="305"><p class="style52"><strong>Bienvenido: </strong><span class="style26"><span class="style51">
          <?php /*Mostrando nombre de Usuario */echo $fila_observaciones["nombre"];?>
      </span></span></p></td>
      <td width="542" colspan="12"><div align="center"><span class="style52"></span></div></td>
    </tr>
    <tr>
      <td height="3"><span class="style4 style52">Eslabon:</span><span class="style15"> <?php echo $_COOKIE["usuario_nombre"];?></span></td>
      <td height="3" colspan="12"><div align="center" class="style4 style52">Numero de Cliente</div></td>
    </tr>
    
    
    <tr>
      <td rowspan="2"><span class="style52"></span></td>
      <td colspan="12"><span class="style52">
        <label>
        </span>
        <div align="center" class="style52">
          <input name="busqueda" type="text" id="busqueda"  onkeypress="mis_datos()"/>
        </div>
      <div align="center" class="style52"></div>        
      <span class="style52">
      </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="12"><span class="style52">
        <label>
        </span>
        <div align="center" class="style52">
          <input name="Buscar" type="submit" id="Buscar" value="Buscar" />
        </div>
        <span class="style52">
        </label>
      </span></td>
    </tr>
  </table>
</form>
<p align="center" class="style25"><span class="style19"><span class="style29"><a href="opciones.php">Anterior</a> || <a href="Salirexa">Salir</a></span>
    <label></label>
    <label> </label>
</span></p>
<hr align="center" color="#003399" />
<div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
</body>
</html>
<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>

<SCRIPT LANGUAGE="JavaScript">

//Funcion de convierte las letras MAYUSCULAS EN letras minusculas en los campos Email_1 y Email_2
function changeCase(frmObj) {
var index;
var tmpStr;
var tmpChar;
var preString;
var postString;
var strlen;
tmpStr = frmObj.value.toLowerCase();
strLen = tmpStr.length;
if (strLen > 0)  {
for (index = 0; index < strLen; index++)  {
if (index == 0)  {
tmpChar = tmpStr.substring(0,0).toUpperCase();
postString = tmpStr.substring(0,strLen);
tmpStr = tmpChar + postString;
}
else {
tmpChar = tmpStr.substring(index, index+0);
if (tmpChar == " " && index < (strLen-0))  {
tmpChar = tmpStr.substring(index+0, index+1).toUpperCase();
preString = tmpStr.substring(0, index+0);
postString = tmpStr.substring(index+1,strLen);
tmpStr = preString + tmpChar + postString;
         }
      }
   }
}
frmObj.value = tmpStr;
}

</script>

<script>
//Funcion que valida el formulario antes de ser enviado a la base de datos 
function validar(form1)
{

//validando que coloquen el saldo 
if (form1.saldo.value.length==" ")
	{
		alert("Por favor, Introdusca el saldo de la cuenta")
		form1.saldo.focus(); return false;
	}
	
	
//validando que introduzcan la mora
if (form1.mora.value.length==" ")
    {
    alert("Por favor, Introdusca la Mora");
    form1.mora.focus(); return false;
    }
	
//validando que introduzcan el ciclo
/*if (form1.ciclo.value.length==" ")
		{	
			alert("Por favor, Introdusca el Ciclo");
			form1.ciclo.focus(); return false;
		}
*/
//VALIDACIONES DE LOS TELEFONOS QUE NO SEAN MENOR QUE 13 NUMEROS

//validando que el Telefono 1 no este vacio 
if (form1.telefono_1.value.length==0)	
			{
			alert("El Telefono 1, NO puede estar vacio");
			form1.telefono_1.focus(); return true;
			}

//validando que el telefono 1 no sea menor que 13
if (form1.telefono_1.value.length!=0){
			if (form1.telefono_1.value.length<10){
			alert("El Telefono 1, NO puede ser menor de 10 numeros");
			form1.telefono_1.focus(); return true;
			}
			
			if ((form1.telefono_1.value.length==11) || (form1.telefono_1.value.length==12)){
			alert("El Telefono 1, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_1.focus(); return true;
			}
			
		}
		

//validando que el telefono 2 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_2.value.length!=0) && (form1.telefono_2.disabled==false)){
			
			if (form1.telefono_2.value.length<10){
			alert("El Telefono 2, NO puede ser menor de 10 numeros");
			form1.telefono_2.focus(); return true;
			}
			
			if ((form1.telefono_2.value.length==11) || (form1.telefono_2.value.length==12)){
			alert("El Telefono 2, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_2.focus(); return true;
			}
		}

//validando que el telefono 3 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_3.value.length!=0) && (form1.telefono_3.disabled==false)){
			
			if (form1.telefono_3.value.length<10){
			alert("El Telefono 3, NO puede ser menor de 10 numeros");
			form1.telefono_3.focus(); return true;
			}
			
			if ((form1.telefono_3.value.length==11) || (form1.telefono_3.value.length==12)){
			alert("El Telefono 3, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_3.focus(); return true;
			}

		}

//validando que el telefono 4 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_4.value.length!=0) && (form1.telefono_4.disabled==false)){

			if (form1.telefono_4.value.length<10){
			alert("El Telefono 4, NO puede ser menor de 10 numeros");
			form1.telefono_4.focus(); return true;
			}
			
			if ((form1.telefono_4.value.length==11) || (form1.telefono_4.value.length==12)){
			alert("El Telefono 4, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_4.focus(); return true;
			}

		}
		
//validando que el telefono 5 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_5.value.length!=0) && (form1.telefono_5.disabled==false)){
			
			if (form1.telefono_5.value.length<10){
			alert("El Telefono 5, NO puede ser menor de 10 numeros");
			form1.telefono_5.focus(); return true;
			}
			
			if ((form1.telefono_5.value.length==11) || (form1.telefono_5.value.length==12)){
			alert("El Telefono 5, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_5.focus(); return true;
			}

		}

//validando que el telefono 4 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_6.value.length!=0) && (form1.telefono_6.disabled==false)){
			
			if (form1.telefono_6.value.length<10){
			alert("El Telefono 6, NO puede ser menor de 10 numeros");
			form1.telefono_6.focus(); return true;
			}
			
			if ((form1.telefono_6.value.length==11) || (form1.telefono_6.value.length==12)){
			alert("El Telefono 6, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_6.focus(); return true;
			}

		}

//validando que el telefono 7 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_7.value.length!=0) && (form1.telefono_7.disabled==false)){

			if (form1.telefono_7.value.length<10){
			alert("El Telefono 7, NO puede ser menor de 10 numeros");
			form1.telefono_7.focus(); return true;
			}
			
			if ((form1.telefono_7.value.length==11) || (form1.telefono_7.value.length==12)){
			alert("El Telefono 7, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_7.focus(); return true;
			}

		}

//validando que el telefono 8 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_8.value.length!=0) && (form1.telefono_8.disabled==false)){

			if (form1.telefono_8.value.length<10){
			alert("El Telefono 8, NO puede ser menor de 10 numeros");
			form1.telefono_8.focus(); return true;
			}
			
			if ((form1.telefono_8.value.length==11) || (form1.telefono_8.value.length==12)){
			alert("El Telefono 8, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_8.focus(); return true;
			}


		}
		
//validando que el telefono 9 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_9.value.length!=0) && (form1.telefono_9.disabled==false)){
		
			if (form1.telefono_9.value.length<10){
			alert("El Telefono 9, NO puede ser menor de 10 numeros");
			form1.telefono_9.focus(); return true;
			}
			
			if ((form1.telefono_9.value.length==11) || (form1.telefono_9.value.length==12)){
			alert("El Telefono 9, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_9.focus(); return true;
			}

		}

//validando que el telefono 10 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_10.value.length!=0) && (form1.telefono_10.disabled==false)){

			if (form1.telefono_10.value.length<10){
			alert("El Telefono 10, NO puede ser menor de 10 numeros");
			form1.telefono_10.focus(); return true;
			}
			
			if ((form1.telefono_10.value.length==11) || (form1.telefono_10.value.length==12)){
			alert("El Telefono 10, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_10.focus(); return true;
			}
	
		}		


//validando que el telefono nuevo 1 no sea menor que 13

if (form1.telefono_nuevo_1.value.length!=0){
			if (form1.telefono_nuevo_1.value.length<10){
			alert("El Telefono Nuevo 1, NO puede ser menor de 10 numeros");
			form1.telefono_nuevo_1.focus(); return true;
			}
			
			if ((form1.telefono_nuevo_1.value.length==11) || (form1.telefono_nuevo_1.value.length==12)){
			alert("El Telefono Nuevo 1, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_nuevo_1.focus(); return true;
			}
			
		}

//validando que el telefono nuevo 2 no sea menor que 13

if (form1.telefono_nuevo_2.value.length!=0){
			if (form1.telefono_nuevo_2.value.length<10){
			alert("El Telefono Nuevo 2, NO puede ser menor de 10 numeros");
			form1.telefono_nuevo_2.focus(); return true;
			}
			
			if ((form1.telefono_nuevo_2.value.length==11) || (form1.telefono_nuevo_2.value.length==12)){
			alert("El Telefono Nuevo 2, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_nuevo_2.focus(); return true;
			}
			
		}


//VALIDACIONES DE LOS CAMPOS CA 

//validando que se tipifique el CA_1
if (form1.ca_1.options[form1.ca_1.selectedIndex].value==" "){
		    alert("Por favor, tipifique el telefono 1");
		    form1.ca_1.focus(); return false;
		    }		
			
//validando que el telefono 2 este deshabilitado y en 0
if ((form1.telefono_2.value.length==0) && (form1.telefono_2.disabled==false))
	{
	alert ("El telefono 2 no puede estar vacio")
			form1.telefono_2.focus();return true;
	}

//validando que se tipifique el CA_2 si esta habilitado		
if ((form1.ca_2.disabled==false) && (form1.ca_2.options[form1.ca_2.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 2");
			form1.ca_2.focus(); return false;
			}
			
//validando que el telefono 3 este deshabilitado y en 0
if ((form1.telefono_3.value.length==0) && (form1.telefono_3.disabled==false))
	{
	alert ("El telefono 3 no puede estar vacio")
			form1.telefono_3.focus();return true;
	}

//validando que se tipifique el CA_3 si esta habilitado			
if ((form1.ca_3.disabled==false) && (form1.ca_3.options[form1.ca_3.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 3");
			form1.ca_3.focus(); return false;
			}

//validando que el telefono 4 no este en 0 si esta deshabilitado 
if ((form1.telefono_4.value.length==0) && (form1.telefono_4.disabled==false))
	{
	alert ("El telefono 4 no puede estar vacio")
			form1.telefono_4.focus();return true;
	}
	
//validando que se tipifique el CA_4 si esta habilitado
if ((form1.ca_4.disabled==false) && (form1.ca_4.options[form1.ca_4.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 4");
			form1.ca_4.focus(); return false;
			}

//validando que el telefono 5 no este en 0 si esta deshabilitado 
if ((form1.telefono_5.value.length==0) && (form1.telefono_5.disabled==false))
	{
	alert ("El telefono 5 no puede estar vacio")
			form1.telefono_5.focus();return true;
	}
	
//validando que se tipifique el CA_5 si esta habilitado
if ((form1.ca_5.disabled==false) && (form1.ca_5.options[form1.ca_5.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 5");
			form1.ca_5.focus(); return false;
			}

//validando que el telefono 6 no este en 0 si esta deshabilitado 
if ((form1.telefono_6.value.length==0) && (form1.telefono_6.disabled==false))
	{
	alert ("El telefono 6 no puede estar vacio")
			form1.telefono_6.focus();return true;
	}
	
//validando que se tipifique el CA_6 si esta habilitado
if ((form1.ca_6.disabled==false) && (form1.ca_6.options[form1.ca_6.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 6");
			form1.ca_6.focus(); return false;
			}

//validando que el telefono 7 no este en 0 si esta deshabilitado 
if ((form1.telefono_7.value.length==0) && (form1.telefono_7.disabled==false))
	{
	alert ("El telefono 7 no puede estar vacio")
			form1.telefono_7.focus();return true;
	}

//validando que se tipifique el CA_7 si esta habilitado
if ((form1.ca_7.disabled==false) && (form1.ca_7.options[form1.ca_7.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 7");
			form1.ca_7.focus(); return false;
			}


//validando que el telefono 8 no este en 0 si esta deshabilitado 
if ((form1.telefono_8.value.length==0) && (form1.telefono_8.disabled==false))
	{
	alert ("El telefono 8 no puede estar vacio")
			form1.telefono_8.focus();return true;
	}

//validando que se tipifique el CA_8 si esta habilitado
if ((form1.ca_8.disabled==false) && (form1.ca_8.options[form1.ca_8.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 8");
			form1.ca_8.focus(); return false;
			}

//validando que el telefono 9 no este en 0 si esta deshabilitado 
if ((form1.telefono_9.value.length==0) && (form1.telefono_9.disabled==false))
	{
	alert ("El telefono 9 no puede estar vacio")
			form1.telefono_9.focus();return true;
	}

//validando que se tipifique el CA_9 si esta habilitado
if ((form1.ca_9.disabled==false) && (form1.ca_9.options[form1.ca_9.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 9");
			form1.ca_9.focus(); return false;
			}

//validando que el telefono 10 no este en 0 si esta deshabilitado 
if ((form1.telefono_10.value.length==0) && (form1.telefono_10.disabled==false))
	{
	alert ("El telefono 10 no puede estar vacio")
			form1.telefono_10.focus();return true;
	}

//validando que se tipifique el CA_10 si esta habilitado
if ((form1.ca_10.disabled==false) && (form1.ca_10.options[form1.ca_10.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 10");
			form1.ca_10.focus(); return false;
			}


//TIPIFICANDO LOS STATUS DE LOS TELEFONOS A IL CUANDO NO ESTEN  VACIOS LOS CAMPOS DE TELEFONOS DEL 2 AL 10 

//tipificando el status del telefono a IL si no hay nada en el campo telefono 2
if (form1.telefono_2.value==0){document.form1.status_tel2.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 3
if (form1.telefono_3.value==0){document.form1.status_tel3.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 4
if (form1.telefono_4.value==0){document.form1.status_tel4.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 5
if (form1.telefono_5.value==0){document.form1.status_tel5.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 6
if (form1.telefono_6.value==0){document.form1.status_tel6.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 7
if (form1.telefono_7.value==0){document.form1.status_tel7.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 8
if (form1.telefono_8.value==0){document.form1.status_tel8.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 9
if (form1.telefono_9.value==0){document.form1.status_tel9.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 10
if (form1.telefono_10.value==0){document.form1.status_tel10.value="IL"}


if ((form1.status_tel1.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}

if ((form1.status_tel2.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}


if ((form1.status_tel3.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}
			
if ((form1.status_tel4.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}

if ((form1.status_tel5.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}
			
if ((form1.status_tel6.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}			

if ((form1.status_tel7.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}	

if ((form1.status_tel8.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}	

if ((form1.status_tel9.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}	

if ((form1.status_tel10.value=="C") && (form1.medio.options[form1.medio.selectedIndex].value==" ")){
			alert ("Indica por que medio se contacto la Cuenta");
			form1.medio.focus(); return false;
			}	
//Mensaje para el Usuario una vez que haya completado el formulario de manera Exitosa
if (confirm('¿Estas seguro de enviar esta información?')){ 
	   alert("Gestión realizada exitosamente");
	   document.form1.submit() 
    } 


} //FIN DE LA FUNCION VALIDAR 



//VALIDANDO LOS CHECKBOXS CUANDO ESTAN SELECCIONADOS

//validando para el CheckBox  si esta seleccionado deshabilita a telefono_2, extencion_2, ca_2, cr_2 y tipo_2
function check(form)
{
	if (form1.checkbox.checked==true){
	document.form1.telefono_2.disabled=false
	document.form1.extension_2.disabled=false
	document.form1.ca_2.disabled=false
	document.form1.cr_2.disabled=false
	document.form1.tipo_2.disabled=false
	}else
	{
	document.form1.telefono_2.disabled=true
	document.form1.extension_2.disabled=true
	document.form1.ca_2.disabled=true
	document.form1.cr_2.disabled=true
	document.form1.tipo_2.disabled=true
	document.form1.telefono_2.value=" ";
	document.form1.extension_2.value=" ";
	document.form1.ca_2.value=" ";
	document.form1.cr_2.value=" ";
	document.form1.tipo_2.value=" ";
	document.form1.status_tel2.value=" ";
	}
}

//validando para el CheckBox 3 si esta seleccionado deshabilita a telefono_3, extencion_3, ca_3, cr_3 y tipo_3
function checktres(form)
{
	if (form1.checkboxtres.checked==true){
	document.form1.telefono_3.disabled=false
	document.form1.extension_3.disabled=false
	document.form1.ca_3.disabled=false
	document.form1.cr_3.disabled=false
	document.form1.tipo_3.disabled=false
	}else
	{
	document.form1.telefono_3.disabled=true
	document.form1.extension_3.disabled=true
	document.form1.ca_3.disabled=true
	document.form1.cr_3.disabled=true
	document.form1.tipo_3.disabled=true
	document.form1.telefono_3.value=" ";
	document.form1.extension_3.value=" ";
	document.form1.ca_3.value=" ";
	document.form1.cr_3.value=" ";
	document.form1.tipo_3.value=" ";
	document.form1.status_tel3.value=" ";
	}
}

//validando para el CheckBox 4 si esta seleccionado deshabilita a telefono_4, extencion_4, ca_4, cr_4 y tipo_4
function checkcuatro(form)
{
	if (form1.checkboxcuatro.checked==true){
	document.form1.telefono_4.disabled=false
	document.form1.extension_4.disabled=false
	document.form1.ca_4.disabled=false
	document.form1.cr_4.disabled=false
	document.form1.tipo_4.disabled=false
	}else
	{
	document.form1.telefono_4.disabled=true
	document.form1.extension_4.disabled=true
	document.form1.ca_4.disabled=true
	document.form1.cr_4.disabled=true
	document.form1.tipo_4.disabled=true
	document.form1.telefono_4.value=" ";
	document.form1.extension_4.value=" ";
	document.form1.ca_4.value=" ";
	document.form1.cr_4.value=" ";
	document.form1.tipo_4.value=" ";
	document.form1.status_tel4.value=" ";
	}
}

//validando para el CheckBox 5 si esta seleccionado deshabilita a telefono_5, extencion_5, ca_5, cr_5 y tipo_5
function checkcinco(form)
{
	if (form1.checkboxcinco.checked==true){
	document.form1.telefono_5.disabled=false
	document.form1.extension_5.disabled=false
	document.form1.ca_5.disabled=false
	document.form1.cr_5.disabled=false
	document.form1.tipo_5.disabled=false
	}else
	{
	document.form1.telefono_5.disabled=true
	document.form1.extension_5.disabled=true
	document.form1.ca_5.disabled=true
	document.form1.cr_5.disabled=true
	document.form1.tipo_5.disabled=true
	document.form1.telefono_5.value=" ";
	document.form1.extension_5.value=" ";
	document.form1.ca_5.value=" ";
	document.form1.cr_5.value=" ";
	document.form1.tipo_5.value=" ";
	document.form1.status_tel5.value=" ";
	}
}

//validando para el CheckBox 6 si esta seleccionado deshabilita a telefono_6, extencion_6, ca_6, cr_6 y tipo_6
function checkseis(form)
{
	if (form1.checkboxseis.checked==true){
	document.form1.telefono_6.disabled=false
	document.form1.extension_6.disabled=false
	document.form1.ca_6.disabled=false
	document.form1.cr_6.disabled=false
	document.form1.tipo_6.disabled=false
	}else
	{
	document.form1.telefono_6.disabled=true
	document.form1.extension_6.disabled=true
	document.form1.ca_6.disabled=true
	document.form1.cr_6.disabled=true
	document.form1.tipo_6.disabled=true
	document.form1.telefono_6.value=" ";
	document.form1.extension_6.value=" ";
	document.form1.ca_6.value=" ";
	document.form1.cr_6.value=" ";
	document.form1.tipo_6.value=" ";
	document.form1.status_tel6.value=" ";
	}
}

//validando para el CheckBox 7 si esta seleccionado deshabilita a telefono_7, extencion_7, ca_7, cr_7 y tipo_7
function checksiete(form)
{
	if (form1.checkboxsiete.checked==true){
	document.form1.telefono_7.disabled=false
	document.form1.extension_7.disabled=false
	document.form1.ca_7.disabled=false
	document.form1.cr_7.disabled=false
	document.form1.tipo_7.disabled=false
	}else
	{
	document.form1.telefono_7.disabled=true
	document.form1.extension_7.disabled=true
	document.form1.ca_7.disabled=true
	document.form1.cr_7.disabled=true
	document.form1.tipo_7.disabled=true
	document.form1.telefono_7.value=" ";
	document.form1.extension_7.value=" ";
	document.form1.ca_7.value=" ";
	document.form1.cr_7.value=" ";
	document.form1.tipo_7.value=" ";
	document.form1.status_tel7.value=" ";
	}
}

//validando para el CheckBox 8 si esta seleccionado deshabilita a telefono_8, extencion_8, ca_8, cr_8 y tipo_8
function checkocho(form)
{
	if (form1.checkboxocho.checked==true){
	document.form1.telefono_8.disabled=false
	document.form1.extension_8.disabled=false
	document.form1.ca_8.disabled=false
	document.form1.cr_8.disabled=false
	document.form1.tipo_8.disabled=false
	}else
	{
	document.form1.telefono_8.disabled=true
	document.form1.extension_8.disabled=true
	document.form1.ca_8.disabled=true
	document.form1.cr_8.disabled=true
	document.form1.tipo_8.disabled=true
	document.form1.telefono_8.value=" ";
	document.form1.extension_8.value=" ";
	document.form1.ca_8.value=" ";
	document.form1.cr_8.value=" ";
	document.form1.tipo_8.value=" ";
	document.form1.status_tel8.value=" ";
	}
}

//validando para el CheckBox 9 si esta seleccionado deshabilita a telefono_9, extencion_9, ca_9, cr_9 y tipo_9
function checknueve(form)
{
	if (form1.checkboxnueve.checked==true){
	document.form1.telefono_9.disabled=false
	document.form1.extension_9.disabled=false
	document.form1.ca_9.disabled=false
	document.form1.cr_9.disabled=false
	document.form1.tipo_9.disabled=false
	}else
	{
	document.form1.telefono_9.disabled=true
	document.form1.extension_9.disabled=true
	document.form1.ca_9.disabled=true
	document.form1.cr_9.disabled=true
	document.form1.tipo_9.disabled=true
	document.form1.telefono_9.value=" ";
	document.form1.extension_9.value=" ";
	document.form1.ca_9.value=" ";
	document.form1.cr_9.value=" ";
	document.form1.tipo_9.value=" ";
	document.form1.status_tel9.value=" ";
	}
}

//validando para el CheckBox 10 si esta seleccionado deshabilita a telefono_10, extencion_10, ca_10, cr_10 y tipo_10
function checkdiez(form)
{
	if (form1.checkboxdiez.checked==true){
	document.form1.telefono_10.disabled=false
	document.form1.extension_10.disabled=false
	document.form1.ca_10.disabled=false
	document.form1.cr_10.disabled=false
	document.form1.tipo_10.disabled=false
	}else
	{
	document.form1.telefono_10.disabled=true
	document.form1.extension_10.disabled=true
	document.form1.ca_10.disabled=true
	document.form1.cr_10.disabled=true
	document.form1.tipo_10.disabled=true
	document.form1.telefono_10.value=" ";
	document.form1.extension_10.value=" ";
	document.form1.ca_10.value=" ";
	document.form1.cr_10.value=" ";
	document.form1.tipo_10.value=" ";
	document.form1.status_tel10.value=" ";
	}
}


//validando si la cuenta esta sucursalizada

function checksucursalizada(form)
{
	if (form1.sucursalizada.options[form1.sucursalizada.selectedIndex].value=="NO"){

	document.form1.nombre_ref_1.disabled=false
	document.form1.telefono_ref_1.disabled=false
	document.form1.nombre_ref_2.disabled=false
	document.form1.telefono_ref_2.disabled=false
	document.form1.nombre_ref_3.disabled=false
	document.form1.telefono_ref_3.disabled=false
	document.form1.nombre_beneficiario.disabled=false
	document.form1.telefono_beneficiario.disabled=false
	document.form1.domicilios_alternos_1.disabled=false
	document.form1.domicilios_alternos_2.disabled=false
	}else
	{
	document.form1.nombre_ref_1.disabled=true 
	document.form1.telefono_ref_1.disabled=true 
	document.form1.nombre_ref_2.disabled= true
	document.form1.telefono_ref_2.disabled=true 
	document.form1.nombre_ref_3.disabled=true 
	document.form1.telefono_ref_3.disabled=true 
	document.form1.nombre_beneficiario.disabled= true 
	document.form1.telefono_beneficiario.disabled=true 
	document.form1.domicilios_alternos_1.disabled=true 
	document.form1.domicilios_alternos_2.disabled=true 
	}
}
//FUNCIONES PARA EVALUAR SI LOS CAMPOS CR PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista

//FUNCION  PARA EVALUAR EL CAMPO CR_1 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactouno (form)
{
	//validando que se Seleccione un tipo de CR_1 cuando el campo CA_1 sea igual a LL
	if ((form1.ca_1.value.length="LL") && (form1.cr_1.options[form1.cr_1.selectedIndex].value=="Seleccione una opcion")) 
	{
	alert("Seleccione un tipo de contacto en el Telefono 1");
	form1.cr_1.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_2 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactodos(form)
{
	//validando que se Seleccione un tipo de CR_2 cuando el campo CA_2 sea igual a LL
	if ((form1.ca_2.value.length="LL") && (form1.cr_2.options[form1.cr_2.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 2");
		form1.cr_2.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_3 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactotres(form)
{
	//validando que se Seleccione un tipo de CR_3 cuando el campo CA_3 sea igual a LL
	if ((form1.ca_3.value.length="LL") && (form1.cr_3.options[form1.cr_3.selectedIndex].value=="Seleccione una opcion")){
		alert("Seleccione un tipo de contacto en el Telefono 3");
		form1.cr_3.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_4 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactocuatro(form)
{

	//validando que se Seleccione un tipo de CR_4 cuando el campo CA_4 sea igual a LL
	if ((form1.ca_4.value.length="LL") && (form1.cr_4.options[form1.cr_4.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 4");
		form1.cr_4.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_5 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactocinco(form)
{
	//validando que se Seleccione un tipo de CR_5 cuando el campo CA_5 sea igual a LL
	if ((form1.ca_5.value.length="LL") && (form1.cr_5.options[form1.cr_5.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 5");
		form1.cr_5.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_6 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactoseis(form)
{
	//validando que se Seleccione un tipo de CR_6 cuando el campo CA_6 sea igual a LL
	if ((form1.ca_6.value.length="LL") && (form1.cr_6.options[form1.cr_6.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 6");
		form1.cr_6.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_7 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactosiete(form)
{
	//validando que se Seleccione un tipo de CR_7 cuando el campo CA_7 sea igual a LL
	if ((form1.ca_7.value.length="LL") && (form1.cr_7.options[form1.cr_7.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 7");
		form1.cr_7.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_8 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactoocho(form)
{
	//validando que se Seleccione un tipo de CR_8 cuando el campo CA_8 sea igual a LL
	if ((form1.ca_8.value.length="LL") && (form1.cr_8.options[form1.cr_8.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 8");
		form1.cr_8.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_9 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactonueve(form)
{
	//validando que se Seleccione un tipo de CR_9 cuando el campo CA_9 sea igual a LL
	if ((form1.ca_9.value.length="LL") && (form1.cr_9.options[form1.cr_9.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 9");
		form1.cr_9.focus(); return false;
	}
}
//FUNCION  PARA EVALUAR EL CAMPO CR_10 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactodiez(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.ca_10.value.length="LL") && (form1.cr_10.options[form1.cr_10.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 10");
		form1.cr_10.focus(); return false;
	}	
}


</script>

<SCRIPT LANGUAGE="JavaScript"> 
 
<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
 
<!-- Begin
function win() {
msg=window.open("","msg","height=500,width=700,left=80,top=80");
msg.document.write("<html><title>Directorio Localización</title>");
msg.document.write("<body bgcolor='white' onblur=window.close()>");
msg.document.write("<center><img src='imagenes/logo1.jpg' height=100,width=100 onblur=window.close()> </center>");
msg.document.write("<img src='imagenes/directorio.jpg' onblur=window.close()>");
msg.document.write("</body></html><p>");
 
// If you just want to open an existing HTML page in the 
// new window, you can replace win()'s coding above with:
// window.open("page.html","","height=200,width=200,left=80,top=80");
 
}


function fullwin() {

window.open("http://172.18.76.219/sistema_de_localizacion/fotos.php","","fullscreen,scrollbars")
 
}


function opcionestipo3(form)
{
var select = form.cr_3.options;
var combo = form.tipo_3.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
	
}
</script> 

<script>
//funcion de seleccion para los botones CA_4, CR_4 y TIPO_4
function opciones_sucursalizada(form)
{
	if (form1.sucursalizada.options[form1.sucursalizada.selectedIndex].value=="NO") 
	{			
		alert("Si la cuenta, NO esta Sucursalizada, No olvides en consultar el Expediente y capturar las Referencias, Beneficiarios y Domicilios Alternos");
		form1.sucursalizada.focus(); return false;
	}
}

</script>
