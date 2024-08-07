<?php 
//Desarrollado por Carlos Iván Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessión
session_start();

//conexion a la base de datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
//include ("verificasession.php");
//include("verificasessionexa.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Localizacion</title>
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
<style type="text/css">
<!--
.style22 {color: #0033CC; font-weight: bold; font-size: 18px; }
.style25 {font-size: 18px}
.style26 {font-size: 14px}
.style27 {color: #003399}
.style4 {color: #0033CC;
	font-weight: bold;
}
.style4 {	color: #0033CC;
	font-weight: bold;
}
a:link {
	color: #000066;
}
a:visited {
	color: #0066CC;
}
a:hover {
	color: #0066FF;
}
a:active {
	color: #0099FF;
}
.style22 {color: #0033CC; font-weight: bold; font-size: 18px; }
.style25 {font-size: 18px}
.style26 {font-size: 14px}
.style27 {color: #003399}
-->

</style>
</HEAD>
<BODY bgcolor="#FFFFFF">
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
<div id="i1" class="intro"></div><div id="i2" class="intro"></div><div id="i3"
class="intro"></div><div id="i4" class="intro"></div><div id="i5" class="intro"></div><div
id="i6" class="intro"></div><div id="i7" class="intro"></div><div id="i8" class="intro"></div>
<p align="center" class="style4"><img src="imagenes/margen11.jpg" width="1293" height="25"/></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
	  
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style4"><img src="imagenes/logo1.JPG" width="253" height="169" /></p>
<p align="center" class="style4"><span class="style4 style26">Seleccione la opci&oacute;n deseada</span></p>
<table width="578" height="359" border="0" align="center">
  <tr>
    <td width="591" height="353" background="imagenes/buscar-redes-sociales.JPG"><p class="style4 style25">&nbsp;</p>
        <p class="style4 style25">&nbsp;</p>
      <p class="style4 style25">&nbsp;</p>
      <p class="style4 style25">&nbsp;</p>
      <p class="style4 style25">&nbsp;</p>
      <p class="style4 style25">&nbsp;</p>
      <p align="center" class="style4 style25"><span class="style27"><a href="Inicio_Ejecutivo.php"> Asesor</a> || <a href="inicio_administrador.php">Administrador </a></span></p></td>
  </tr>
</table>
<hr align="center" color="#003399" />
<div align="center"></div>
<div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong><a href="mailto:cihughes@atento.com.mx">Created by: Carlos Hughes ||</a></strong></font></font></font></font></font><a href="mailto:cihughes@atento.com.mx"><font size="2"><font size="2"><font size="2"><font size="2"><font size="2"><span class="style27"><font size="2"><font size="2"><font size="2"><strong>Desarrollo</strong></font></font></font><strong>||</strong></span></font></font></font></font></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font><font color="#003399"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></a></div>
</body>
</html>
