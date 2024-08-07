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
$asesores=mysql_query("SELECT * FROM asesores ",$conexion); 
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
.style29 {color: #FFFFFF; font-weight: bold; }
body {
	background-image: url();
	background-repeat: no-repeat;
}
.style36 {font-size: 18px}
.style37 {color: #FFFFFF; font-weight: bold; font-size: 18px; }
.style43 {font-size: larger; font-weight: bold; }
.style46 {color: #FFFFFF}
.style47 {font-size: larger; font-weight: bold; color: #FFFFFF; }
-->
</style>
</head>
<body onload="setTimeout('location.reload()',120000)" bgcolor="#FFFFFF">
<p align="center"><img src="imagenes/logo1.jpg" width="266" height="209" /></p>
<table width="1142" align="center">
  
  <tr>
    <td height="25" colspan="7"><div align="left"><strong><font color="#000099">
      <?php include ("fecha.php") // hora actualizada ?>
    </font></strong></div></td>
  </tr>
  <tr>
    <td bgcolor="#000099"><div align="left" class="style29 style36">
        <div align="center">ESLABON</div>
      </div></td>
    <td bgcolor="#0033CC"><div align="left"><span class="style37">NOMBRE</span></div></td>
    <td bgcolor="#0066FF"><div align="center" class="style37">TRABAJADAS</div></td>
    <td bgcolor="#0099FF"><div align="center" class="style36"><span class="style29">CONTACTOS</span></div></td>
    <td width="124" bgcolor="#0099FF"><p align="center" class="style29">CONTACTOS</p>
      <p align="center" class="style29">REMARCACION</p>    </td>
    <td bgcolor="#0066FF"><p align="center" class="style29 style46">CONTACTOS</p>
    <p align="center" class="style29">PREDICTIVO</p></td>
    <td bgcolor="#0099FF"><div align="center"><span class="style46"></span>
      <p align="center" class="style29 style46">CONTACTOS</p>
      <p align="center" class="style29">TOTALES</p>
    </div></td>
  </tr>
  
  
  <tr>
    <td height="21">  
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"><span class="style46"></span></div></td>
  </tr>
  <tr>
	<?php 	
		while ($fila=mysql_fetch_array($asesores))
		{			
		//consulta para saber cuantas, cuentas tiene con contacto
		$sql= "SELECT  count(*) contactos FROM nueva_base_captura WHERE eslabon='".$fila["usuario"]."' and fecha ='".$fecha = date ("Y-m-d")."' and status_cuenta='CONTACTO'";
		$rs = mysql_query($sql, $conexion);
		$count = mysql_fetch_array($rs);

		//consulta para saber cuantas, cuentas tiene con contacto con la remarcacion
		
		$sqlr= "SELECT  count(*) contactosr FROM nueva_base_captura WHERE eslabon='".$fila["usuario"]."' and fecha ='".$fecha = date ("Y-m-d")."' and status_cuenta_2='CONTACTO' and gestion='2'";
		$rsr = mysql_query($sqlr, $conexion);
		$countr = mysql_fetch_array($rsr);
		
		$sqlp= "SELECT  count(*) contactosp FROM nueva_base_captura WHERE eslabon='".$fila["usuario"]."' and fecha ='".$fecha = date ("Y-m-d")."'  and status_cuenta_pre='CONTACTO'";
		$rsrp = mysql_query($sqlp, $conexion);
		$countp = mysql_fetch_array($rsrp);
		
		
		@$suma_total = $count['contactos'] + $countr['contactosr'] + $countp['contactosp'];
		
		//consulta para saber cuentas cuentas, han sido trabajadas por cada asesor
		$sql_1= "SELECT  count(*) avance FROM nueva_base_captura base_captura WHERE eslabon='".$fila["usuario"]."' and fecha ='".$fecha = date ("Y-m-d")."'";
		$rs_1 = mysql_query($sql_1, $conexion);
		$count_1 = mysql_fetch_array($rs_1);
		
		
		@$porcentaje = $count['contactos'] / $count_1['avance'];
		$multiplicacion = ($porcentaje * 100);				
?>
    <td height="9"><div align="center" class="style43"><?php echo $fila ["usuario"];?></div>
    <td width="546"><span class="style43">
    <?php	echo $fila["nombre"];?>
    </span></td>
    <td width="120"><div align="center" class="style43"><?php echo $count_1['avance'];?></div></td>
    <td width="112"><div align="center" class="style43"><?php echo $count['contactos'];?></div></td>
    <td><div align="center"><span class="style43"><?php echo $countr['contactosr'];?></span></div></td>
    <td width="99" bgcolor="#0066FF"><div align="center" class="style46">
        <div align="center"><span class="style43"><?php echo $countp['contactosp'];?></span></div>
    </div></td>
    <td width="99" bgcolor="#0099FF"><div align="center"><span class="style47"><?php echo $suma_total;?></span></div></td>
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
