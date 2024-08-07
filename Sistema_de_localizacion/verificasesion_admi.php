<?php 
include ("conexion.php");

$rst=mysql_query ("SELECT * FROM administrador WHERE  usuario ='". $_REQUEST["usuario"] ."' and password ='". $_REQUEST ["password"]."'",$conexion);
$num_registros= mysql_num_rows($rst);
$fila=mysql_fetch_array($rst);

if ($num_registros>0)
{
	//$fila=mysql_fetch_array($rst);
	setcookie("usuario_nombre",$fila["usuario"]);
	session_start();
	$_SESSION["usuario"]=2;
	header("Location:turnos.php");
}else
{
	header("Location:error11.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Soluciones de Credito Bancomer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style1 {
	color: #003399;
	font-size: 18px;
}
a:link {
	color: #0000FF;
}
a:visited {
	color: #0000FF;
}
a:hover {
	color: #0000FF;
}
a:active {
	color: #0000FF;
}
.style4 {	color: #0033CC;
	font-weight: bold;
}
-->
</style>
<p align="center">
<!-- Código del Icono -->
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
</head> 
<p align="center"></p>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><img src="imagenes/margen11.jpg" width="1293" height="25"/></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="50"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="459" border="0" align="center" bordercolor="#FFFFFF">
  <tr>
    <td width="449" bordercolor="#FFFFFF"><div align="center" class="style1">
      <div align="center">
	  <p class="style23"><font color=""><b>
        
    </div></td>
  </tr>
  <tr>
  </tr>
  <tr>
    <td width="449" bordercolor="#FFFFFF"><div align="center" class="style1">
    </div></td>
  </tr>
</table>
<blockquote>
  <HR align="center" color="#003399">
</blockquote>
<div align="center">
  <blockquote>
    <p><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2011</strong></font></font></font></font></font></font></p>
  </blockquote>
</div>
<blockquote>
  <p>
  </p>
    </p>
    </p>
    </p>
  </p>
</blockquote>
</body>
</p>
</html>
