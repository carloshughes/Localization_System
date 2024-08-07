<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
include("verificasessionexa.php");

//Consulta que regresa solo los datos del usuario que se acaba de loguear

//$cuentas=mysql_query("SELECT count (status) FROM base where status='Trabajada'",$conexion);

$rst_productos=mysql_query("SELECT * FROM base_captura WHERE cuenta=". $_REQUEST["cod"].";",$conexion);
//$rst_productos=mysql_query("SELECT * FROM base WHERE and cuenta=". $_REQUEST["cod"].";",$conexion);
$fila_producto=mysql_fetch_array($rst_productos);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PU-<?php echo $fila_producto["nombre"];//$_COOKIE["usuario_nombre"];?></title>
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
<p align="center" class="style4"><img src="imagenes/logo.JPG" width="398" height="295" /></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="22">&nbsp;</td>
    <td width="195">&nbsp;</td>
  </tr>
</table>
<p align="center" class="style4 style26">Gesti&oacute;n </p>
<form id="form1" name="form1" method="post">
<table width="922" border="0" align="center">
    
    
    <tr>
      <td colspan="7"><span class="style4">Bienvenido: </span><span class="style4 style26"><span class="style4"><span class="style15">
      <?php /*Mostrando nombre de Usuario */echo $fila_producto["nombre"];?>
      </span></span></span></td>
      <td rowspan="3">&nbsp;</td>
      <td rowspan="3">&nbsp;</td>
      <td rowspan="3">&nbsp;</td>
      <td rowspan="3"><div align="center"><span class="style4 style26"><img src="imagenes/buscar_gente.jpg" width="173" height="88" /></span></div></td>
    </tr>
    <tr>
      <td height="10" colspan="7"><span class="style4">Eslabon:</span><span class="style15"> <strong><?php echo $_COOKIE["usuario_nombre"];?></strong></span></td>
    </tr>
    <tr>
      <td height="21" colspan="7">&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="2" bgcolor="#003366"><span class="style27">N&deg; <?php echo "<font color='#FFFFFF'>".$fila_producto["cuentas_asignadas"] ."</font>";?></span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="3" bgcolor="#0033FF"><div align="center" class="style27">
          <div align="center">Eslabon</div>
      </div></td>
      <td width="66" bgcolor="#0033FF"><div align="center" class="style27">
        <div align="center">N&deg; Cliente </div>
      </div></td>
      <td width="162" bgcolor="#0033FF"><div align="center" class="style27">Contrato</div></td>
      <td colspan="2" bgcolor="#0033FF"><div align="center" class="style27">Cuenta</div></td>
      <td width="90" bgcolor="#0033FF"><div align="center" class="style27">Producto</div></td>
      <td width="54" bgcolor="#0033FF"><div align="center" class="style27">Saldo</div></td>
      <td width="48" bgcolor="#0033FF"><div align="center" class="style27">Mora</div></td>
      <td width="173" bgcolor="#0033FF"><div align="center" class="style27">Ciclo</div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
          <input name="eslabon" type="text" id="eslabon" value="<?php echo $fila_producto["eslabon"] ?>" size="30" readonly="true"/>
      </div></td>
      <td>        <div align="center">
        <input name="numero_cte" type="text" id="numero_cte" size="10" value="<?php echo $fila_producto["numero_cte"] ?>" readonly="true"/>      
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
          <!-- <input name="saldo" type="text" id="saldo" value="$" size="9" maxlength="10"/>-->
		     <input name="saldo" type="text" value="<?php echo $fila_producto["saldo"] ?>" size="9" maxlength="10">
</div></td>
      <td>
        
        <div align="center">
          <input name="mora" type="text" id="mora"  value="<?php echo $fila_producto["mora"] ?>" size="8" maxlength="2" readonly="true" />
        </div></td>
      <td>
        <div align="center">
          <input name="ciclo" type="text" id="ciclo" value="<?php echo $fila_producto["ciclo"] ?>" size="8" maxlength="2" readonly="true" />
        </div></td>
    </tr>
    
    <tr>
      <td colspan="3" bgcolor="#0066FF"><div align="center" class="style27">Telefono</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">Extensi&oacute;n</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">CA</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">CR</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">Tipo</div></td>
      <td><div align="center"></div></td>
      <td bgcolor="#0066FF"><div align="center"><span class="style27">Email 1</span></div></td>
      <td colspan="2">
        
        <div align="center">
          <input name="email_1" type="text" id="email_1" onBlur="javascript:changeCase(this.form.email_1)" value="<?php echo $fila_producto["email_1"] ?>" size="30"/>
        </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#000066"><div align="center"><strong><span class="style28">1-
        </span>
      </strong></div>
        <div align="center"></div></td>
      <td>
        
        <div align="center">
           <input name="telefono_1" type="text" id="telefono_1" value="<?php echo $fila_producto["telefono_1"] ?>" size="13" maxlength="13" readonly="true"/>
        </div></td>
      <td><div align="center">
          <input name="extension_1" type="text" id="extension_1" onblur="javascript:Numeros(this,0);" value="<?php echo $fila_producto["extension_1"] ?>" size="5" maxlength="5"/>
      </div></td>
      <td>        <label>
        <div align="center">
          <input name="ca_1" type="text" id="ca_1" value="<?php echo $fila_producto["ca_1"] ?>" />
        </div>
