<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");
?>

<html>

<body>
<form name=m method="POST" >
<center>

<p>
  <?php
$rst_fotos=mysql_query("SELECT * FROM foto",$conexion);
$fila_fotos=mysql_fetch_array($rst_fotos);
?>
</p>
<p>&nbsp; </p>
<?php echo $fila_fotos["foto"] ?>
</form>
</body>
</html>










