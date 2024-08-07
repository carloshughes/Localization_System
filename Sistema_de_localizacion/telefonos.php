<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
include("verificasessionexa.php");

$asesores=mysql_query("delete FROM base_telefonos WHERE status='Trabajada'",$conexion); 

$rst_cuentas=mysql_query("SELECT * FROM base_telefonos WHERE eslabon LIKE '%".$_SESSION["usuario"]."%'",$conexion); 
$fila=mysql_fetch_array($rst_cuentas);


$rst_productos=mysql_query("SELECT * FROM base_telefonos WHERE rfc=".$_REQUEST["cod"].";",$conexion);
//$rst_productos=mysql_query("SELECT * FROM base_telefonos WHERE and cuenta=". $_REQUEST["cod"].";",$conexion);
$fila_producto=mysql_fetch_array($rst_productos);

/*if (($_POST["eslabon"]!='') && ($_POST["numero_cte"]!='') && ($_POST["rfc"]!='') && ($_POST["nombre_cliente"]!=''))
{
mysql_query ("INSERT INTO base_telefonos_captura (eslabon, asesor, numero_cte, rfc, nombre_cliente, telefono_1, sistema_1, telefono_2, sistema_2, telefono_3, sistema_3, telefono_4, sistema_4 , telefono_5, sistema_5, telefono_6, sistema_6, telefono_7, sistema_7, telefono_8, sistema_8, telefono_9, sistema_9, telefono_10, sistema_10, telefono_11, sistema_11, telefono_12, sistema_12, telefono_13, sistema_13, telefono_14, sistema_14, telefono_15, sistema_15, nuevo_tel1, nuevo_tel1_sistema, nuevo_tel2, nuevo_tel2_sistema, nuevo_tel3, nuevo_tel3_sistema, nuevo_tel4, nuevo_tel4_sistema, nuevo_tel5, nuevo_tel5_sistema,  hora, fecha)"." VALUE ('".$_POST["eslabon"]."','".$_POST["asesor"]."', '".$_POST["numero_cte"]."','".$_POST["rcf"]."','".$_POST["nombre_cliente"]."','".$_POST["telefono_1"]."','".$_POST["sistema_1"]."', '".$_POST["telefono_2"]."', '".$_POST["sistema_2"]."', '".$_POST["telefono_3"]."', '".$_POST["sistema_3"]."', '".$_POST["telefono_4"]."', '".$_POST["sistema_4"]."', '".$_POST["telefono_5"]."', '".$_POST["sistema_5"]."', '".$_POST["telefono_6"]."', '".$_POST["sistema_6"]."', '".$_POST["telefono_7"]."', '".$_POST["sistema_7"]."', '".$_POST["telefono_8"]."', '".$_POST["sistema_8"]."', '".$_POST["telefono_9"]."', '".$_POST["sistema_9"]."', '".$_POST["telefono_10"]."', '".$_POST["sistema_10"]."', '".$_POST["telefono_11"]."', '".$_POST["sistema_11"]."', '".$_POST["telefono_12"]."', '".$_POST["sistema_12"]."','".$_POST["telefono_13"]."', '".$_POST["sistema_13"]."', '".$_POST["telefono_14"]."', '".$_POST["sistema_14"]."', '".$_POST["telefono_15"]."', '".$_POST["sistema_15"]."', '".$_POST["nuevo_tel1"]."', '".$_POST["nuevo_tel1_sistema"]."', '".$_POST["nuevo_tel2"]."', '".$_POST["nuevo_tel2_sistema"]."', '".$_POST["nuevo_tel3"]."', '".$_POST["nuevo_tel3_sistema"]."', '".$_POST["nuevo_tel4"]."', '".$_POST["nuevo_tel4_sistema"]."', '".$_POST["nuevo_tel5"]."', '".$_POST["nuevo_tel5_sistema"]."', '".$_POST["hora"]."', '".$_POST["fecha"]."');",$conexion) or die("Error al grabar un mensaje: ".header ("Location:error_tel.php"));
*/


