<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
include("verificasessionexa.php");


$rst_productos=mysql_query("SELECT * FROM base WHERE cuenta=". $_REQUEST["cod"].";",$conexion);
$fila_producto=mysql_fetch_array($rst_productos);

if (($_POST["saldo"]!='') && ($_POST["mora"]!='Seleccione una opcion') && ($_POST["ciclo"]!='Seleccione una opcion'))
{
mysql_query ("INSERT INTO base_captura(asesor, num_cliente, contrato, cuenta, producto, saldo, mora, ciclo, telefono_1, extension_1, ca_1, cr_1, tipo_1, status_tel1, telefono_2, extension_2, ca_2, cr_2, tipo_2, status_tel2, telefono_3, extension_3, ca_3, cr_3, tipo_3, status_tel3, telefono_4, extension_4, ca_4, cr_4, tipo_4, status_tel4, telefono_5, extension_5, ca_5, cr_5, tipo_5, status_tel5, telefono_6, extension_6, ca_6, cr_6, tipo_6, status_tel6, telefono_7, extension_7, ca_7, cr_7, tipo_7, status_tel7, telefono_8, extension_8, ca_8, cr_8, tipo_8, status_tel8, telefono_9, extension_9, ca_9, cr_9, tipo_9, status_tel9,
telefono_10, extension_10, ca_10, cr_10, tipo_10, status_tel10, email_1, email_2, observaciones,hora, fecha)"." VALUE ('".$_POST["asesor"]."', '".$_POST["num_cliente"]."','".$_POST["contrato"]."','".$_POST["cuenta"]."','".$_POST["producto"]."','".$_POST["saldo"]."','".$_POST["mora"]."','".$_POST["ciclo"]."','".$_POST["telefono_1"]."','".$_POST["extension_1"]."','".$_POST["ca_1"]."','".$_POST["cr_1"]."','".$_POST["tipo_1"]."','".$_POST["status_tel1"]."','".$_POST["telefono_2"]."','".$_POST["extension_2"]."','".$_POST["ca_2"]."','".$_POST["cr_2"]."','".$_POST["tipo_2"]."','".$_POST["status_tel2"]."','".$_POST["telefono_3"]."','".$_POST["extension_3"]."','".$_POST["ca_3"]."','".$_POST["cr_3"]."','".$_POST["tipo_3"]."','".$_POST["status_tel3"]."','".$_POST["telefono_4"]."','".$_POST["extension_4"]."','".$_POST["ca_4"]."','".$_POST["cr_4"]."','".$_POST["tipo_4"]."','".$_POST["status_tel4"]."','".$_POST["telefono_5"]."','".$_POST["extension_5"]."','".$_POST["ca_5"]."','".$_POST["cr_5"]."','".$_POST["tipo_5"]."','".$_POST["status_tel5"]."','".$_POST["telefono_6"]."','".$_POST["extension_6"]."','".$_POST["ca_6"]."','".$_POST["cr_6"]."','".$_POST["tipo_6"]."','".$_POST["status_tel6"]."','".$_POST["telefono_7"]."','".$_POST["extension_7"]."','".$_POST["ca_7"]."','".$_POST["cr_7"]."','".$_POST["tipo_7"]."','".$_POST["status_tel7"]."','".$_POST["telefono_8"]."','".$_POST["extension_8"]."','".$_POST["ca_8"]."','".$_POST["cr_8"]."','".$_POST["tipo_8"]."','".$_POST["status_tel8"]."','".$_POST["telefono_9"]."','".$_POST["extension_9"]."','".$_POST["ca_9"]."','".$_POST["cr_9"]."','".$_POST["tipo_9"]."','".$_POST["status_tel9"]."','".$_POST["telefono_10"]."','".$_POST["extension_10"]."','".$_POST["ca_10"]."','".$_POST["cr_10"]."','".$_POST["tipo_10"]."','".$_POST["status_tel10"]."'	,'".$_POST["email_1"]."','".$_POST["email_2"]."','".$_POST["observaciones"]."','".$_POST["hora"]."','".$_POST["fecha"]."');",$conexion) or die ("Error al grabar un mensaje: ".header ("Location:error.php"));


//ACTUALIZA EL CAMPO DE STATUS_CUENTA CUANDO POR LO MENOS EN UN CAMPO STATUS_TEL HAY UN IL
if (($_POST["status_tel1"]=='IL') || ($_POST["status_tel2"]=='IL') || ($_POST["status_tel3"]=='IL') || ($_POST["status_tel4"]=='IL') || ($_POST["status_tel5"]=='IL') || ($_POST["status_tel6"]=='IL') || ($_POST["status_tel7"]=='IL') || ($_POST["status_tel8"]=='IL') || ($_POST["status_tel9"]=='IL') || ($_POST["status_tel10"]=='IL')){
  mysql_query("UPDATE base_captura SET status_cuenta= 'IL' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);

}


//ACTUALIZA EL CAMPO DE STATUS_CUENTA CUANDO TODO SEA DIFERENTE DE C  A PC

if (($_POST["status_tel1"]=='PC') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){
  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel2"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel3"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){
  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);
}


if (($_POST["status_tel4"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);
}


if (($_POST["status_tel5"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);
}

if (($_POST["status_tel6"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);
}


if (($_POST["status_tel7"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);
}


if (($_POST["status_tel8"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);
}

if (($_POST["status_tel9"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);
}


if (($_POST["status_tel10"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C')){

  mysql_query("UPDATE base_captura SET status_cuenta= 'PC' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);
}

//ACTUALIZA EL CAMPO DE STATUS_CUENTA CUANDO POR LO MENOS EN UN CAMPO STATUS_TEL HAY UN C
if (($_POST["status_tel1"]=='C') || ($_POST["status_tel2"]=='C') || ($_POST["status_tel3"]=='C') || ($_POST["status_tel4"]=='C') || ($_POST["status_tel5"]=='C') || ($_POST["status_tel6"]=='C') || ($_POST["status_tel7"]=='C') || ($_POST["status_tel8"]=='C') || ($_POST["status_tel9"]=='C') || ($_POST["status_tel10"]=='C')){
  mysql_query("UPDATE base_captura SET status_cuenta= 'C' WHERE cuenta=" .$_REQUEST["cod"].";",$conexion);

}
header("Location:Ejecutivo");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Localizacion PEEF</title>
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
-->
</style>

</head>
<body onLoad="mueveReloj()">
<div align="center"><img src="imagenes/margen11.jpg" width="1293" height="25"/></div>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style4">&nbsp;</p>
<table width="1294" border="0" align="center">
  
  <tr>
    <td width="1089" height="22"><span class="style4">Bienvenido: </span><span class="style4 style26"><span class="style4"><span class="style15">
      <?php /*Mostrando nombre de Usuario*/ echo $_COOKIE["usuario_nombre"]; ?>
    </span></span></span></td>
    <td width="195">&nbsp;</td>
  </tr>
</table>
<p align="center" class="style4 style26">Busqueda	 en PU</p>
<form id="form1" name="form1" method="post">
<table width="938" border="0" align="center">
    <tr>
      <td colspan="4"><div align="left"></div></td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#0033FF"><div align="center" class="style27">
          <div align="center">Asesor</div>
      </div></td>
      <td width="78" bgcolor="#0033FF"><div align="center" class="style27">
        <div align="center">N&deg; Cliente </div>
      </div></td>
      <td width="173" bgcolor="#0033FF"><div align="center" class="style27">Contrato</div></td>
      <td colspan="2" bgcolor="#0033FF"><div align="center" class="style27">Cuenta</div></td>
      <td width="90" bgcolor="#0033FF"><div align="center" class="style27">Producto</div></td>
      <td width="71" bgcolor="#0033FF"><div align="center" class="style27">Saldo</div></td>
      <td width="82" bgcolor="#0033FF"><div align="center" class="style27">Mora</div></td>
      <td width="116" bgcolor="#0033FF"><div align="center" class="style27">Ciclo</div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input name="asesor" type="text" id="asesor" value="<?php echo $_COOKIE["usuario_nombre"]; ?>" size="30" readonly="true"/>
      </div></td>
      <td>        <div align="center">
        <input name="num_cliente" type="text" id="num_cliente" size="10" value="<?php echo $fila_producto["numero_cte"] ?>" readonly="true"/>      
      </div></td>
      <td><div align="center">
          <input name="contrato" type="text" id="contrato" size="20" value="<?php echo $fila_producto["contrato"] ?> " readonly="true"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="cuenta" type="text" id="cuenta" size="19" value="<?php echo $fila_producto["cuenta"] ?>" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="producto" type="text" id="producto" size="15" value="<?php echo $fila_producto["producto"] ?>" readonly="true"/>
      </div></td>
      <td>
        <div align="center">
          <input name="saldo" type="text" id="saldo" size="9" maxlength="10"/>
</div></td>
      <td>
        
        <div align="center">
          <input name="mora" type="text" id="mora" size="8" maxlength="2" onblur="javascript:Numeros(this,0);" />
        </div></td>
      <td>
        <div align="center">
          <input name="ciclo" type="text" id="ciclo" size="8" maxlength="2" onblur="javascript:Numeros(this,0);" />
        </div></td>
    </tr>
    
    
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#0066FF"><div align="center" class="style27">Telefono</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">Extensi&oacute;n</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">CA</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">CR</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">Tipo</div></td>
      <td><div align="center"></div></td>
      <td bgcolor="#0066FF"><div align="center"><span class="style27">Email 1</span></div></td>
      <td colspan="2"><div align="center">
        <input name="email_1" type="text" id="email_1" size="30" />
      </div></td>
    </tr>
    <tr>
      <td width="41" bgcolor="#000066"><div align="center"><strong><span class="style28">1-
        </span>
      </strong></div>
        <div align="center"></div></td>
      <td width="135">
        
        <div align="center">
           <input name="telefono_1" type="text" id="telefono_1" onblur="javascript:Numeros(this,0);" size="13" maxlength="13"/>
        </div></td>
      <td><div align="center">
          <input name="extension_1" type="text" id="extension_1" onblur="javascript:Numeros(this,0);" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
          <select name="ca_1" id="ca_1" onchange="opcionescr(this.form)" >
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>SC</option>
            <option>TI</option>
            <option>LL</option>
          </select>
      </div></td>
      <td width="60">
        
            <div align="center">
                <select name="cr_1" id="cr_1" onchange="opcionestipo(this.form)">
				<option value=" " selected="selected"></option>
			  </select>
        </div></td>
      <td width="50">
        
          <div align="center">
                <select  name="tipo_1" id="tipo_1" onclick="document.form1.telefono_2.disabled=false">
                  <option value=" " selected="selected" > </option>
                </select>
        </div></td>
      <td><div align="center">
        <input name="status_tel1"  id="status_tel1" size="1" type="hidden"/>
      </div></td>
      <td bgcolor="#0066FF"><div align="center"><span class="style27">Email 2</span></div></td>
      <td colspan="2"><div align="center">
        <input name="email_2" type="text" id="email_2" size="30" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">2-</div></td>
      <td><div align="center">
        <input name="telefono_2" type="text" disabled="disabled" id="telefono_2" onblur="javascript:Numeros(this,0);" onclick="document.form1.extension_2.disabled=false" size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
          <input name="extension_2" type="text" disabled="disabled" id="extension_2" onblur="javascript:Numeros(this,0);" onclick="document.form1.ca_2.disabled=false" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
          <select name="ca_2" id="ca_2" onchange="opcionescr2(this.form)" disabled="disabled" onclick="document.form1.cr_2.disabled=false" >
            <option value=" " selected="selected">Seleccione una opcion</option>
			<option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>SC</option>
            <option>TI</option>
            <option>LL</option>
          </select>
      </div></td>
      <td>
        
          <div align="center">
              <select name="cr_2" id="cr_2" onchange="opcionestipo2(this.form)" disabled="disabled" onclick="document.form1.tipo_2.disabled=false">
               <option value=" "> </option>
            </select>
        </div></td>
      <td>
        
        <div align="center">
            <select  name="tipo_2" id="tipo_2" disabled="disabled" onclick="document.form1.telefono_3.disabled=false">
              <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="status_tel2"  id="status_tel2" size="1" type="hidden"/>
      </div></td>
      <td><div align="center">
        <div align="center"></div>
      </div></td>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">3-</div></td>
      <td><div align="center">
        <input name="telefono_3" type="text" disabled="disabled" id="telefono_3" onblur="javascript:Numeros(this,0);" onclick="document.form1.extension_3.disabled=false" size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
          <input name="extension_3" type="text" disabled="disabled" id="extension_3" onblur="javascript:Numeros(this,0);" onclick="document.form1.ca_3.disabled=false" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
          <select name="ca_3" id="ca_3" onchange="opcionescr3(this.form)" disabled="disabled" onclick="document.form1.cr_3.disabled=false">
           <option value=" "selected="selected">Seleccione una opcion</option>
		    <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>SC</option>
            <option>TI</option>
            <option>LL</option>
          </select>
      </div></td>
      <td>
        
          <div align="center">
              <select name="cr_3" id="cr_3" onchange="opcionestipo3(this.form)" disabled="disabled" onclick="document.form1.tipo_3.disabled=false">
              <option value=" " selected="selected" > </option>
            </select>
        </div></td>
      <td>
        
        <div align="center">
            <select  name="tipo_3" id="tipo_3" disabled="disabled" onclick="document.form1.telefono_4.disabled=false">
             <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="status_tel3"  id="status_tel3" size="1" type="hidden" />
      </div></td>
      <td colspan="3" bgcolor="#0066FF"><div align="center"><span class="style27">Observaciones</span></div></td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">4-</div></td>
      <td><div align="center">
        <input name="telefono_4" type="text" disabled="disabled" id="telefono_4" onblur="javascript:Numeros(this,0);" onclick="document.form1.extension_4.disabled=false" size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
          <input name="extension_4" type="text" disabled="disabled" id="extension_4" onblur="javascript:Numeros(this,0);" onclick="document.form1.ca_4.disabled=false" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
          <select name="ca_4" id="ca_4" onchange="opcionescr4(this.form)" disabled="disabled" onclick="document.form1.cr_4.disabled=false">
	        <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>SC</option>
            <option>TI</option>
            <option>LL</option>
          </select>
      </div></td>
      <td>
        
          <div align="center">
              <select name="cr_4" id="cr_4" onchange="opcionestipo4(this.form)" disabled="disabled" onclick="document.form1.tipo_4.disabled=false">
               <option value=" " selected="selected" > </option>
            </select>
        </div></td>
      <td>
        
        <div align="center">
            <select  name="tipo_4" id="tipo_4" disabled="disabled" onclick="document.form1.telefono_5.disabled=false">
              <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="status_tel4"  id="status_tel4" size="1" type="hidden" />
      </div></td>
      <td colspan="3" rowspan="2"><div align="center">
        <textarea name="observaciones" cols="35" id="observaciones"></textarea>
      </div>        <div align="center"></div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>5-</strong></div></td>
      <td><div align="center">
        <input name="telefono_5" type="text" disabled="disabled" id="telefono_5" onblur="javascript:Numeros(this,0);" onclick="document.form1.extension_5.disabled=false" size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
          <input name="extension_5" type="text" disabled="disabled" id="extension_5" onblur="javascript:Numeros(this,0);" onclick="document.form1.ca_5.disabled=false" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
          <select name="ca_5" id="ca_5" onchange="opcionescr5(this.form)" disabled="disabled" onclick="document.form1.cr_5.disabled=false">
	        <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>SC</option>
            <option>TI</option>
            <option>LL</option>
          </select>
      </div></td>
      <td>
        
          <div align="center">
              <select name="cr_5" id="cr_5" onchange="opcionestipo5(this.form)" disabled="disabled" onclick="document.form1.tipo_5.disabled=false">
               <option value=" " selected="selected" > </option>
            </select>
        </div></td>
      <td>
        
        <div align="center">
            <select  name="tipo_5" id="tipo_5" disabled="disabled" onclick="document.form1.telefono_6.disabled=false">
              <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="status_tel5"  id="status_tel5" size="1" type="hidden" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style27">6-</div></td>
      <td><div align="center">
        <input name="telefono_6" type="text" disabled="disabled" id="telefono_6" onblur="javascript:Numeros(this,0);" onclick="document.form1.extension_6.disabled=false" size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
        <input name="extension_6" type="text" disabled="disabled" id="extension_6" onblur="javascript:Numeros(this,0);" onclick="document.form1.ca_6.disabled=false" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
        <select name="ca_6" id="ca_6" onchange="opcionescr6(this.form)" disabled="disabled" onclick="document.form1.cr_6.disabled=false">
         <option value=" "selected="selected">Seleccione una opcion</option>
          <option>NC</option>
          <option>FS</option>
          <option>OC</option>
          <option>CT</option>
          <option>SC</option>
          <option>TI</option>
          <option>LL</option>
        </select>
      </div></td>
      <td><div align="center">
         <select name="cr_6" id="cr_6" onchange="opcionestipo6(this.form)" disabled="disabled" onclick="document.form1.tipo_6.disabled=false">
         <option value=" " selected="selected" > </option>
         </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_6" id="tipo_6" disabled="disabled" onclick="document.form1.telefono_7.disabled=false">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel6"  id="status_tel6" size="1" type="hidden"/>
      </div></td>
      <td bgcolor="#003366"><div align="center" class="style27">
        <div align="center">Hora</div>
      </div></td>
      <td><div align="center"></div></td>
      <td bgcolor="#003366"><div align="center"><span class="style27">Fecha</span></div></td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">7-</div></td>
      <td><div align="center">
        <input name="telefono_7" type="text" disabled="disabled" id="telefono_7" onblur="javascript:Numeros(this,0);" onclick="document.form1.extension_7.disabled=false" size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
        <input name="extension_7" type="text" disabled="disabled" id="extension_7" onblur="javascript:Numeros(this,0);" onclick="document.form1.ca_7.disabled=false" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
        <select name="ca_7" id="ca_7" onchange="opcionescr7(this.form)" disabled="disabled" onclick="document.form1.cr_7.disabled=false">
         <option value=" "selected="selected">Seleccione una opcion</option>
          <option>NC</option>
          <option>FS</option>
          <option>OC</option>
          <option>CT</option>
          <option>SC</option>
          <option>TI</option>
          <option>LL</option>
        </select>
      </div></td>
      <td><div align="center">
          <select name="cr_7" id="cr_7" onchange="opcionestipo7(this.form)" disabled="disabled" onclick="document.form1.tipo_7.disabled=false">
          <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_7" id="tipo_7" disabled="disabled" onclick="document.form1.telefono_8.disabled=false">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel7"  id="status_tel7" size="1" type="hidden" />
      </div></td>
      <td><div align="center">
        <input name="hora" type="text" size="6" readonly="true" value="horaImprimible" />
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center">
        <?php $fecha = date ("Y-m-d");?>
        <input name="fecha" type="text" id="fecha" size="8" value="<?php echo $fecha;?>" readonly="true"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">8-</div></td>
      <td><div align="center">
        <input name="telefono_8" type="text" disabled="disabled" id="telefono_8" onblur="javascript:Numeros(this,0);" onclick="document.form1.extension_8.disabled=false" size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
        <input name="extension_8" type="text" disabled="disabled" id="extension_8" onblur="javascript:Numeros(this,0);" onclick="document.form1.ca_8.disabled=false" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
        <select name="ca_8" id="ca_8" onchange="opcionescr8(this.form)" disabled="disabled" onclick="document.form1.cr_8.disabled=false">
	      <option value=" "selected="selected">Seleccione una opcion</option>
          <option>NC</option>
          <option>FS</option>
          <option>OC</option>
          <option>CT</option>
          <option>SC</option>
          <option>TI</option>
          <option>LL</option>
        </select>
      </div></td>
      <td><div align="center">
          <select name="cr_8" id="cr_8" onchange="opcionestipo8(this.form)" disabled="disabled" onclick="document.form1.tipo_8.disabled=false">
	      <option value=" " selected="selected" > </option>
    	  </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_8" id="tipo_8" disabled="disabled" onclick="document.form1.telefono_9.disabled=false">
           <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel8"  id="status_tel8" size="1" type="hidden" />
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style27"></div></td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">9-</div></td>
      <td><div align="center">
        <input name="telefono_9" type="text" disabled="disabled" id="telefono_9" onblur="javascript:Numeros(this,0);" onclick="document.form1.extension_9.disabled=false" size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
        <input name="extension_9" type="text" disabled="disabled" id="extension_9" onblur="javascript:Numeros(this,0);" onclick="document.form1.ca_9.disabled=false" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
        <select name="ca_9" id="ca_9" onchange="opcionescr9(this.form)" disabled="disabled" onclick="document.form1.cr_9.disabled=false">
		  <option value=" "selected="selected">Seleccione una opcion</option>
          <option>NC</option>
          <option>FS</option>
          <option>OC</option>
          <option>CT</option>
          <option>SC</option>
          <option>TI</option>
          <option>LL</option>
        </select>
      </div></td>
      <td><div align="center">
          <select name="cr_9" id="cr_9" onchange="opcionestipo9(this.form)" disabled="disabled" onclick="document.form1.tipo_9.disabled=false">
          <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_9" id="tipo_9" disabled="disabled" onclick="document.form1.telefono_10.disabled=false">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel9"  id="status_tel9" size="1" type="hidden"/>
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td bgcolor="#000066"><div align="center" class="style27">10-</div></td>
      <td><div align="center">
        <input name="telefono_10" type="text" disabled="disabled" id="telefono_10" onblur="javascript:Numeros(this,0);" onclick="document.form1.extension_10.disabled=false" size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
        <input name="extension_10" type="text" disabled="disabled" id="extension_10" onblur="javascript:Numeros(this,0);" onclick="document.form1.ca_10.disabled=false" size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
        <select name="ca_10" id="ca_10" onchange="opcionescr10(this.form)" disabled="disabled" onclick="document.form1.cr_10.disabled=false">
          <option value=" "selected="selected">Seleccione una opcion</option>
          <option>NC</option>
          <option>FS</option>
          <option>OC</option>
          <option>CT</option>
          <option>SC</option>
          <option>TI</option>
          <option>LL</option>
        </select>
      </div></td>
      <td><div align="center">
          <select name="cr_10" id="cr_10" onchange="opcionestipo10(this.form)" disabled="disabled" onclick="document.form1.tipo_10.disabled=false">
           <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_10" id="tipo_10" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel10"  id="status_tel10" size="1" type="hidden" />
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    
    <tr>
      <td colspan="10"><div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="10"><div align="center">
          <input name="Guardar"  type="button" value="Guardar" onclick="validar(this.form)"/>
      </div></td>
    </tr>
  </table>
</form>
<p align="center" class="style25"><a href="Ejecutivo">Regresar</a></p>
<hr align="center" color="#003399" />
<p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2011</strong></font></font></font></p>
<center></center>
</body>
</html>
<script language="JavaScript"> 
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
		{ if ( obj.value.length < l || l < obj.value.length){alert("ESTE CAMPO DEBE DE CONTENER " + l + " NÚMEROS"); obj.			focus();} }

}
</script>

<script>
//funcion de seleccion para los botones CA_1 y CR_1
function opcionescr(form)
{
var select = form.ca_1.options;   
var combo = form.cr_1.options;
combo.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel1.value="PC";
		document.form1.tipo_1.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel1.value="PC"
		document.form1.tipo_1.value=" ";

	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel1.value="PC"
		document.form1.tipo_1.value=" ";

	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel1.value="PC"
		document.form1.tipo_1.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel1.value="IL"
		document.form1.tipo_1.value=" ";
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel1.value="IL"
		document.form1.tipo_1.value=" ";
	}
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel1.value="C"
	}
	

}
</script>

<script>

//funcion de seleccion para los botones CR_1 y Tipo_1
function opcionestipo(form)
{
var select = form.cr_1.options;
var combo = form.tipo_1.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option("");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}

}
</script> 


<script>
//funcion de seleccion para los botones CA_2, CR_2 y TIPO_2
function opcionescr2(form)
{
var select = form.ca_2.options;   
var combo = form.cr_2.options;
combo.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel2.value="PC";
		document.form1.tipo_2.value=" ";
		
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel2.value="PC"
		document.form1.tipo_2.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel2.value="PC"
		document.form1.tipo_2.value=" ";
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel2.value="PC"
				document.form1.tipo_2.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel2.value="IL"
		document.form1.tipo_2.value=" ";	
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel2.value="IL"
		document.form1.tipo_2.value=" ";

	}
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel2.value="C"
	}
}
</script>

<script>
function opcionestipo2(form)
{
var select = form.cr_2.options;
var combo = form.tipo_2.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
	
}
</script> 

<script>
//funcion de seleccion para los botones CA_3, CR_3 y TIPO_3
function opcionescr3(form)
{
var select = form.ca_3.options;   
var combo = form.cr_3.options;
combo.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel3.value="PC";
		document.form1.tipo_3.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel3.value="PC"
				document.form1.tipo_3.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel3.value="PC"
		document.form1.tipo_3.value=" ";
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel3.value="PC"
		document.form1.tipo_3.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel3.value="IL"
		document.form1.tipo_3.value=" ";
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel3.value="IL"
		document.form1.tipo_3.value=" ";
	}
	
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	

		var seleccionar1 = new Option("Seleccione una opcion","","","");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel3.value="C"
	}
}
</script>

<script>
function opcionestipo3(form)
{
var select = form.cr_3.options;
var combo = form.tipo_3.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
	
}
</script> 

<script>
//funcion de seleccion para los botones CA_4, CR_4 y TIPO_4
function opcionescr4(form)
{
var select = form.ca_4.options;   
var combo = form.cr_4.options;
combo.length = null;
	
//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel4.value="PC";
				document.form1.tipo_4.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel4.value="PC"
						document.form1.tipo_4.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel4.value="PC"
						document.form1.tipo_4.value=" ";
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel4.value="PC"
						document.form1.tipo_4.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel4.value="IL"
						document.form1.tipo_4.value=" ";
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel4.value="IL"
						document.form1.tipo_4.value=" ";
	}
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion","","","");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel4.value="C"
	}
}

