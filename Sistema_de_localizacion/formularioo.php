<?php
if($boton) { 
    if (is_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'])) { 
      copy($HTTP_POST_FILES['archivo']['tmp_name'], $HTTP_POST_FILES['archivo']['name']); 
      $subio = true; 
    } 

if($subio) { 
    //echo "El archivo subio con exito"; 
	header ("Location: Exito.php");
} else { 
    //echo "El archivo no cumple con las reglas establecidas"; 
	header ("Location: error_formulario.php");
} 
die(); 
} 
?>
<html>
<style type="text/css">
<!--
.style26 {font-size: 24px}
.style34 {	color: #FF0066;
	font-weight: bold;
	font-size: 36px;
}
.style4 {	color: #0033CC;
	font-weight: bold;
}
.style25 {color: #003399}
-->
</style> 
<body> 
<div align="center"><img src="imagenes/margen11.jpg" width="1293" height="25"/></div>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style34"><img src="imagenes/logo1.jpg" width="266" height="209" /></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="22">&nbsp;</td>
    <td width="195">&nbsp;</td>
  </tr>
</table>
<p align="center" class="style4 style26">Selecciona un archivo</p>
<p align="center" class="style4 style26">&nbsp;</p>
<p align="center" class="style4 style26">&nbsp;</p>
<form action="<?=$PHP_SELF?>" method="post" enctype="multipart/form-data" name="form1"> 
  <p align="center">Archivo 
   <input name="archivo" type="file" id="archivo"> 
  </p> 
  <p align="center"><input name="boton" type="submit" id="boton" value="Enviar"></p> 
</form> 
  <hr align="center" color="#003399" />
  <div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
  <p align="center"></p>
</BODY> 
</HTML> 

