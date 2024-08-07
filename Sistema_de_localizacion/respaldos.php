<?php   
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include ("conexion.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Resultados Auto</title>
<style type="text/css">
<!--
.style5 {
	color: #FFFFFF;
	font-weight: bold;
}
.style7 {
	color: #003399;
	font-weight: bold;
}
a:link {
	color: #FFFFFF;
}
a:visited {
	color: #FFFFFF;
}
a:hover {
	color: #FFFFFF;
}
a:active {
	color: #FFFFFF;
}
.style26 {font-size: 18px}
.style34 {	color: #FF0066;
	font-weight: bold;
	font-size: 36px;
}
-->
</style>
</head>
<body>
<p>&nbsp;</p>
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
<p align="center" class="style7"></p>
<blockquote>
  <hr align="center" color="#003399" />
</blockquote>
<img src="imagenes/Logo_nuevo.JPG" width="381" height="255" />
<table width="659" height="272" border="0" align="center">
  <tr>
    <td width="213" bgcolor="#000099"><div align="center"><span class="style5">Arvhivos </span></div></td>
    <td height="21" bgcolor="#000099">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bordercolor="#666666" background="Localizacion_PEEF_correos.zip" bgcolor="#0000FF">&nbsp;</td>
    <td width="436" rowspan="4" bgcolor="#FFFFFF"><div align="center"></div></td>
  </tr>
  
  <tr>
    <td height="21" bgcolor="#0033FF"><div align="center"><a href="PAginas_Web_Respaldos.zip">respaldos</a></div></td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0033FF"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="73"><div align="center"><img src="imagenes/descargar.JPG" width="135" height="41" /></div></td>
  </tr>
</table>
<p align="center" class="style7"><a href="Descargar.php"></a></p>
<blockquote>
  <hr align="center" color="#003399" />
  <p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes - Modelos Operativos - Desarrollo - Cobranza Especializada-Moras Tard&iacute;as 2011</strong></font></font></font></p>
</blockquote>
</body>
</html>
<script language="JavaScript"> 
var thecontents=new Array() 
thecontents[0]="grafica_resultados_auto/Limpio.JPG"
thecontents[1]="grafica_resultados_auto/Usuarios.JPG"
thecontents[2]="grafica_resultados_auto/Caebsa.JPG"
thecontents[3]="grafica_resultados_auto/Conjur.JPG"
thecontents[4]="grafica_resultados_auto/Comparativo.JPG"

function changecontents(which){ 
imagen.src = thecontents[document.form1.usuarios.selectedIndex] 
/*podes eliminar esta linea junto con el contentbox, es solo para mostrar el resultado*/ 
document.form1.contentbox.value= thecontents[document.form1.usuarios.selectedIndex] 
 } 
</script>