function opcionestipo4(form)
{
var select = form.cr_4.options;
var combo = form.tipo_4.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
}
</script> 

<script>
//funcion de seleccion para los botones CA_5, CR_5 y TIPO_5
function opcionescr5(form)
{
var select = form.ca_5.options;   
var combo = form.cr_5.options;
combo.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel5.value="PC";
		document.form1.tipo_5.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel5.value="PC"
		document.form1.tipo_5.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel5.value="PC"
		document.form1.tipo_5.value=" ";
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel5.value="PC"
		document.form1.tipo_5.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel5.value="IL"
		document.form1.tipo_5.value=" ";
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel5.value="IL"
		document.form1.tipo_5.value=" ";
	}
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion","","","");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel5.value="C"
	}

}

function opcionestipo5(form)
{
var select = form.cr_5.options;
var combo = form.tipo_5.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
}
</script> 

<script>
//funcion de seleccion para los botones CA_6, CR_6 y TIPO_6
function opcionescr6(form)
{
var select = form.ca_6.options;   
var combo = form.cr_6.options;
combo.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel6.value="PC";
		document.form1.tipo_6.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel6.value="PC"
		document.form1.tipo_6.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel6.value="PC"
		document.form1.tipo_6.value=" ";
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel6.value="PC"
		document.form1.tipo_6.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel6.value="IL"
		document.form1.tipo_6.value=" ";
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel6.value="IL"
		document.form1.tipo_6.value=" ";
	}
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion","","","");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel6.value="C"
	}

}

