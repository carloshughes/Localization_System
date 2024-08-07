<?php 
//Desarrollado por Carlos Iván Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessión
session_start();

//conexion a la base de datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
//include ("verificasession.php");

include("verificasessionexa.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de visitas Domiciliarias</title>
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
<p align="center" class="style4"><img src="imagenes/logo1.jpg" width="266" height="209" /></p>
<p align="center" class="style4 style25">&nbsp;</p>
<p align="center" class="style22">&quot;Cuenta ya capturada&quot;</p>
<p align="center" class="style22">&nbsp;</p>
<p align="center" class="style22"><a href="captura_expedientes.php" class="style25">Regresar</a></p>
<hr align="center" color="#003399" />
<div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2011</strong></font></font></font></font></font></div>
</body>
</html>
