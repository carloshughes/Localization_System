<?php 
//Desarrollado por Carlos Iv�n Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessi�n
session_start();

//codigo para comprobar si ya se ha iniciado session

if ($_SESSION["usuario"]!=2)
	header ("Location:inicio_administrador.php?nosession=1");
?>