function opcionestipo6(form)
{
var select = form.cr_6.options;
var combo = form.tipo_6.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
}
</script> 

<script>
//funcion de seleccion para los botones CA_7, CR_7 y TIPO_7
function opcionescr7(form)
{
var select = form.ca_7.options;   
var combo = form.cr_7.options;
combo.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel7.value="PC";
		document.form1.tipo_7.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel7.value="PC"
		document.form1.tipo_7.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel7.value="PC"
		document.form1.tipo_7.value=" ";
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel7.value="PC"
		document.form1.tipo_7.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel7.value="IL"
		document.form1.tipo_7.value=" ";
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel7.value="IL"
		document.form1.tipo_7.value=" ";
	}
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion","","","");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel7.value="C"
	}

}

function opcionestipo7(form)
{
var select = form.cr_7.options;
var combo = form.tipo_7.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
}
</script> 


<script>
//funcion de seleccion para los botones CA_8, CR_8 y TIPO_8
function opcionescr8(form)
{
var select = form.ca_8.options;   
var combo = form.cr_8.options;
combo.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel8.value="PC";
		document.form1.tipo_8.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel8.value="PC"
		document.form1.tipo_8.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel8.value="PC"
		document.form1.tipo_8.value=" ";
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel8.value="PC"
		document.form1.tipo_8.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel8.value="IL"
		document.form1.tipo_8.value=" ";
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel8.value="IL"
		document.form1.tipo_8.value=" ";
	}
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	

		var seleccionar1 = new Option("Seleccione una opcion","","","");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel8.value="C"
	}

}

