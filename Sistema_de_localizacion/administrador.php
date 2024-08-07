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
//$rst_cuentas=mysql_query("SELECT * FROM base WHERE eslabon LIKE '%".$_SESSION["usuario"]."%'",$conexion); 

//$sql = "SELECT COUNT(*) as contador FROM tabla";
/*$sql= "SELECT  count(*) contador FROM base  WHERE status='Trabajada'";
$rs = mysql_query($sql, $conexion);
$count = mysql_fetch_array($rs);
echo 'Cuentas Trabajadas= '.$count['contador'].'';*/

//usuario ='". $_REQUEST["usuario"] ."'
/*
$sql= "SELECT  count(*) contador FROM base_captura  WHERE eslabon='".$_SESSION["usuario"]."'";
$rs = mysql_query($sql, $conexion);
$count = mysql_fetch_array($rs);
echo 'Cuentas Trabajadas= '.$count['contador'].'';

echo "<br>";

$sql="SELECT count(*) Contactos FROM base_captura WHERE eslabon = '".$_SESSION["usuario"]."' AND status_cuenta = 'C'";
$rs = mysql_query($sql, $conexion);
$count = mysql_fetch_array($rs);
echo 'Cuentas Contactadas= '.$count['Contactos'].'';

echo "<br>";

$sql="SELECT count(*) Posibles_Contactos FROM base_captura WHERE eslabon = '".$_SESSION["usuario"]."' AND status_cuenta = 'PC'";
$rs = mysql_query($sql, $conexion);
$count = mysql_fetch_array($rs);
echo 'Cuentas de Posible Contacto= '.$count['Posibles_Contactos'].'';
	
echo "<br>";

$sql="SELECT count(*) Ilocalizables FROM base_captura WHERE eslabon = '".$_SESSION["usuario"]."' AND status_cuenta = 'IL'";
$rs = mysql_query($sql, $conexion);
$count = mysql_fetch_array($rs);
echo 'Cuentas Ilocalizables= '.$count['Ilocalizables'].'';
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Localizacion</title>

<!-- Código del Icono -->
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
<style type="text/css">
<!--
.style4 {	color: #0033CC;
	font-weight: bold;
}
a:link {
	color: #0000FF;
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
.style22 {color: #0033CC; font-weight: bold; font-size: xx-large; }
.style25 {font-size: 18px}
-->
</style>
</head>
<body bgcolor="#FFFFFF" text="#FFFFFF">
<p align="center" class="style4"><img src="imagenes/margen11.jpg" width="1293" height="25"/></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style4"><img src="imagenes/logo.JPG" width="398" height="295" /></p>
<p align="center" class="style4 style25">&nbsp;</p>
<p align="center" class="style22">Sitio en Desarrollo</p>
<p align="center" class="style22">&nbsp;</p>
<p align="center" class="style22"><a href="inicio.php" class="style25">Regresar</a></p>
<hr align="center" color="#003399" />
<div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
</body>
</html>