if (($_POST["eslabon"]!='') && ($_POST["numero_cte"]!=''))
{
mysql_query ("INSERT INTO base_telefonos_captura (eslabon, asesor, numero_cte, rfc, nombre_cliente, telefono_1, sistema_1, telefono_2, sistema_2, telefono_3, sistema_3, telefono_4, sistema_4 , telefono_5, sistema_5, telefono_6, sistema_6, telefono_7, sistema_7, telefono_8, sistema_8, telefono_9, sistema_9, telefono_10, sistema_10, telefono_11, sistema_11, telefono_12, sistema_12, telefono_13, sistema_13, telefono_14, sistema_14, telefono_15, sistema_15, nuevo_tel1, nuevo_tel1_sistema, nuevo_tel2, nuevo_tel2_sistema, nuevo_tel3, nuevo_tel3_sistema, nuevo_tel4, nuevo_tel4_sistema, nuevo_tel5, nuevo_tel5_sistema,  hora, fecha)"." VALUE ('".$_POST["eslabon"]."','".$_POST["asesor"]."', '".$_POST["numero_cte"]."','".$_POST["rfc"]."','".$_POST["nombre_cliente"]."','".$_POST["telefono_1"]."','".$_POST["sistema_1"]."', '".$_POST["telefono_2"]."', '".$_POST["sistema_2"]."', '".$_POST["telefono_3"]."', '".$_POST["sistema_3"]."', '".$_POST["telefono_4"]."', '".$_POST["sistema_4"]."', '".$_POST["telefono_5"]."', '".$_POST["sistema_5"]."', '".$_POST["telefono_6"]."', '".$_POST["sistema_6"]."', '".$_POST["telefono_7"]."', '".$_POST["sistema_7"]."', '".$_POST["telefono_8"]."', '".$_POST["sistema_8"]."', '".$_POST["telefono_9"]."', '".$_POST["sistema_9"]."', '".$_POST["telefono_10"]."', '".$_POST["sistema_10"]."', '".$_POST["telefono_11"]."', '".$_POST["sistema_11"]."', '".$_POST["telefono_12"]."', '".$_POST["sistema_12"]."','".$_POST["telefono_13"]."', '".$_POST["sistema_13"]."', '".$_POST["telefono_14"]."', '".$_POST["sistema_14"]."', '".$_POST["telefono_15"]."', '".$_POST["sistema_15"]."', '".$_POST["nuevo_tel1"]."', '".$_POST["nuevo_tel1_sistema"]."', '".$_POST["nuevo_tel2"]."', '".$_POST["nuevo_tel2_sistema"]."', '".$_POST["nuevo_tel3"]."', '".$_POST["nuevo_tel3_sistema"]."', '".$_POST["nuevo_tel4"]."', '".$_POST["nuevo_tel4_sistema"]."', '".$_POST["nuevo_tel5"]."', '".$_POST["nuevo_tel5_sistema"]."', '".$_POST["hora"]."', '".$_POST["fecha"]."');",$conexion) or die("Error al grabar un mensaje: ".header ("Location:error_tel.php"));

//Actualizando la columna de status de la tabla base para saber que cuentas ya estan trabajadas
mysql_query("UPDATE base_telefonos SET status = 'Trabajada' WHERE rfc=" .$_REQUEST["cod"].";",$conexion);
header("Location:Ejecutivo_tel.php");

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PU-<?php echo $fila_producto["asesor"];//$_COOKIE["usuario_nombre"];?></title>
<style type="text/css">
<!-- Color de las Letras para la pagina 
.style3 {
	color: #000099;
	font-size: 24px;
	font-weight: bold;
}
.style4 {
	color: #0033CC;
	font-weight: bold;
}
a:visited {
	color: #0066FF;
}
a:hover {
	color: #00CCFF;
}
.style15 {
	color: #0066CC;
	font-size: 18px;
}
a:link {
	color: #003399;
}
a:active {
	color: #003399;
}
.style25 {color: #003399}
.style26 {font-size: 24px}
.style27 {color: #FFFFFF; font-weight: bold; }
.style28 {color: #FFFFFF}
.style19 {color: #0066FF}
.style29 {font-weight: bold}
-->
</style>
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
</head>
<body onLoad="mueveReloj()">
<div align="center"><img src="imagenes/margen11.jpg" width="1293" height="25"/><img src="imagenes/bancomer1.GIF" width="186" height="48" /></div>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="52">&nbsp;</td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style4">B&uacute;squeda	 de Tel&eacute;fonos</p>
<form id="form1" name="form1" method="post">
<table width="747" border="0" align="center">
    
    
    <tr>
      <td colspan="5"><span class="style4">Bienvenido: </span><span class="style4 style26"><span class="style4"><span class="style15">
      <?php /*Mostrando nombre de Usuario */echo $fila["asesor"];?>
      </span></span></span></td>
      <td colspan="4" rowspan="2"><div align="center"><img src="imagenes/buscar_telefono.JPG" width="130" height="137" /></div></td>
    </tr>
    <tr>
      <td height="10" colspan="5"><span class="style4">Eslabon:</span><span class="style15"> <strong><?php echo $_COOKIE["usuario_nombre"];?></strong></span></td>
    </tr>
    
    
    <tr>
      <td width="50" bgcolor="#003366"><span class="style27">N&deg; <?php echo "<font color='#FFFFFF'>".$fila_producto["asignado"] ."</font>";?></span></td>
      <td width="126">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="5">&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="2" bgcolor="#0033FF"><div align="center" class="style27">
          <div align="center">Contrato</div>
      </div></td>
      <td width="94" bgcolor="#0033FF"><div align="center" class="style27">
        <div align="center">Numero_Cliente</div>
      </div></td>
      <td width="140" bgcolor="#0033FF"><div align="center" class="style27">Cuenta</div></td>
      <td colspan="5" bgcolor="#0033FF"><div align="center" class="style27">Correo 2 </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input name="eslabon" type="text" id="eslabon" value="<?php echo $fila_producto["eslabon"] ?>" size="30" readonly="true"/>
      </div></td>
      <td>        <div align="center">
        <input name="numero_cte" type="text" id="numero_cte" value="<?php echo $fila_producto["numero_cte"] ?>" size="10"/>      
      </div></td>
      <td><div align="center">
          <input name="rfc" type="text" id="rfc" size="20" value="<?php echo $fila_producto["rfc"] ?>"/>
      </div></td>
      <td colspan="5"><div align="center">
          <input name="nombre_cliente" type="text" id="nombre_cliente" size="50" />
      </div></td>
    </tr>
    
    <tr>
      <td colspan="3" bgcolor="#0066FF"><div align="center" class="style27">Telefono</div>        <div align="center" class="style27"></div></td>
      <td colspan="2" bgcolor="#0066FF"><div align="center" class="style27">Sistema</div>        <div align="center" class="style27"></div></td>
      <td colspan="4" bgcolor="#0066FF"><div align="center" class="style27">Nuevos Telefonos <span class="style28"></span></div></td>
    </tr>    
      
        <tr>
          <td bgcolor="#000099"><div align="center" class="style27">1- </div></td>
          <td colspan="2"><div align="center">
        <input name="telefono_1" type="text" value="<?php echo $fila_producto["telefono_1"] ?>" size="13" maxlength="13" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_1">
          <option value=" ">Seleccione una opcion</option>
          <option value="PU">PU</option>
          <option value="Cyber">Cyber</option>
          <option value="IG">IG</option>
          <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="4"><div align="center"></div></td>
      </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">2-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_2" type="text" size="13" maxlength="13"  value="<?php echo $fila_producto["telefono_2"] ?>" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_2">
          <option value=" ">Seleccione una opcion</option>
          <option value="PU">PU</option>
          <option value="Cyber">Cyber</option>
          <option value="IG">IG</option>
          <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">3-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_3" type="text"   size="13" maxlength="13"  value="<?php echo $fila_producto["telefono_3"] ?>"/>
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_3">
          <option value=" ">Seleccione una opcion</option>
          <option value="PU">PU</option>
          <option value="Cyber">Cyber</option>
          <option value="IG">IG</option>
          <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td width="8"><div align="center" class="style27"><span class="style28"></span></div></td>
      <td width="39" bgcolor="#000099"><div align="center" class="style27">1-</div></td>
      <td width="85"><label>
        <div align="center">
          <input name="nuevo_tel1" type="text" id="nuevo_tel1" onblur="javascript:Numeros(this,0);" size="14" maxlength="13" />
        </div>
      </label></td>
      <td><div align="center">
        <select name="nuevo_tel1_sistema" id="nuevo_tel1_sistema">
          <option value=" ">Seleccione una opcion</option>
          <option value="PU">PU</option>
          <option value="Cyber">Cyber</option>
          <option value="IG">IG</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>4-</strong></div></td>
      <td colspan="2">
        <div align="center">
          <input name="telefono_4" type="text" id="telefono_4"   size="13" maxlength="13" value="<?php echo $fila_producto["telefono_4"] ?>"/>
        </div></td>
      <td colspan="2">
        <div align="center">
          <select name="sistema_4" id="sistema_4">
            <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
          </select>
      </div></td>
      <td><span class="style28"></span></td>
      <td bgcolor="#0000CC"><div align="center" class="style27">2-</div></td>
      <td><div align="center">
        <input name="nuevo_tel2" type="text" id="nuevo_tel2" onblur="javascript:Numeros(this,0);" size="14" maxlength="13" />
      </div></td>
      <td><div align="center">
        <select name="nuevo_tel2_sistema" id="select">
          <option value=" ">Seleccione una opcion</option>
          <option value="PU">PU</option>
          <option value="Cyber">Cyber</option>
          <option value="IG">IG</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">5- </div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_5" type="text"   size="13" maxlength="13" value="<?php echo $fila_producto["telefono_5"] ?>" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_5"> 
	        <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
	    </select>
      </div></td>
      <td><span class="style28"></span></td>
      <td bgcolor="#0000FF"><div align="center" class="style27">3-</div></td>
      <td><div align="center">
        <input name="nuevo_tel3" type="text" id="nuevo_tel3" onblur="javascript:Numeros(this,0);" size="14" maxlength="13" />
      </div></td>
      <td><div align="center">
        <select name="nuevo_tel3_sistema" id="select2">
          <option value=" ">Seleccione una opcion</option>
          <option value="PU">PU</option>
          <option value="Cyber">Cyber</option>
          <option value="IG">IG</option>
         </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">6-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_6" type="text"   size="13" maxlength="13" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_6"> 
            <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td><span class="style28"></span></td>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>4-</strong></div></td>
      <td><div align="center">
        <input name="nuevo_tel4" type="text" id="nuevo_tel4" onblur="javascript:Numeros(this,0);" size="14" maxlength="13" />
      </div></td>
      <td><div align="center">
        <select name="nuevo_tel4_sistema" id="select3">
          <option value=" ">Seleccione una opcion</option>
          <option value="PU">PU</option>
          <option value="Cyber">Cyber</option>
          <option value="IG">IG</option>
       </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">7-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_7" type="text"   size="13" maxlength="13" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_7"> 
            <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td><span class="style28"></span></td>
      <td bgcolor="#000099"><div align="center" class="style27">5- </div></td>
      <td><div align="center">
        <input name="nuevo_tel5" type="text" id="nuevo_tel5" onblur="javascript:Numeros(this,0);" size="14" maxlength="13" />
      </div></td>
      <td><div align="center">
        <select name="nuevo_tel5_sistema" id="select4">
          <option value=" ">Seleccione una opcion</option>
          <option value="PU">PU</option>
          <option value="Cyber">Cyber</option>
          <option value="IG">IG</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>8-</strong></div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_8" type="text"  size="13" maxlength="13" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_8"> 
		            <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">9- </div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_9" type="text"    size="13" maxlength="13" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_9">             
			<option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">10-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_10" type="text"    size="13" maxlength="13"/>
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_10"> 
		            <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">11-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_11" type="text" size="13" maxlength="13" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_11"> 
	        <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>12-</strong></div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_12" type="text" size="13" maxlength="13" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_12"> 
 	        <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">13- </div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_13" type="text" size="13" maxlength="13" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_13"> 
	        <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="3" bgcolor="#0066FF"><div align="center" class="style27">
          <div align="center">Hora</div>
      </div></td>
      <td width="168" bgcolor="#0066FF"><div align="center"><span class="style27">Fecha</span></div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">14-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_14" type="text" size="13" maxlength="13" />
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_14"> 
	        <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">15-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_15" type="text" size="13" maxlength="13" >
      </div></td>
      <td colspan="2"><div align="center">
        <select name="sistema_15"> 
            <option value=" ">Seleccione una opcion</option>
            <option value="PU">PU</option>
            <option value="Cyber">Cyber</option>
            <option value="IG">IG</option>
            <option value="No se encontro">No se encontro</option>
        </select>
      </div></td>
      <td colspan="3"><div align="center">
          <input name="hora" type="text" size="6" readonly="true" value="horaImprimible" />
        </div>
          <div align="center"></div></td>
      <td><div align="center">
          <?php $fecha = date ("Y-m-d");?>
          <input name="fecha" type="text" id="fecha" size="8" value="<?php echo $fecha;?>" readonly="true"/>
      </div></td>
    </tr>
    
    
    <tr>
      <td colspan="9"><label>
      <input name="asesor" type="hidden" id="asesor" value="<?php echo $fila_producto["asesor"] ?>"/>
      </label></td>
    </tr>
    <tr>
      <td colspan="9"><div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="9"><div align="center">
          <input name="Guardar"  type="button" value="Guardar" onclick="validar(this.form)"/>
      </div></td>
    </tr>
  </table>
</form>
<p align="center" class="style25"><span class="style19"> <span class="style29"><a href="javascript:history.go(-1)">Anterior</a> || <a href="Salirexa">Salir</a></span>
    <label></label>
    <label> </label>
</span></p>
<hr align="center" color="#003399" />
<div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
<p align="center">&nbsp;</p>
</body>
</html>
<script>
//Funcion para que no acepte letras,  numeros y/o espacios
function Numeros(obj,l)
{
with (obj)
	{ var Num; Num = false; 
	for ( i=0; i < value.length; i++ )
			{if ( isNaN ( parseInt( value.charAt(i) ) ) == true) {Num = true;}}
		}
	if ( Num == true )
		{alert("Este campo es numero y no acepta letras, espacios y signos");obj.focus(); }
	if ( obj.value != "" && l != 0 )
		{ if ( obj.value.length < l || l < obj.value.length){alert("ESTE CAMPO DEBE DE CONTENER " + l + " NÚMEROS"); obj.
		
		focus(); return false;} }

}
</script>
<script language="JavaScript"> 
//Funcion para cargar el reloj en tiempo real
function mueveReloj(){ 
momentoActual = new Date() 
hora = momentoActual.getHours() 
minuto = momentoActual.getMinutes() 
segundo = momentoActual.getSeconds() 
str_segundo = new String (segundo) 
if (str_segundo.length == 1) 
segundo = "0" + segundo 
str_minuto = new String (minuto) 
if (str_minuto.length == 1) 
minuto = "0" + minuto 
str_hora = new String (hora) 
if (str_hora.length == 1) 
hora = "0" + hora 
horaImprimible = hora+":"+minuto+":"+segundo
document.form1.hora.value = horaImprimible 
setTimeout("mueveReloj()",1000) 
} 
</script>

<script>

function validar(form1)
{

if ((form1.telefono_1.value.length !=0) && (form1.sistema_1.options[form1.sistema_1.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 1");
	form1.sistema_1.focus(); return false;
	}

if ((form1.telefono_2.value.length !=0) && (form1.sistema_2.options[form1.sistema_2.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 2");
	form1.sistema_2.focus(); return false;
	}


if ((form1.telefono_3.value.length !=0) && (form1.sistema_3.options[form1.sistema_3.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 3");
	form1.sistema_3.focus(); return false;
	}


if ((form1.telefono_4.value.length !=0) && (form1.sistema_4.options[form1.sistema_4.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 4");
	form1.sistema_4.focus(); return false;
	}

if ((form1.telefono_5.value.length !=0) && (form1.sistema_5.options[form1.sistema_5.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 5");
	form1.sistema_5.focus(); return false;
	}

if ((form1.telefono_6.value.length !=0) && (form1.sistema_6.options[form1.sistema_6.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 6");
	form1.sistema_6.focus(); return false;
	}

if ((form1.telefono_7.value.length !=0) && (form1.sistema_7.options[form1.sistema_7.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 7");
	form1.sistema_7.focus(); return false;
	}

if ((form1.telefono_8.value.length !=0) && (form1.sistema_8.options[form1.sistema_8.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 8");
	form1.sistema_8.focus(); return false;
	}


if ((form1.telefono_9.value.length !=0) && (form1.sistema_9.options[form1.sistema_9.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 9");
	form1.sistema_9.focus(); return false;
	}


if ((form1.telefono_10.value.length !=0) && (form1.sistema_10.options[form1.sistema_10.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 10");
	form1.sistema_10.focus(); return false;
	}

if ((form1.telefono_11.value.length !=0) && (form1.sistema_11.options[form1.sistema_11.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 11");
	form1.sistema_10.focus(); return false;
	}

if ((form1.telefono_12.value.length !=0) && (form1.sistema_12.options[form1.sistema_12.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 12");
	form1.sistema_12.focus(); return false;
	}

if ((form1.telefono_13.value.length !=0) && (form1.sistema_13.options[form1.sistema_13.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 13");
	form1.sistema_13.focus(); return false;
	}

if ((form1.telefono_14.value.length !=0) && (form1.sistema_14.options[form1.sistema_14.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 14");
	form1.sistema_14.focus(); return false;
	}
	
if ((form1.telefono_15.value.length !=0) && (form1.sistema_15.options[form1.sistema_15.selectedIndex].value==" ")){
	alert ("Por favor seleccione un sistema para el Telefono 15");
	form1.sistema_15.focus(); return false;
	}



//La inversa
if ((form1.telefono_2.value.length ==0) && (form1.sistema_2.options[form1.sistema_2.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 2");
	form1.sistema_2.focus(); return false;
	}


if ((form1.telefono_3.value.length ==0) && (form1.sistema_3.options[form1.sistema_3.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 3");
	form1.sistema_3.focus(); return false;
	}

if ((form1.telefono_4.value.length ==0) && (form1.sistema_4.options[form1.sistema_4.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 4");
	form1.sistema_4.focus(); return false;
	}
	

if ((form1.telefono_5.value.length ==0) && (form1.sistema_5.options[form1.sistema_5.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 5");
	form1.sistema_5.focus(); return false;
	}

if ((form1.telefono_6.value.length ==0) && (form1.sistema_6.options[form1.sistema_6.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 6");
	form1.sistema_6.focus(); return false;
	}
	

if ((form1.telefono_7.value.length ==0) && (form1.sistema_7.options[form1.sistema_7.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 7");
	form1.sistema_7.focus(); return false;
	}

if ((form1.telefono_8.value.length ==0) && (form1.sistema_8.options[form1.sistema_8.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 8");
	form1.sistema_8.focus(); return false;
	}
	
if ((form1.telefono_9.value.length ==0) && (form1.sistema_9.options[form1.sistema_9.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 9");
	form1.sistema_9.focus(); return false;
	}
	

if ((form1.telefono_10.value.length ==0) && (form1.sistema_10.options[form1.sistema_10.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 10");
	form1.sistema_10.focus(); return false;
	}
	
if ((form1.telefono_11.value.length ==0) && (form1.sistema_11.options[form1.sistema_11.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 11");
	form1.sistema_11.focus(); return false;
	}

if ((form1.telefono_12.value.length ==0) && (form1.sistema_12.options[form1.sistema_12.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 12");
	form1.sistema_12.focus(); return false;
	}

if ((form1.telefono_13.value.length ==0) && (form1.sistema_13.options[form1.sistema_13.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 13");
	form1.sistema_13.focus(); return false;
	}
	
if ((form1.telefono_14.value.length ==0) && (form1.sistema_14.options[form1.sistema_14.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 14");
	form1.sistema_14.focus(); return false;
	}
	
if ((form1.telefono_15.value.length ==0) && (form1.sistema_15.options[form1.sistema_15.selectedIndex].value !=" ")){
	alert ("No puedes seleccionar un sistema ya que no hay Telefono 15");
	form1.sistema_15.focus(); return false;
	}


if (form1.nuevo_tel1.value.length!=0){
			if (form1.nuevo_tel1.value.length<10){
			alert("El Nuevo Telefono 1, NO puede ser menor de 10 numeros");
			form1.nuevo_tel1.focus(); return true;
			}
			
			if ((form1.nuevo_tel1.value.length==11) || (form1.nuevo_tel1.value.length==12)){
			alert("El Nuevo Telefono 1, NO es valido deben ser numeros de 10 ó 13");
			form1.nuevo_tel1.focus(); return true;
			}
			
		}

if (form1.nuevo_tel2.value.length!=0){
			if (form1.nuevo_tel2.value.length<10){
			alert("El Nuevo Telefono 2, NO puede ser menor de 10 numeros");
			form1.nuevo_tel2.focus(); return true;
			}
			
			if ((form1.nuevo_tel2.value.length==11) || (form1.nuevo_tel2.value.length==12)){
			alert("El Nuevo Telefono 2, NO es valido deben ser numeros de 10 ó 13");
			form1.nuevo_tel2.focus(); return true;
			}
			
		}


if (form1.nuevo_tel3.value.length!=0){
			if (form1.nuevo_tel3.value.length<10){
			alert("El Nuevo Telefono 3, NO puede ser menor de 10 numeros");
			form1.nuevo_tel3.focus(); return true;
			}
			
			if ((form1.nuevo_tel3.value.length==11) || (form1.nuevo_tel3.value.length==12)){
			alert("El Nuevo Telefono 3, NO es valido deben ser numeros de 10 ó 13");
			form1.nuevo_tel3.focus(); return true;
			}
			
		}

if (form1.nuevo_tel4.value.length!=0){
			if (form1.nuevo_tel4.value.length<10){
			alert("El Nuevo Telefono 4, NO puede ser menor de 10 numeros");
			form1.nuevo_tel4.focus(); return true;
			}
			
			if ((form1.nuevo_tel4.value.length==11) || (form1.nuevo_tel4.value.length==12)){
			alert("El Nuevo Telefono 4, NO es valido deben ser numeros de 10 ó 13");
			form1.nuevo_tel4.focus(); return true;
			}
			
		}


if (form1.nuevo_tel5.value.length!=0){
			if (form1.nuevo_tel5.value.length<10){
			alert("El Nuevo Telefono 5, NO puede ser menor de 10 numeros");
			form1.nuevo_tel5.focus(); return true;
			}
			
			if ((form1.nuevo_tel5.value.length==11) || (form1.nuevo_tel5.value.length==12)){
			alert("El Nuevo Telefono 5, NO es valido deben ser numeros de 10 ó 13");
			form1.nuevo_tel5.focus(); return true;
			}
			
		}

if ((form1.nuevo_tel1.value.length !=0) && (form1.nuevo_tel1_sistema.options[form1.nuevo_tel1_sistema.selectedIndex].value ==" ")){
	alert ("Selecciona un sistema para el nuevo telefono 1");
	form1.nuevo_tel1_sistema.focus(); return false;
	}

if ((form1.nuevo_tel2.value.length !=0) && (form1.nuevo_tel2_sistema.options[form1.nuevo_tel2_sistema.selectedIndex].value ==" ")){
	alert ("Selecciona un sistema para el nuevo telefono 2");
	form1.nuevo_tel2_sistema.focus(); return false;
	}


if ((form1.nuevo_tel3.value.length !=0) && (form1.nuevo_tel3_sistema.options[form1.nuevo_tel3_sistema.selectedIndex].value ==" ")){
	alert ("Selecciona un sistema para el nuevo telefono 3");
	form1.nuevo_tel3_sistema.focus(); return false;
	}

if ((form1.nuevo_tel4.value.length !=0) && (form1.nuevo_tel4_sistema.options[form1.nuevo_tel4_sistema.selectedIndex].value ==" ")){
	alert ("Selecciona un sistema para el nuevo telefono 4");
	form1.nuevo_tel4_sistema.focus(); return false;
	}

if ((form1.nuevo_tel5.value.length !=0) && (form1.nuevo_tel5_sistema.options[form1.nuevo_tel5_sistema.selectedIndex].value ==" ")){
	alert ("Selecciona un sistema para el nuevo telefono 5");
	form1.nuevo_tel5_sistema.focus(); return false;
	}


	alert("Gestión realizada exitosamente");
	form1.submit();
} 
</script>