function opcionestipo8(form)
{
var select = form.cr_8.options;
var combo = form.tipo_8.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
}
</script> 


<script>
//funcion de seleccion para los botones CA_9, CR_9 y TIPO_9
function opcionescr9(form)
{
var select = form.ca_9.options;   
var combo = form.cr_9.options;
combo.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel9.value="PC";
		document.form1.tipo_9.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel9.value="PC"
		document.form1.tipo_9.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel9.value="PC"
		document.form1.tipo_9.value=" ";
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel9.value="PC"
		document.form1.tipo_9.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel9.value="IL"
		document.form1.tipo_9.value=" ";
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel9.value="IL"
		document.form1.tipo_9.value=" ";
	}
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion","","","");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel9.value="C"
	}

}

function opcionestipo9(form)
{
var select = form.cr_9.options;
var combo = form.tipo_9.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
}
</script> 

<script>
//funcion de seleccion para los botones CA_10, CR_10 y TIPO_10
function opcionescr10(form)
{
var select = form.ca_10.options;   
var combo = form.cr_10.options;
combo.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		document.form1.status_tel10.value="PC";
		document.form1.tipo_10.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		document.form1.status_tel10.value="PC"
		document.form1.tipo_10.value=" ";
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		document.form1.status_tel10.value="PC"
		document.form1.tipo_10.value=" ";
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		document.form1.status_tel10.value="PC"
		document.form1.tipo_10.value=" ";
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel10.value="IL"
		document.form1.tipo_10.value=" ";
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		document.form1.status_tel10.value="IL"
		document.form1.tipo_10.value=" ";
	}
	
	if (select[7].selected == true) //realizando la seleccion del piso
	{	
		
		var seleccionar1 = new Option("Seleccione una opcion","","","");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR","","","");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel10.value="C"
	}

}

