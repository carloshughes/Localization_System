<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include ("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
include ("verificasessionexa.php");


//consulta para pasar variable de cuenta  
	$rst_reportes=mysql_query("SELECT * FROM reportes",$conexion);
	

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
a:link {
	color: #003399;
}
a:active {
	color: #003399;
}
.style21 {color: #000099; font-weight: bold; }
.style22 {color: #000099}
.style23 {color: #0066CC}
.style25 {
	color: #003399;
	font-weight: bold;
}
-->
</style>
<!-- Código del Icono -->
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" /></head>
<body onLoad="mueveReloj();cronometro()">
<div align="center"><img src="imagenes/margen11.jpg"/></div>
<table width="709" border="0" align="center">
  <tr>
    <td width="473" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="226"><div align="right"><font color="#000099"><b>
      <?php include("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style4"><img src="imagenes/bitacora.JPG" width="280" height="169" /></p>
<p align="center" class="style4">&nbsp;</p>
<p class="style4">Bienvenido
   <span class="style15">
   <?php /*Mostrando nombre de Usuario*/ echo $_COOKIE["usuario_nombre"]; ?>
   </span></p>
<p align="center" class="style5 style16"><span class="style3">CC Sevilla</span></p>
<form id="form1" name="form1" method="post" action="BajaReporte.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="1246" border="0" align="center">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3"><div align="center"><span class="style5">Hora Problema </span></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left"><span class="style21">N</span><span class="style22">&deg;</span> <span class="style21">Reporte</span></div></td>
      <td><div align="center" class="style21">
        <div align="left">Reporto</div>
      </div></td>
      <td><div align="center" class="style21">
        <div align="left">Aplicativo</div>
      </div></td>
      <td><div align="left"><span class="style21">Producto</span></div></td>
      <td><div align="left"><span class="style21">Supervisor</span></div></td>
      <td><div align="center">
        <p class="style21">Usuarios Afectados</p>
        </div></td>
      <td><div align="center"><span class="style21">Ticket N</span><span class="style22">&deg;</span> </div></td>
      <td><div align="center" class="style21">
        <div align="center" class="style23">Inicio </div>
      </div></td>
      <td><div align="center"><span class="style5">Final</span></div></td>
      <td><div align="center" class="style5">Duraci&oacute;n</div></td>
      <td><div align="center" class="style21"> Fecha</div></td>
      <td><div align="center" class="style21">
        <div align="center">Problema</div>
      </div></td>
    </tr>
		<?php
		//Obteniendo las variables dependiendo el campo de la tabla 
	while (	$fila_reportes=mysql_fetch_array($rst_reportes))
	//$fila=mysql_fetch_array($rst_reportes))
		{
?>
    <tr>
      <td width="77"><div align="left"></div>
      <div align="center"><?php echo $fila_reportes["numero"] ?></div></td>
      <td width="84"><div align="left"><?php echo $fila_reportes["reporto"] ?></div></td>
      <td width="117"><div align="left"><?php echo $fila_reportes["aplicativo"] ?></div></td>
      <td width="141"><div align="left"><?php echo $fila_reportes["producto"] ?></div></td>
      <td width="148"><div align="left"><?php echo $fila_reportes["supervisor"] ?></div></td>
      <td width="73"><div align="center"><?php echo $fila_reportes["usuarios"] ?></div></td>
      <td width="86"><div align="center"><?php echo $fila_reportes["ticket"] ?></div></td>
      <td width="80"><div align="center" class="style23"><?php echo $fila_reportes["hora_inicio"] ?></div></td>
      <td width="70"><div align="center" class="style23"><?php echo $fila_reportes["hora_final"] ?></div></td>
      <td width="67"><div align="center" class="style23"><?php echo $fila_reportes["duracion"] ?></div></td>
      <td width="69"><div align="center"><?php echo $fila_reportes["fecha"] ?></div></td>
      <td width="184"><?php echo $fila_reportes["problema"] ?></td>
    </tr>

<?php
	}
?>
  </table>
  <p>
    <label></label>
  </p>
</form>
<p align="center">&nbsp;</p>
<p align="center"><span class="style25"><a href="Menu.php">Regresar</a></span> <font color="#000000"><font color="#000000"><font color="#000000"><font color="#003399">||</font></font></font></font><font color="#003399"> <strong><a href="BajaReporte.php">Descargar Reporte</a> </strong><font color="#000000"><font color="#000000"><font color="#000000"><font color="#003399">||</font></font></font></font> <a href="Confirmacion.php"><strong>Eliminar  Base</strong></a>  <font color="#000000"><font color="#000000"><font color="#000000"><font color="#003399">||</font></font></font></font> <strong><a href="Salirexa.php">Salir</a></strong></font></p>
<hr align="center" color="#003399" />
<p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2011</strong></font></font></font></p>
<center></center>
</body>
</html>
