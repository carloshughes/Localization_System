<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include ("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
include ("verificasessionexa.php");


//consulta para pasar variable de cuenta  
	//$rst_reportes=mysql_query("SELECT * FROM reportes",$conexion);


$rst_productos=mysql_query("SELECT * FROM asesores WHERE usuario='".$_COOKIE["usuario_nombre"]."';",$conexion);
//$rst_productos=mysql_query("SELECT * FROM base WHERE and cuenta=". $_REQUEST["cod"].";",$conexion);
$fila_producto=mysql_fetch_array($rst_productos);

if (isset ($_POST["observaciones"])){
		mysql_query("UPDATE asesores SET observaciones='". $_REQUEST["observaciones"] ."' WHERE usuario ='".$_COOKIE["usuario_nombre"]."';",$conexion); 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Soluciones de Credito Bancomer</title>
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
	color: #0066CC;
	font-size: 18px;
}
a:link {
	color: #003399;
}
a:active {
	color: #003399;
}
-->
</style>
<!-- Código del Icono -->
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
<style type="text/css">
<!--
.style21 {	color: #000099;
	font-weight: bold;
}
.style25 {color: #003399}
-->
</style>
</head>
<body onLoad="mueveReloj();cronometro()">
<div align="center"><img src="imagenes/margen11.jpg" width="1293" height="25"/></div>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style4"><img src="imagenes/logo.JPG" width="398" height="295" /></p>
<p class="style4">Eslabon: 
   <span class="style15">
<?php /*Mostrando nombre de Usuario*/ echo $_COOKIE["usuario_nombre"]; ?>
   </span></p>
<p class="style4"><span class="style21">Bienvenido</span>: <span class="style15"> <?php echo $fila_producto ["nombre"]; /*Mostrando nombre de Usuario*/ /*echo $fila["nombre"]; echo $_COOKIE["usuario_nombre"];*/ ?></span></p>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <label>
  <div align="center">
  <div align="center">
    <textarea name="observaciones" cols="50" rows="25" id="observaciones"><?php echo $fila_producto["observaciones"] ?></textarea>
    </label>
  </div>
  <label>
  <div align="center">
  </label>
<div align="center">
    <p>
      <input type="submit" name="Submit" value="Guardar" /></p>
    <hr align="center" color="#003399" />
</div>
  <p>
    <label></label></p>
</form>
<p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2011</strong></font></font></font></p>
<center></center>
</body>
</html>