function opcionestipo10(form)
{
var select = form.cr_10.options;
var combo = form.tipo_10.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ","","","");
		combo[0]=seleccion1;
	}
	
	if ((select[1].selected == true) || (select[2].selected == true) || (select[3].selected == true)){
		var seleccion1 = new Option("Celular");
		var seleccion2 = new Option("Casa");
		var seleccion3 = new Option("Trabajo/Oficina");
		var seleccion4 = new Option("Nextel");
		combo[0]=seleccion1;
		combo[1]=seleccion2;
		combo[2]=seleccion3;
		combo[3]=seleccion4;	
	}
}
</script> 

<script>

function validar(form1)
{

//validando que coloquen el saldo 
if (form1.saldo.value==" ")
	{
		alert("Por favor, Introdusca el saldo de la cuenta")
		form1.saldo.focus(); return false;
	}
	
//validando que introduzcan la mora
if (form1.mora.value.length==" ")
    {
    alert("Por favor, Introdusca la Mora");
    form1.mora.focus(); return false;
    }
	
//validando que introduzcan el ciclo
if (form1.ciclo.value.length==" ")
		{	
			alert("Por favor, Introdusca el Ciclo");
			form1.ciclo.focus(); return false;
		}
		
//VALIDACIONES DE LOS TELEFONOS QUE NO SEAN MENOR QUE 13 NUMEROS

//validando que el Telefono 1 no este vacio 
if (form1.telefono_1.value.length==0)	
			{
			alert("El Telefono 1, NO puede estar vacio");
			form1.telefono_1.focus(); return true;
			}

//validando que el telefono 1 no sea menor que 13

if (form1.telefono_1.value.length!=0){
			if (form1.telefono_1.value.length<10){
			alert("El Telefono 1, NO puede ser menor de 10 numeros");
			form1.telefono_1.focus(); return true;
			}
			
			if ((form1.telefono_1.value.length==11) || (form1.telefono_1.value.length==12)){
			alert("El Telefono 1, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_1.focus(); return true;
			}
			
		}
		

//validando que el telefono 2 no sea menor que 13
if (form1.telefono_2.value.length!=0){
			
			if (form1.telefono_2.value.length<10){
			alert("El Telefono 2, NO puede ser menor de 10 numeros");
			form1.telefono_2.focus(); return true;
			}
			
			if ((form1.telefono_2.value.length==11) || (form1.telefono_2.value.length==12)){
			alert("El Telefono 2, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_2.focus(); return true;
			}
		}
		
//validando que el telefono 3 no sea menor que 13
if (form1.telefono_3.value.length!=0){
			
			if (form1.telefono_3.value.length<10){
			alert("El Telefono 3, NO puede ser menor de 10 numeros");
			form1.telefono_3.focus(); return true;
			}
			
			if ((form1.telefono_3.value.length==11) || (form1.telefono_3.value.length==12)){
			alert("El Telefono 3, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_3.focus(); return true;
			}

		}

//validando que el telefono 4 no sea menor que 13
if (form1.telefono_4.value.length!=0){

			if (form1.telefono_4.value.length<10){
			alert("El Telefono 4, NO puede ser menor de 10 numeros");
			form1.telefono_4.focus(); return true;
			}
			
			if ((form1.telefono_4.value.length==11) || (form1.telefono_4.value.length==12)){
			alert("El Telefono 4, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_4.focus(); return true;
			}

		}
		
//validando que el telefono 5 no sea menor que 13
if (form1.telefono_5.value.length!=0){
			
			if (form1.telefono_5.value.length<10){
			alert("El Telefono 5, NO puede ser menor de 10 numeros");
			form1.telefono_5.focus(); return true;
			}
			
			if ((form1.telefono_5.value.length==11) || (form1.telefono_5.value.length==12)){
			alert("El Telefono 5, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_5.focus(); return true;
			}

		}


//validando que el telefono 4 no sea menor que 13
if (form1.telefono_6.value.length!=0){
			
			if (form1.telefono_6.value.length<10){
			alert("El Telefono 6, NO puede ser menor de 10 numeros");
			form1.telefono_6.focus(); return true;
			}
			
			if ((form1.telefono_6.value.length==11) || (form1.telefono_6.value.length==12)){
			alert("El Telefono 6, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_6.focus(); return true;
			}

		}

//validando que el telefono 7 no sea menor que 13
if (form1.telefono_7.value.length!=0){

			if (form1.telefono_7.value.length<10){
			alert("El Telefono 7, NO puede ser menor de 10 numeros");
			form1.telefono_7.focus(); return true;
			}
			
			if ((form1.telefono_7.value.length==11) || (form1.telefono_7.value.length==12)){
			alert("El Telefono 7, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_7.focus(); return true;
			}

		}

//validando que el telefono 8 no sea menor que 13
if (form1.telefono_8.value.length!=0){

			if (form1.telefono_8.value.length<10){
			alert("El Telefono 8, NO puede ser menor de 10 numeros");
			form1.telefono_8.focus(); return true;
			}
			
			if ((form1.telefono_8.value.length==11) || (form1.telefono_8.value.length==12)){
			alert("El Telefono 8, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_8.focus(); return true;
			}


		}
		
//validando que el telefono 9 no sea menor que 13
if (form1.telefono_9.value.length!=0){
		
			if (form1.telefono_9.value.length<10){
			alert("El Telefono 9, NO puede ser menor de 10 numeros");
			form1.telefono_9.focus(); return true;
			}
			
			if ((form1.telefono_9.value.length==11) || (form1.telefono_9.value.length==12)){
			alert("El Telefono 9, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_9.focus(); return true;
			}

		}

//validando que el telefono 10 no sea menor que 13
if (form1.telefono_10.value.length!=0){

			if (form1.telefono_10.value.length<10){
			alert("El Telefono 10, NO puede ser menor de 10 numeros");
			form1.telefono_10.focus(); return true;
			}
			
			if ((form1.telefono_10.value.length==11) || (form1.telefono_10.value.length==12)){
			alert("El Telefono 10, NO es valido deben ser numeros de 10 ó 13");
			form1.telefono_10.focus(); return true;
			}
	
		}		
		
//validando que se tipifique el CA_1
if (form1.ca_1.options[form1.ca_1.selectedIndex].value==" "){
		    alert("Por favor, tipifique el telefono 1");
		    form1.ca_1.focus(); return false;
		    }		

//validando que se tipifique el CA_2 si esta habilitado		
if ((form1.ca_2.disabled==false) && (form1.ca_2.options[form1.ca_2.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 2");
			form1.ca_2.focus(); return false;
			}
		
//validando que se tipifique el CA_3 si esta habilitado			
if ((form1.ca_3.disabled==false) && (form1.ca_3.options[form1.ca_3.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 3");
			form1.ca_3.focus(); return false;
			}
	
//validando que se tipifique el CA_4 si esta habilitado
if ((form1.ca_4.disabled==false) && (form1.ca_4.options[form1.ca_4.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 4");
			form1.ca_4.focus(); return false;
			}

//validando que se tipifique el CA_5 si esta habilitado
if ((form1.ca_5.disabled==false) && (form1.ca_5.options[form1.ca_5.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 5");
			form1.ca_5.focus(); return false;
			}

//validando que se tipifique el CA_6 si esta habilitado
if ((form1.ca_6.disabled==false) && (form1.ca_6.options[form1.ca_6.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 6");
			form1.ca_6.focus(); return false;
			}

//validando que se tipifique el CA_7 si esta habilitado
if ((form1.ca_7.disabled==false) && (form1.ca_7.options[form1.ca_7.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 7");
			form1.ca_7.focus(); return false;
			}

//validando que se tipifique el CA_8 si esta habilitado
if ((form1.ca_8.disabled==false) && (form1.ca_8.options[form1.ca_8.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 8");
			form1.ca_8.focus(); return false;
			}

//validando que se tipifique el CA_9 si esta habilitado
if ((form1.ca_9.disabled==false) && (form1.ca_9.options[form1.ca_9.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 9");
			form1.ca_9.focus(); return false;
			}

//validando que se tipifique el CA_10 si esta habilitado
if ((form1.ca_10.disabled==false) && (form1.ca_10.options[form1.ca_10.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 10");
			form1.ca_10.focus(); return false;
			}
		
		alert("Gestión realizada exitosamente");
		form1.submit()
			
}
</script>
