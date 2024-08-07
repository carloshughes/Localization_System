<?php

//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//conexion a la base de datos
include ("conexion.php");



/*$rst_consulta=mysql_query ("SELECT * FROM registro_cuentas_especiales WHERE cuenta  LIKE  '$busqueda'", $conexion);
$filas=mysql_fetch_array($rst_consulta);
$num_registross= mysql_num_rows($rst_consulta);

if ($num_registross==1)
		{
				header ("Location:Error2.php");
				exit();
		}
		*/
		
$rst_cuentas=mysql_query ("SELECT * FROM base WHERE cuenta  LIKE  '$busqueda'", $conexion);
$fila=mysql_fetch_array($rst_cuentas);
$num_registros= mysql_num_rows($rst_cuentas);

if ($num_registros==0)
		{
				header ("Location:error.php");
				exit();
		}

		
if (($_POST["selectbox"]!='Seleccione una opcion') && ($_POST["cuenta"]!=''))
{
mysql_query ("INSERT INTO registro_cuentas_especiales (cuenta, producto, nombre, stotal, sminimo, fecha_corte, cnormal, pcondonacion, oespecial, pespecial, ahorro, acepto, observaciones, fecha, hora)"." VALUES ('".$_POST["cuenta"]."','".$_POST["producto"]."','".$_POST["nombre"]."','".$_POST["stotal"]."','".$_POST["sminimo"]."','".$_POST["fecha_corte"]."','".$_POST["cnormal"]."', '".$_POST["pcondonacion"]."','".$_POST["oespecial"]."','".$_POST["pespecial"]."','".$_POST["ahorro"]."','".$_POST["selectbox"]."','".$_POST["observaciones"]."','".$_POST["fecha"]."','".$_POST["hora"]."');",$conexion) or die ("Error al grabar un mensaje: ".header ("Location:Error2.php"));
header ("Location:gestion_exitosa.php");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Soluciones de Credito BancomerSoluciones de Credito Bancomer</title>
<style type="text/css">
<!--
a:link {
	color: #003399;
}
a:hover {
	color: #00CCFF;
}
a:visited {
	color: #0066FF;
}
.style5 {color: #000099; font-weight: bold; }
.style17 {
	color: #FFFFFF;
	font-weight: bold;
}
.style20 {
	color: #0066CC;
	font-weight: bold;
}
.style22 {color: #0066CC}
-->
</style>
</head>
<body>

<div align="center">
  <table width="966" border="0" align="center">
    <tr>
      <td width="738" height="50"><div align="left"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></div></td>
      <td width="218"><div align="right"><font color="#000099"><b>
        <?php include ("fecha.php") // hora actualizada ?>
      </b></font></div></td>
    </tr>
  </table>
  <table width="1034" height ="278" border="0">
    <tr>
      <td width="431" rowspan="3"><p align="center">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="534" height="268" codebase="http://active.macromedia.com/flash4/cabs/swflash.cab#version=4,0,0,0">
          <param name="MOVIE" value="tarjetas.swf" />
          <param name="PLAY" value="true" />
          <param name="QUALITY" value="high" />
          <param name="BGCOLOR" value="#FFFFFF" />
          <embed src="tarjetas.swf" width="534" height="268" play="true" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi? P1_Prod_Version=ShockwaveFlash" bgcolor="#FFFFFF"></embed>
        </object>
      </p>        <div align="center"></div></td>
      <td width="91" rowspan="3">&nbsp;</td>
      <td width="535"><div align="center">
        <blockquote>
          <p><span class="style20">Script de Apoyo </span></p>
        </blockquote>
      </div></td>
    </tr>
    <tr>
      <td width="535"><p align="center" class="style22">&ldquo;Me complace informarle que Usted ha sido seleccionado para recibir un descuento especial el d&iacute;a de hoy, aproveche este beneficio que Soluciones de Cr&eacute;dito Bancomer le ofrece&rdquo;</p>
      </td>
    </tr>
    <tr>
      <td width="535"><div align="center"><img src="imagenes/asesor.JPG" width="141" height="150"/></div></td>
    </tr>
  </table>
  <p><img src="imagenes/nada.jpg" name="imagen" width="450" height="42"/></p>
  <form name="form2" id="form2" method="post">
  <table width="900" border="1" align="center" bordercolor="#0066CC">
    <tr>
      <td width="137"><div align="center" class="style5">
          <div align="center">Num. Cuenta </div>
      </div></td>
      <td width="153"><div align="center" class="style5">
          <div align="center">Producto</div>
      </div></td>
      <td width="248"><div align="center" class="style5">
          <div align="center">Nombre Cliente </div>
      </div></td>
      <td width="91"><div align="center" class="style5">
          <div align="center">Salto Total </div>
      </div></td>
      <td width="131"><div align="center" class="style5">
          <div align="center">Saldo Minimo </div>
      </div></td>
      <td width="100"><div align="center"><span class="style5">Fecha Corte </span></div></td>
    </tr>
    <tr>
      <td><label></label>
          <div align="center">
            <input name="cuenta" type="text" id="cuenta" value="<?php echo $fila["cuenta"]?>" size="19" readonly = "true"/>
        </div></td>
      <td><div align="center">
          <input name="producto" type="text" id="producto" value="<?php echo $fila["producto"] ?>" size="25" readonly ="true"/>
      </div></td>
      <td><div align="center">
          <input name="nombre" type="text" id="nombre" value="<?php echo $fila["nombre"] ?>" size="40" readonly ="true"/>
      </div></td>
      <td><div align="center">
          <input name="stotal" type="text" id="stotal" value="<?php echo $fila["stotal"] ?>" size="10" readonly ="true"/>
      </div></td>
      <td><div align="center">
          <input name="sminimo" type="text" id="sminimo" value="<?php echo $fila["sminimo"] ?>" size="10" readonly ="true"/>
      </div></td>
      <td><div align="center">
          <input name="fecha_corte" type="text" id="fecha_corte" value="<?php echo $fila["fecha_corte"] ?>" size="2" readonly ="true"/>
      </div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style5">Condonacion</span></div></td>
      <td><div align="center"><span class="style5">Pago Condonacion </span></div></td>
      <td bgcolor="#000099"><div align="center"><span class="style17">Oferta Especial </span></div></td>
      <td bgcolor="#000099"><div align="center"><span class="style17">Pago Especial </span></div></td>
      <td colspan="2" bgcolor="#000099"><div align="center">
          <blockquote>
            <p><span class="style17">Ahorro</span></p>
          </blockquote>
      </div>        <div align="center"></div></td>
      </tr>
    <tr>
      <td><div align="center">
        <input name="cnormal" type="text" id="cnormal" value="<?php echo $fila["cnormal"] ?>" size="1" readonly ="true"/>
      </div></td>
      <td><div align="center">
          <input name="pcondonacion" type="text" id="pcondonacion" value="<?php echo $fila["pcondonacion"] ?>" size="10" readonly ="true"/>
      </div></td>
      <td><div align="center">
          <input name="oespecial" type="text" id="oespecial" value="<?php echo $fila["oespecial"] ?>" size="1" readonly ="true"/>
      </div></td>
      <td><div align="center">
          <input name="pespecial" type="text" id="pespecial" value="<?php echo $fila["pespecial"] ?>" size="10" readonly ="true"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="ahorro" type="text" id="ahorro" value="<?php echo $fila["ahorro"] ?>" size="10" readonly ="true"/>
      </div>        <div align="center"></div></td>
      </tr>
    <tr>
      <td><div align="center" class="style17">
          <div align="center"><span class="style5">Fecha </span></div>
      </div></td>
      <td><div align="center" class="style17">
          <blockquote>
            <p align="center"><span class="style5">Hora</span></p>
          </blockquote>
      </div></td>
      <td><div align="center" class="style17">
          <div align="center"><span class="style5">&iquest;Cliente Acepto Descuento Especial? </span></div>
      </div></td>
      <td colspan="3"><div align="center"><span class="style17"><span class="style5">Observaciones</span></span></div></td>
    </tr>
    <tr>
      <?php $fecha = date ("Y-m-d");?>
      <?php 
		  //funcion para colocar la hora por default segun donde tu elijas
		  date_default_timezone_set("America/Mexico_City"); $hora = date ("H:i:s a");?>
      <td><div align="center">
          <input name="fecha" type="text" id="fecha" value="<?php echo $fecha;?> " size="10" readonly = "true"/>
      </div></td>
      <td><div align="center">
          <input name="hora" type="text" id="hora" value="<?php echo $hora;?>" size="10" readonly = "true"/>
      </div></td>
      <td><label>
          <div align="center">
              <select name="selectbox" onchange="changecontent(this)">
                <option value=" ">Seleccione una opcion</option>
				<option value="Si">Si</option>
                <option value="No">No</option>
              </select>
          </div></td>
      <td colspan="3"><div align="center">
          <textarea name="observaciones" cols="40" id="observaciones"></textarea>
      </div></td>
    </tr>
    <tr>
      <td height="42" colspan="6"><div align="center">
          <input type="button" name="Button" onclick="mensaje(this)" value="Guardar"/>
      </div></td>
    </tr>
  </table>
  </form>
  <p align="center" class="style5"><a href="promociones_especiales.php">Regresar</a></p>
  <hr align="center" color="#003399" />
  <p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2011</strong></font></font></font></p>
</div>
<br />
<p align="center">&nbsp;</p>
</body>
</html>
<script language="JavaScript"> 

var thecontents=new Array() 
//variables de iamgenes para mostrar al asesor
thecontents[0]="imagenes/nada.jpg"
thecontents[1]="imagenes/avisoasesor.jpg"
thecontents[2]="imagenes/vigencia.jpg"

//funcion para cambiar la imagen al asesor
function changecontent(which){ 
imagen.src = thecontents[document.form2.selectbox.selectedIndex] 
/*podes eliminar esta linea junto con el contentbox, es solo para mostrar el resultado*/ 
//document.ddmessage.contentbox.value= thecontents[document.ddmessage.selectbox.selectedIndex] 
 
 }

function mensaje(form){

if (form2.selectbox.options[form2.selectbox.selectedIndex].value==" ")
{
	alert("Selecciona la respuesta del cliente");
	form2.selectbox.focus();return true;	
}

if (form2.observaciones.value.length==0){
			alert("Debes de realizar una gestión")
				form2.observaciones.focus();return true;
	}

	alert("Gestión realizada exitosamente");
			form2.submit();
}
</script> 