</label></td><td width="71">
        
        <div align="center">
              <input name="cr_1" type="text" id="cr_1" onblur="javascript:Numeros(this,0);" size="5" maxlength="5"/>
          </div></td>
      <td width="40">
        
        <div align="center">
          <input name="tipo_1" type="text" id="tipo_1" onblur="javascript:Numeros(this,0);" size="5" maxlength="5"/>
        </div></td>
      <td>&nbsp;</td>
      <td bgcolor="#0066FF"><div align="center"><span class="style27">Email 2</span></div></td>
      <td colspan="2">
        
        <div align="center">
          <input name="email_2" type="text" id="email_2" size="30" onBlur="javascript:changeCase(this.form.email_2)" value="<?php echo $fila_producto["email_2"] ?>"/>
        </div></td>
    </tr>
    <tr>
      <td width="24" bgcolor="#000099"><div align="center" class="style27">2-
        
      </div></td>
      <td width="17" bgcolor="#000099">&nbsp;</td>
      <td width="131"><div align="center">
        <input name="telefono_2" type="text"  id="telefono_2" value="<?php echo $fila_producto["telefono_2"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_2" type="text" disabled="disabled" id="extension_2" value="<?php echo $fila_producto["extension_2"] ?>"  size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>
        <div align="center">
          <input name="ca_2" type="text" id="ca_2" value="<?php echo $fila_producto["ca_2"] ?>" readonly="true" />
        </div></td><td>
        
          <div align="center">
            <input name="cr_2" type="text" id="cr_2"  size="5" maxlength="5" readonly="true"/>
          </div></td>
      <td>
        
        <div align="center">
          <input name="tipo_2" type="text" id="tipo_2" size="5" maxlength="5" readonly="true"/>
        </div></td>
      <td>&nbsp;</td>
      <td><div align="center">
        <div align="center"></div>
      </div></td>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">3-</div></td>
      <td bgcolor="#0000CC">&nbsp;</td>
      <td><div align="center">
        <input name="telefono_3" type="text"  id="telefono_3"  value="<?php echo $fila_producto["telefono_3"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_3" type="text"  id="extension_3" value="<?php echo $fila_producto["extension_3"] ?>"  size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>
        <div align="center">
          <input name="ca_3" type="text" id="ca_3" value="<?php echo $fila_producto["ca_3"] ?>" readonly="true" />
        </div></td><td>
        
          <div align="center">
            <input name="cr_3" type="text" id="cr_3"  size="5" maxlength="5" readonly="true"/>
          </div></td>
      <td>
        
        <div align="center">
          <input name="tipo_3" type="text" id="tipo_3"  size="5" maxlength="5" readonly="true"/>
        </div></td>
      <td>&nbsp;</td>
      <td colspan="3" bgcolor="#0066FF"><div align="center"><span class="style27">Observaciones</span></div></td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">4-</div></td>
      <td bgcolor="#0000FF">&nbsp;</td>
      <td><div align="center">
        <input name="telefono_4" type="text"  id="telefono_4" value="<?php echo $fila_producto["telefono_4"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_4" type="text" id="extension_4" value="<?php echo $fila_producto["extension_4"] ?>"  size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="ca_4" type="text" id="ca_4" value="<?php echo $fila_producto["ca_4"] ?>" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="cr_4" type="text" id="cr_4"  size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="tipo_4" type="text" id="tipo_4"  size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>&nbsp;</td>
      <td colspan="3" rowspan="2"><div align="center">
        <textarea name="observaciones" id="observaciones"><?php echo $fila_producto["observaciones"] ?></textarea>
      </div>        <div align="center"></div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>5-</strong></div></td>
      <td bgcolor="#0066FF">&nbsp;</td>
      <td><div align="center">
        <input name="telefono_5" type="text"  id="telefono_5" value="<?php echo $fila_producto["telefono_5"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_5" type="text"  id="extension_5" value="<?php echo $fila_producto["extension_5"] ?>"  size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>
        <div align="center">
          <input name="ca_5" type="text" id="ca_5" />
        </div></td><td><div align="center">
          <input name="cr_5" type="text" id="cr_5"  size="5" maxlength="5" readonly="true"/>
        </div></td>
      <td><div align="center">
        <input name="tipo_5" type="text" id="tipo_5" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style27">6-</div></td>
      <td bgcolor="#0066FF">&nbsp;</td>
      <td><div align="center">
        <input name="telefono_6" type="text"  id="telefono_6" value="<?php echo $fila_producto["telefono_6"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_6" type="text"  id="extension_6" value="<?php echo $fila_producto["extension_6"] ?>"  size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>
        <div align="center">
          <input name="ca_6" type="text" id="ca_6" />
        </div></td><td><div align="center">
          <input name="cr_6" type="text" id="cr_6"  size="5" maxlength="5" readonly="true"/>
        </div></td>
      <td><div align="center">
        <input name="tipo_6" type="text" id="tipo_6" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>&nbsp;</td>
      <td colspan="2" bgcolor="#0066FF"><div align="center" class="style27">
        <div align="center">Hora</div>
      </div>        </td>
      <td bgcolor="#0066FF"><div align="center"><span class="style27">Fecha</span></div></td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">7-</div></td>
      <td bgcolor="#0000FF">&nbsp;</td>
      <td><div align="center">
        <input name="telefono_7" type="text"  id="telefono_7" value="<?php echo $fila_producto["telefono_7"] ?>"  size="13" maxlength="13"/>
      </div></td>
      <td><div align="center">
        <input name="extension_7" type="text" id="extension_7" value="<?php echo $fila_producto["extension_7"] ?>" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>
        <div align="center">
          <input name="ca_7" type="text" id="ca_7" />
        </div></td><td><div align="center">
          <input name="cr_7" type="text" id="cr_7" size="5" maxlength="5" readonly="true"/>
        </div></td>
      <td><div align="center">
        <input name="tipo_7" type="text" id="tipo_7" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="center">
        <input name="hora" type="text" value="<?php echo $fila_producto["hora"] ?>" size="6" readonly="true" />
      </div>        <div align="center"></div></td>
      <td><div align="center">
        <input name="fecha" type="text" id="fecha" value="<?php echo $fila_producto["fecha"] ?>" size="8" readonly="true"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">8-</div></td>
      <td bgcolor="#0000CC">&nbsp;</td>
      <td><div align="center">
        <input name="telefono_8" type="text"  id="telefono_8" value="<?php echo $fila_producto["telefono_8"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_8" type="text" id="extension_8" value="<?php echo $fila_producto["extension_8"] ?>"  size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>
        <div align="center">
          <input name="ca_8" type="text" id="ca_8" />
        </div></td><td><div align="center">
          <input name="cr_8" type="text" id="cr_8" size="5" maxlength="5" readonly="true"/>
        </div></td>
      <td><div align="center">
        <input name="tipo_8" type="text" id="tipo_8" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style27"></div></td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">9-</div></td>
      <td bgcolor="#000099">&nbsp;</td>
      <td><div align="center">
        <input name="telefono_9" type="text" id="telefono_9" value="<?php echo $fila_producto["telefono_9"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_9" type="text" id="extension_9" value="<?php echo $fila_producto["extension_9"] ?>" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>
        <div align="center">
          <input name="ca_9" type="text" id="ca_9" />
        </div></td><td><div align="center">
          <input name="cr_9" type="text" id="cr_9" size="5" maxlength="5" readonly="true"/>
        </div></td>
      <td><div align="center">
        <input name="tipo_9" type="text" id="tipo_9" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td bgcolor="#000066"><div align="center" class="style27">10-</div></td>
      <td bgcolor="#000066">&nbsp;</td>
      <td><div align="center">
        <input name="telefono_10" type="text"  id="telefono_10" value="<?php echo $fila_producto["telefono_10"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_10" type="text"  id="extension_10" value="<?php echo $fila_producto["extension_10"] ?>"  size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>
        <div align="center">
          <input name="ca_10" type="text" id="ca_10" readonly="true"/>
        </div></td><td>
          <div align="center">
            <input name="cr_10" type="text" id="cr_10"  size="5" maxlength="5" readonly="true"/>
          </div></td>
      <td>
        <div align="center">
          <input name="tipo_10" type="text" id="tipo_10" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div>
      <div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    
    <tr>
      <td colspan="11"><label></label></td>
    </tr>
    <tr>
      <td colspan="11"><div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="11"><div align="center">
      
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
