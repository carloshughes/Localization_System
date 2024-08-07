<?php
//Codigo para Color fecha Actualizada


$date_mes = date("n");
$date_dia = date("w");
$dia = date("j");
$ano = date("Y");
$hora = date("H");
$min = date("i");

$meses = array(1 => "Enero","Febrero","Marzo","Abril","Mayo","Junio"," Julio","Agosto","Septiembre","Octubre","Noviembre" ,"Diciembre");
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");

//el formato es: dia_letra, dia_numero.mes año
$fecha = "$dias[$date_dia] $dia $meses[$date_mes] $ano";
print "<p align='center'> $fecha <br/>";
?>
