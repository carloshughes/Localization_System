<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos"

//Inciando Session
session_start ();
session_destroy ();
setcookie("usuario_nombre","",-36000);
//conexion a la base de datos
header ("Location:Inicio.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<p align="center"><img src="Bancomer.jpg" alt="Bancomer" width="200" height="50" />
<p>
<p>
<p>
<p>
<p>
<p>
<p>
<title>Sistema de visitas Domiciliarias</title>
</head>
<body bgcolor="#045FB4" background="PortadaNueva.jpg" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
<h3 align="center"><font color="#FFFFFF" size="5">Sistema de Visitas Domiciliarias </font></h3>
<?php include ("fecha.php") //Hora actualizada ?>
<HR color="#ffffff">
<form id="form1" name="form1" method="post" action="">
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center"><font size="5">&quot;Agradecemos  su visita a Nuestro Portal </font></p>
  <p align="center">&nbsp;</p>
  <p align="center"><font size="5">esperamos haber sido de ayuda en su trabajo vuelva pronto</font></p>
  <p align="center">&nbsp;</p>
  <p align="center"><font size="5">Recuerde  con <strong>Bancomer..Adelante Hola &quot; </strong></font></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center"><font color="#333333"><a href="visitasenlinea.php"><strong>Pagina de Inicio</strong></a></font></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center"><font color="#FFFFFF" size="2"><strong>Created by: Carlos Hughes - Modelos Operativos - Cobranza Especializada</strong></font> <strong><font size="2">2011</font> </strong></p>
</form>
<h3 align="center">&nbsp;</h3>
<h3 align="center">&nbsp;</h3>
<h3 align="center">&nbsp;</h3>
<h3 align="center">&nbsp;</h3>
<h3 align="center">&nbsp;</h3>
<h3 align="center">&nbsp;</h3>
<div align="center"><font color="#333333"><a href="visitasenlinea.php"></a></font></div>
<p align="left">&nbsp;</p>
<h2 align="left">&nbsp;</h2>
<p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>
<h1 id="siteName">&nbsp;</h1>
</body>
</html>
