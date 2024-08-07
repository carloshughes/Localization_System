<?php 
//Desarrollado por Carlos Iván Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessión
session_start();

//conexion a la base de datos
include("conexion.php");


//se verifica que se salga de la aplicacion de manera segura
include("verificasessionadmi.php");

//Consulta solo para regresar el nombre del Administrador 
$rst_cuentas=mysql_query("SELECT * FROM administrador",$conexion); 
$filas=mysql_fetch_array($rst_cuentas);

//Consulta para obtener a los asesores del turno VESPERTINO 
$asesores=mysql_query("SELECT * FROM asesores WHERE turno='VESPERTINO'",$conexion); 
$num_asesores=mysql_num_rows($asesores);

//$fila=mysql_fetch_array($asesores);

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
.style26 {color: #0000FF}
body,td,th {
	color: #0000FF;
}
.style27 {color: #FFFFFF}
.style29 {color: #FFFFFF; font-weight: bold; }
.style30 {
	color: #0000CC;
	font-weight: bold;
}
.style31 {color: #0000CC}
.style32 {
	color: #000066;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF">
<p align="center" class="style4"><img src="imagenes/margen11.jpg" width="1293" height="25"/></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style4">&nbsp;</p>
<table width="954" align="center">
  <tr>
    <td width="178" rowspan="5"><div align="center"><img src="imagenes/logo.JPG" width="178" height="135" /></div></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="3"><div align="center"></div></td>
    <td colspan="2" rowspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><p align="center" class="style4 style41">B i e n v e n i d o</p></td>
  </tr>
  <tr>
    <td colspan="2"><strong><span class="style4 style41">
      <?php $_COOKIE["usuario_nombre"];?>
    </span></strong></td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><div align="center"><span class="style4"><?php echo $filas["nombre"]; /*Mostrando nombre de Usuario*/ /*echo $fila["nombre"]; echo $_COOKIE["usuario_nombre"];*/ ?></span></div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="178"><strong>VESPERTINO</strong></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="3"><div align="center"><strong><span class="style26">CUENTAS </span></strong></div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000099"><div align="left" class="style32"><span class="style27"><strong>ESLABON</strong></span></div>      </td>
    <td bgcolor="#0033CC"><span class="style27"><strong>NOMBRE</strong></span></td>
    <td bgcolor="#0066FF"><div align="center"><span class="style27"><strong>ASIGNADAS</strong></span></div></td>
    <td bgcolor="#0066FF"><div align="center" class="style27"><strong>TRABAJADAS</strong></div></td>
    <td bgcolor="#000066"><div align="center" class="style29">PENDIENTES</div></td>
    <td colspan="2" bgcolor="#0099FF"><div align="center" class="style27"><strong>PORCENTAJE</strong></div></td>
  </tr>
  
  <tr>
    <td colspan="2" bgcolor="#FFFFFF"><div align="center"><span class="style27"></span></div>      <span class="style27"></span></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="center"></div></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><span class="style31"></span></td>
    <td colspan="2" bgcolor="#FFFFFF"><span class="style27"></span></td>
  </tr>
  <tr>
	<?php 	
		while ($fila=mysql_fetch_array($asesores))
		{			
		//consulta para saber cuantas, cuentas fueron asginadas a cada asesor
		$sql= "SELECT  count(*) asignadas FROM base_telefonos WHERE eslabon='".$fila["usuario"]."'";
		$rs = mysql_query($sql, $conexion);
		$count = mysql_fetch_array($rs);

		//consulta para saber cuentas cuentas, han sido trabajadas por cada asesor
		$sql_1= "SELECT  count(*) avance FROM base_telefonos WHERE eslabon='".$fila["usuario"]."' and status='Trabajada' ";
		$rs_1 = mysql_query($sql_1, $conexion);
		$count_1 = mysql_fetch_array($rs_1);
		@$porcentaje = $count_1['avance'] / $count['asignadas'];
		$multiplicacion = ($porcentaje * 100);				
?>
    <td colspan="2"><div align="center"><a href="cuentas_trabajadas.php?cod=<?php echo $fila ["usuario"];?>" class="style19"></a> 
      <?php	echo $fila["usuario"];?>
    </div>      <div align="left"></div></td>
    <td width="338"><div align="left">
      <?php	echo $fila["nombre"];?>
    </div></td>
    <td width="93"><div align="center"><?php echo $count['asignadas'];?></div></td>
    <td width="106"><div align="center"><?php echo $count_1['avance'];?></div></td>
    <td width="100" bgcolor="#FFFFFF"><div align="center" class="style30">
      <?php $pendientes = $count['asignadas'] - $count_1['avance']; echo $pendientes;?>
    </div></td>
    <td width="58">      <div align="right">
      <?php  echo round ($multiplicacion,2	);?>    
    </div></td>
    <td width="47"><div align="center">%</div></td>
  </tr>
  
  <?php
}
?>
</table>
<p align="center" class="style22"><a href="turnos.php" class="style25">Regresar</a></p>
<hr align="center" color="#003399" />
<div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
<p>&nbsp;</p>
</body>
</html>
