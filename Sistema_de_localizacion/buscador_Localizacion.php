<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include ("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
//include ("verificasessionexa.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Soluciones de Credito Bancomer</title>
<style type="text/css">
<!--
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
.style18 {color: #0066CC; font-size: 24px; font-weight: bold; }
a:link {
	color: #003399;
}
a:active {
	color: #003399;
}
.style19 {
	color: #003399;
	font-weight: bold;
}
-->
</style>
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
<style type="text/css">
<!--
.style27 {color: #003399}
.style27 {color: #003399}
-->
</style>
</head>
<body>
<p>
  <style> 
<!--
.intro{
position:absolute;
left:0;
top:0;
layer-background-color:#0066CC;
background-color:#0066CC;
border:0.1px solid blue
}
-->
  </style>
</p>
<div id="i1" class="intro"></div>
<div id="i2" class="intro"></div>
<div id="i3"
class="intro"></div>
<div id="i4" class="intro"></div>
<div id="i5" class="intro"></div>
<div
id="i6" class="intro"></div>
<div id="i7" class="intro"></div>
<div id="i8" class="intro"></div>
<p align="center" class="style4"><img src="imagenes/margen11.jpg" width="1293" height="25"/></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<div align="center">
  <p><font color="#003399" size="4"><strong><font bgcolor="#FFFFFF">Soluciones de Credito Bancomer</font></strong></font></p>
</div>
<form id="form1" name="form1" method="post" action="PU_buscador.php">
  <table width="847" border="0" align="center">
    
    <tr>
      <td width="415" rowspan="6"></object>
      <span class="style4"><img src="imagenes/logo.JPG" width="415" height="326" /></span></td>
      <td>&nbsp;</td>
      <td width="83">&nbsp;</td>
      <td width="212">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style4">Bienvenido</span></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="42">&nbsp;</td>
      <td height="42">&nbsp;</td>
      <td height="42">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left"><span class="style19">Buscar Cuenta</span></div></td>
      <td colspan="2"><input name="busqueda" type="text" size="50" onchange="mis_datos()"/></td>
    </tr>
    <tr>
      <td width="119">&nbsp;</td>
      <td colspan="2">&nbsp;</td></tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr align="center" color="#003399" />
<p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong><a href="mailto:cihughes@atento.com.mx">Created by: Carlos Hughes ||</a></strong></font></font></font></font></font><a href="mailto:cihughes@atento.com.mx"><font size="2"><font size="2"><font size="2"><font size="2"><font size="2"><span class="style27"><font size="2"><font size="2"><font size="2"><strong>Desarrollo</strong></font></font></font><strong>||</strong></span></font></font></font></font></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font><font color="#003399"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>