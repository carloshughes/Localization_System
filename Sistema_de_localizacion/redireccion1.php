<?php 
//Desarrollado por Carlos Iv�n Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessi�n
session_start();

//conexion a la base de datos
include("conexion.php");

//include("verificasessionexa.php");

$asesores=mysql_query("delete FROM base_marcar WHERE status='Trabajada'",$conexion);
sleep(7);
header("Location:nuevo_pu_oc2.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Localizacion-<?php echo $fila["nombre"];?></title>

<!-- C�digo del Icono -->
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
    <td width="1037" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="247"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style22"><img src="imagenes/LOCALIZACION.JPG" width="416" height="205" /></p>
<p align="center" class="style22">Cargando Informaci&oacute;n</p>
<p align="center" class="style22"><img src="loading_bbnj3w75.gif" width="240" height="227" /></p>
<hr align="center" color="#003399" />
<p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></p>
<p>&nbsp; </p>
</body>
</html>
