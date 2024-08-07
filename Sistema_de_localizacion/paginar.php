<?php 
//Desarrollado por Carlos Iván Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessión
session_start();

//conexion a la base de datos
//include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
//include ("verificasession.php");
include("verificasessionexa.php");
?>
<html> 
<head> 
<title>Páginación de resultados</title> 
</head> 
<body bgcolor=#FFFFFF> 
<? 
// Datos de conexión a la base 
$base="localizacion"; 
$con=mysql_connect(localhost,root,hughes); 
mysql_select_db($base,$con); 

if (!isset($pg)) 
$pg = 0; // $pg es la pagina actual 
$cantidad=3; // cantidad de resultados por página 
$inicial = $pg * $cantidad; 

/*$pegar ="SELECT * FROM base ORDER BY usuario LIMIT $inicial,$cantidad"; 
$cad = mysql_db_query($base,$pegar) or die (mysql_error()); 

$contar ="SELECT * FROM base WHERE usuario LIKE '%".$_SESSION["usuario"]."%'"; */

$pegar ="SELECT * FROM base WHERE usuario LIKE '%".$_SESSION["usuario"]."%' ORDER BY usuario LIMIT $inicial,$cantidad";
$cad = mysql_db_query($base,$pegar) or die (mysql_error()); 
$contar ="SELECT * FROM base WHERE usuario LIKE '%".$_SESSION["usuario"]."%'"; 

$contarok= mysql_db_query($base,$contar); 
$total_records = mysql_num_rows($contarok); 
$pages = intval($total_records / $cantidad); 

// Imprimiendo los resultados 
while($array = mysql_fetch_array($cad)) { 
echo $array['usuario']."<br>"; 
} 

// Cerramos la conexión a la base 
$con=mysql_close($con); 

// Creando los enlaces de paginación 
echo "<p>"; 
if ($pg <> 0) 
{ 
$url = $pg - 1; 
echo "<a href='paginar.php?pg=".$url."'>Anterior</a> "; 
} 
else { 
echo " ";
} 

for ($i = 0; $i<($pages + 1); $i++) { 
if ($i == $pg) { 
echo "<font face=Arial size=2 color=ff0000> <b> $i </b></font>"; 
} 
else { 
	echo "<a href='paginar.php?pg=".$i."'>".$i."</a> "; 
	} 
} 

if ($pg < $pages) { 
$url = $pg + 1; 
echo "<a href='paginar.php?pg=".$url."'>Siguiente</a>"; 
} 
else { 
echo " "; 
} 
echo "</p>"; 
?> 

</body> 
</html> 