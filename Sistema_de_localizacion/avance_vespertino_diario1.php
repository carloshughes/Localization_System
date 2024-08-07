<?php 
//Desarrollado por Carlos Iván Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessión
session_start();

//conexion a la base de datos
include("conexion.php");

//Consulta para regresar el nombre del Administrador

$rst_cuentas=mysql_query("SELECT * FROM administrador",$conexion); 
$filas=mysql_fetch_array($rst_cuentas);

//consulta para obtener solo a los asesores del turno Matutino
$asesores=mysql_query("SELECT * FROM asesores WHERE turno='VESPERTINO'",$conexion); 
$num_asesores=mysql_num_rows($asesores);


//se verifica que se salga de la aplicacion de manera segura
//include("verificasessionadmi.php");
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
body,td,th {
	color: #0000FF;
}
.style27 {color: #FFFFFF}
.style29 {color: #FFFFFF; font-weight: bold; }
body {
	background-image: url();
	background-repeat: no-repeat;
}
-->
</style>
</head>
<body onload="setTimeout('location.reload()',120000)" bgcolor="#FFFFFF">
<p align="center"><img src="imagenes/logo1.jpg" width="266" height="209" /></p>
<table width="1031" align="center">
  
  <tr>
    <td colspan="2"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="191" colspan="2" bgcolor="#000099"><div align="left" class="style29">
        <div align="center">ESLABON</div>
      </div></td>
    <td bgcolor="#0033CC"><span class="style29">NOMBRE</span></td>
    <td bgcolor="#0066FF"><div align="center" class="style29">TRABAJADAS</div></td>
    <td bgcolor="#0099FF"><div align="center"><span class="style29">CONTACTOS</span></div></td>
    <td colspan="2" bgcolor="#0099FF"><div align="center" class="style29">PORCENTAJE EFECTIVIDAD </div></td>
  </tr>
  
  <tr>
	<?php 	
		while ($fila=mysql_fetch_array($asesores))
		{			
		//consulta para saber cuantas, cuentas fueron asginadas a cada asesor
		$sql= "SELECT  count(*) contactos FROM nueva_base_captura WHERE eslabon='".$fila["usuario"]."' and fecha ='".$fecha = date ("Y-m-d")."' and status_cuenta='CONTACTO'";
		$rs = mysql_query($sql, $conexion);
		$count = mysql_fetch_array($rs);
		
		//consulta para saber cuentas cuentas, han sido trabajadas por cada asesor
		$sql_1= "SELECT  count(*) avance FROM nueva_base_captura WHERE eslabon='".$fila["usuario"]."' and fecha ='".$fecha = date ("Y-m-d")."'";
		$rs_1 = mysql_query($sql_1, $conexion);
		$count_1 = mysql_fetch_array($rs_1);
		
		@$porcentaje = $count['contactos'] / $count_1['avance'];
		$multiplicacion = ($porcentaje * 100);				
?>
    <td height="21" colspan="2"><div align="center"><strong><?php echo $fila ["usuario"];?></strong></div>
    <td width="385"><strong>
    <?php	echo $fila["nombre"];?>
    </strong></td>
    <td width="93"><div align="center"><strong><?php echo $count_1['avance'];?></strong></div></td>
    <td width="106"><div align="center"><strong><?php echo $count['contactos'];?></strong></div></td>
    <td width="51">      <div align="right"><strong>
      <?php  echo round ($multiplicacion,2);?>    
    </strong></div></td>
    <td width="51"><div align="center"><strong>%</strong></div></td>
  </tr>
  
  <?php
}
?>
</table>
<hr align="center" color="#003399" />
<div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
<p>&nbsp;</p>
</body>
</html>
