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
		
//Consulta para regresar los datos del Usuario logueado

$rst_cuentas=mysql_query("SELECT * FROM asesores WHERE usuario LIKE '%".$_SESSION["usuario"]."%'",$conexion); 
$num_registros=mysql_num_rows($rst_cuentas);
$fila=mysql_fetch_array($rst_cuentas);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Localizacion-<?php echo $fila["nombre"];?></title>
<!-- Código del Icono -->
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
<style type="text/css">
<!--
.style15 {	color: #0066CC;
	font-size: 18px;
}
.style4 {	color: #0033CC;
	font-weight: bold;
}
.style19 {
	color: #0066FF;
	font-weight: bold;
}
.style20 {color: #0000FF}
a:link {
	color: #0066FF;
}
a:visited {
	color: #0066FF;
}
a:hover {
	color: #0066FF;
}
a:active {
	color: #0066FF;
}
.style21 {
	color: #000099;
	font-weight: bold;
}
.style23 {
	color: #0000CC;
	font-weight: bold;
}
.style24 {
	color: #000000;
	font-weight: bold;
}
.style25 {color: #000000}
.style26 {
	color: #BB0000;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF" text="#FFFFFF">
<p align="center"><img src="imagenes/margen11.jpg" width="1293" height="25"/></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1033" height="50"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="251"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<div align="center">
  <table width="686" border="0">
    <tr>
      <td width="383" rowspan="13"><div align="center"><img src="imagenes/logo1.jpg" width="266" height="209" /></div></td>
      <td width="293"><div align="left"><span class="style21">Bienvenido</span>: <span class="style15"> <?php echo $fila["nombre"]; /*Mostrando nombre de Usuario*/ /*echo $fila["nombre"]; echo $_COOKIE["usuario_nombre"];*/ ?> </span></div></td>
    </tr>
    <tr>
      <td><div align="left"><span class="style4">Eslabon: <span class="style15"> <?php echo $_COOKIE["usuario_nombre"];?></span></span></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center" class="style23">Selecciona una opci&oacute;n </div></td>
    </tr>
    <tr>
      <td><div align="left"></div></td>
    </tr>
    <tr>
      <td><p align="left" class="style24"><a href="Ejecutivo_nuevo.php" class="style25">MARCACION</a></p></td>
    </tr>
    <tr>
      <td><div align="left"><a href="Ejecutivo_nuevo_HH.php" class="style26">REMARCACION</a></div></td>
    </tr>
    
    <tr>
      <td height="23"><div align="left"><strong><a href="buscar_cuentas_1.php">PREDICTIVO</a></strong></div></td>
    </tr>
    
    
    <tr>
      <td height="23"><div align="left"><strong><a href="Ejecutivo_tel.php">Buscar Telefonos Cecoban</a></strong></div></td>
    </tr>
    <tr>
      <td height="24"><div align="left"><strong><a href="captura_expedientes.php">Captura de Expedientes </a></strong></div></td>
    </tr>
    
    <tr>
      <td height="23"><div align="left"><a href="Ejecutivo_nuevo_ctel.php" class="style24">MARCACION CON TELEFONOS </a></div></td>
    </tr>
    <tr>
      <td height="23"><div align="left"><a href="buscar_contactos.php"><strong>CONTACTOS</strong></a></div></td>
    </tr>
    <tr>
      <td height="23"><ol>
        <ul>
<li><a href="http://172.18.27.100:3030"></a></li>
<li></li>
        </ul>      </td>
    </tr>k
  </table>
  <p>&nbsp;</p>
</div>
<p align="center" class="style20"><span class="style19"><a href="Salirexa">Salir</a>
     <label></label>
     <label>  </label>
 </span>
<hr align="center" color="#003399" />
<div align="center">
  <div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
</div>
</body>
</html>
