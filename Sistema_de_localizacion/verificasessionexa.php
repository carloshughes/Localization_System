<?php 
//Desarrollado por Carlos Iv�n Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessi�n
session_start();

//codigo para comprobar si ya se ha iniciado session

if ($_SESSION["usuario"]=="")
	header ("Location:Inicio_Ejecutivo.php?nosession=1");
?>