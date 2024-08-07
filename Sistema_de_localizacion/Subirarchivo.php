<?php
//Desarrollado por Carlos Iván Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessión
session_start();

//conexion a la base de datos
include("conexion.php");

//$sSQL="Delete From reportes";


//$rst=mysql_query ("SELECT * FROM asesores WHERE  usuario ='". $_REQUEST["usuario"] ."' and password ='". $_REQUEST ["password"]."'",$conexion);
//$rst=mysql_query ("load data local infile'base_localizacion.txt' into table base ");//,$conexion);

$rst=mysql_query ("load data local infile'". $_REQUEST["subir"] ."' into table base ");//,$conexion);
$result = mysql_query($rst,$conexion) or die(" load -" . mysql_error())


//$rst=mysql_query ("LOAD DATA INFILE '". $_REQUEST["subir"] ."' into table base",$conexion);
//$rst=mysql_query ("LOAD DATA LOCAL INFILE 'C:\Documents and Settings\cihughes\Escritorio\base_localizacion.txt' into table base");
//$result = mysql_query($rst,$conexion) or die(" load -" . mysql_error()); 

//$rst=mysql_query ("load data infile 'Escritorio:/". $_REQUEST["subir"] ."' into table base ",$conexion);
//$rst=mysql_query ("load data local infile'Escritorio:/". $_REQUEST["subir"] ."' into table base ",$conexion);
//$rst=mysql_query ("load data local infile'Mis documentos:/". $_REQUEST["subir"] ."' into table base ",$conexion);
//$rst=mysql_query ("load data local infile'D:/". $_REQUEST["subir"] ."' into table base ",$conexion);
//$rst=mysql_query ("load data local infile'".$_REQUEST["subir"] ."' into table base ",$conexion);
//$rst=mysql_query ("load data infile'C:/". $_REQUEST["subir"] ."' into table base ",$conexion);
//$result = mysql_query($rst,$conectar) or die(" load -" . mysql_error()); 
//$result = mysql_query($rst,$conectar) or die(" load -" . mysql_error()); 

//$rst=mysql_query ("load data infile'C:/base_localizacion.txt' into table base",$conexion);
//$result = mysql_query($rst,$conectar) or die(" load -" . mysql_error()); 

//load data infile 'C:base.txt' into table tabla

//$sSQL=" TRUNCATE reportes";
//mysql_query($sSQL);

//header ("Location:Hola.php");


?> 