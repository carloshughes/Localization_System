<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
include("verificasessionexa.php");


//Consulta que regresa solo los datos del usuario que se acaba de loguear
$rst_productos=mysql_query("SELECT * FROM base_marcar WHERE cuenta  LIKE  '$busqueda'",$conexion);
$fila_producto=mysql_fetch_array($rst_productos);

if ($fila_producto==0)
		{	
			header ("Location:error_buscador.php");
		}
		
$rst_productoss=mysql_query("SELECT * FROM asesores WHERE usuario='".$_COOKIE["usuario_nombre"]."';",$conexion);
$fila_observaciones=mysql_fetch_array($rst_productoss);


//Condicion para mandar los datos del formulario 
if (($_POST["saldo"]!='') && ($_POST["mora"]!=''))
{
mysql_query ("INSERT INTO nueva_base_captura(eslabon, nombre, turno, numero_cte, contrato, cuenta, saldo, mora, ciclo, duracion, producto, cliente, base, centro, telefono_1, extension_1, ca_1, cr_1, tipo_1, status_tel1, telefono_2, extension_2, ca_2, cr_2, tipo_2, status_tel2, telefono_3, extension_3, ca_3, cr_3, tipo_3, status_tel3, telefono_4, extension_4, ca_4, cr_4, tipo_4, status_tel4, telefono_5, extension_5, ca_5, cr_5, tipo_5, status_tel5, telefono_6, extension_6, ca_6, cr_6, tipo_6, status_tel6, telefono_7, extension_7, ca_7, cr_7, tipo_7, status_tel7, telefono_8, extension_8, ca_8, cr_8, tipo_8, status_tel8, telefono_9, extension_9, ca_9, cr_9, tipo_9, status_tel9, telefono_10, extension_10, ca_10, cr_10, tipo_10, status_tel10, email_1, email_2, telefono_nuevo_1, telefono_nuevo_2, observaciones, status_cuenta, status_email, gestion, hora, fecha)"."VALUE ('".$_POST["eslabon"]."','".$_POST["nombre"]."','".$_POST["turno"]."','".$_POST["numero_cte"]."','".$_POST["contrato"]."','".$_POST["cuenta"]."','".$_POST["saldo"]."','".$_POST["mora"]."','".$_POST["ciclo"]."','".$_POST["duracion"]."','".$_POST["producto"]."','".$_POST["cliente"]."','".$_POST["base"]."','".$_POST["centro"]."','".$_POST["telefono_1"]."','".$_POST["extension_1"]."','".$_POST["ca_1"]."','".$_POST["cr_1"]."','".$_POST["tipo_1"]."','".$_POST["status_tel1"]."','".$_POST["telefono_2"]."','".$_POST["extension_2"]."','".$_POST["ca_2"]."','".$_POST["cr_2"]."','".$_POST["tipo_2"]."','".$_POST["status_tel2"]."','".$_POST["telefono_3"]."','".$_POST["extension_3"]."','".$_POST["ca_3"]."','".$_POST["cr_3"]."','".$_POST["tipo_3"]."','".$_POST["status_tel3"]."','".$_POST["telefono_4"]."','".$_POST["extension_4"]."','".$_POST["ca_4"]."','".$_POST["cr_4"]."','".$_POST["tipo_4"]."','".$_POST["status_tel4"]."','".$_POST["telefono_5"]."','".$_POST["extension_5"]."','".$_POST["ca_5"]."','".$_POST["cr_5"]."','".$_POST["tipo_5"]."','".$_POST["status_tel5"]."','".$_POST["telefono_6"]."','".$_POST["extension_6"]."','".$_POST["ca_6"]."','".$_POST["cr_6"]."','".$_POST["tipo_6"]."','".$_POST["status_tel6"]."','".$_POST["telefono_7"]."','".$_POST["extension_7"]."','".$_POST["ca_7"]."','".$_POST["cr_7"]."','".$_POST["tipo_7"]."','".$_POST["status_tel7"]."','".$_POST["telefono_8"]."','".$_POST["extension_8"]."','".$_POST["ca_8"]."','".$_POST["cr_8"]."','".$_POST["tipo_8"]."','".$_POST["status_tel8"]."','".$_POST["telefono_9"]."','".$_POST["extension_9"]."','".$_POST["ca_9"]."','".$_POST["cr_9"]."','".$_POST["tipo_9"]."','".$_POST["status_tel9"]."','".$_POST["telefono_10"]."','".$_POST["extension_10"]."','".$_POST["ca_10"]."','".$_POST["cr_10"]."','".$_POST["tipo_10"]."','".$_POST["status_tel10"]."','".$_POST["email_1"]."','".$_POST["email_2"]."','".$_POST["telefono_nuevo_1"]."','".$_POST["telefono_nuevo_2"]."','".$_POST["observaciones"]."','".$_POST["status_cuenta"]."','".$_POST["status_email"]."','".$_POST["gestion"]."','".$_POST["hora"]."','".$_POST["fecha"]."');",$conexion) or die("Error al grabar un mensaje: ".header ("Location:error_nuevo_1.php"));

//Actualizando la columna de status de la tabla base para saber que cuentas ya estan trabajadas
//mysql_query("UPDATE base_marcar SET status = 'Trabajada' WHERE cuenta=".$fila_producto["cuenta"].";",$conexion);

if (isset ($_POST["pendientes"])){
mysql_query("UPDATE asesores SET observaciones='". $_REQUEST["pendientes"] ."' WHERE usuario ='".$_COOKIE["usuario_nombre"]."';",$conexion); 
}
//ACTUALIZANDO EL CAMPO DE STATUS_CUENTA a PC DE LA TABLA base_captura CUANDO TODO SEA DIFERENTE DE C 
if (($_POST["status_tel1"]=='PC') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){
  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);

}

if (($_POST["status_tel2"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);

}

if (($_POST["status_tel3"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){
  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);
}


if (($_POST["status_tel4"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);
}


if (($_POST["status_tel5"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);
}

if (($_POST["status_tel6"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);
}


if (($_POST["status_tel7"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);
}


if (($_POST["status_tel8"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);
}

if (($_POST["status_tel9"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel10"]!='C')){

  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);
}


if (($_POST["status_tel10"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C')){

  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'POSIBLE CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);
}

//ACTUALIZANDO EL CAMPO DE STATUS_CUENTA a C DE LA TABLA base_captura CUANDO POR LO MENOS EN UN CAMPO DE STATUS_TEL HAYA UNA C
if (($_POST["status_tel1"]=='C') || ($_POST["status_tel2"]=='C') || ($_POST["status_tel3"]=='C') || ($_POST["status_tel4"]=='C') || ($_POST["status_tel5"]=='C') || ($_POST["status_tel6"]=='C') || ($_POST["status_tel7"]=='C') || ($_POST["status_tel8"]=='C') || ($_POST["status_tel9"]=='C') || ($_POST["status_tel10"]=='C')){
  mysql_query("UPDATE nueva_base_captura SET status_cuenta_pre= 'CONTACTO' WHERE cuenta=" .$_POST["cuenta"].";",$conexion);

}

if (($_POST["email_1"]!='') || ($_POST["email_2"]!=''))
{
	mysql_query("UPDATE nueva_base_captura SET status_email = 'POSIBLE CONTACTO' WHERE cuenta =" .$_REQUEST["cuenta"].";", $conexion);
}else
{
	mysql_query("UPDATE nueva_base_captura SET status_email = 'ILOCALIZABLE' WHERE cuenta =" .$_REQUEST["cuenta"].";", $conexion);
}


//REDIRECCIONANDO A LA PAGINA Ejecutivo UNA VEZ REALIZANDO LA CAPTURA DE LA CUENTA
header("Location:buscar_cuentas_1.php");

}
		
				//echo " <script language='JavaScript'>
					//alert('Fallecimiento de TH Y Baja de Telefonos, proporcionar el telefono de CAT')
	               //script>;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PU-<?php echo $fila_observaciones["nombre"];//$_COOKIE["usuario_nombre"];?></title>
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
<style type="text/css">
<!--
.style30 {font-weight: bold}
.style31 {color: #000066}
.style32 {
	color: #000099;
	font-weight: bold;
}
.style33 {color: #000099}
.style41 {
	color: #006600;
	font-weight: bold;
	font-size: 14px;
}
.style43 {
	color: #FF0000;
	font-weight: bold;
}
body,td,th {
	color: #310063;
}
body {
	background-color: #FFFFFF;
}
.style46 {
	color: #EEEEEE;
	font-weight: bold;
}
.style47 {color: #DD0000}
-->
</style>

<SCRIPT LANGUAGE="JavaScript"> 
<!-- Begin
function NewWindow(mypage, myname, w, h, scroll) {
var winl = (screen.width - w) / 2;
var wint = (screen.height - h) / 2;
winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable'
win = window.open(mypage, myname, winprops)
if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
}
//  End -->
</script>
<script language="JavaScript"> 
//Funcion para el cronometro

var horas = "0"
var minutos = "00"
var segundos = "0"

function cronometro()
{
		if ((minutos < 10) && (minutos != "00")){
		bajamin = "0" + minutos
}else{
		bajamin = minutos
	}
		bajasec = (segundos < 10) ? segundos = "0" + segundos : segundos
		document.form1.duracion.value = horas + ":" + bajamin + ":" + bajasec
			if (segundos < 59){
			segundos++
			}else{
			segundos = "0"
			minutos++
			if (minutos > 59){
			minutos = "00"
			horas++
			}
}
window.setTimeout("cronometro()",1000) 
}
</SCRIPT>

<style type="text/css">
<!--
.excel1 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel2 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:#1F497D;
font-size:14.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel3 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel4 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel5 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:white;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
background:#1F497D;
}
.excel6 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:white;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
background:#1F497D;
}
.excel7 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel8 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel9 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel10 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel11 {
padding-top:1px;
padding-right:1px;
padding-left:1px;
color:black;
font-size:11.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.style48 {color: #AA0000}
.style51 {font-size: 18px}
-->
</style>
<script language=""="JavaScript">
    function conMayusculas(field) {
            field.value = field.value.toUpperCase()
}
</script>
</head>
<body onLoad="mueveReloj(); cronometro()">
<div align="center"><img src="imagenes/margen11.jpg" width="1293" height="25"/></div>
<table width="1158" border="0" align="center">
  <tr>
    <td width="535" height="25"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="284" rowspan="2"><div align="center"><img src="imagenes/LOCALIZACION.JPG" width="284" height="144" /></div></td>
    <td width="143" rowspan="2">&nbsp;</td>
    <td width="178" rowspan="2"><div align="center"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
  <tr>
    <td height="25"><div align="center" class="style4 style51">
      <div align="left">Llamadas Predictivas </div>
    </div></td>
  </tr>
</table>
<p align="center"><img src="opcioneS_LB.JPG" width="799" height="564" /></p>
<form id="form1" name="form1" method="post" action="">
  <table width="1001" border="0" align="center">
    <tr>
      <td colspan="9"><p><span class="style4">Bienvenido: </span><span class="style4 style26"><span class="style4"><span class="style15">
          <?php /*Mostrando nombre de Usuario */echo $fila_observaciones["nombre"];?>
      </span></span></span></p></td>
      <td width="269" colspan="6" rowspan="2"><div align="center"></div>
      <div align="center"></div>        <div align="center"><span class="style28"><strong>Pendientes</strong></span></div></td>
    </tr>
    <tr>
      <td height="3" colspan="9"><span class="style4">Eslabon:</span><span class="style15"> <strong><?php echo $_COOKIE["usuario_nombre"];?></strong></span></td>
    </tr>
    

    <tr>
      <td colspan="3" bgcolor="#0033FF"><div align="center"><span class="style28"><strong>N&deg; Cliente</strong></span></div></td>
      <td colspan="4" bgcolor="#0033FF"><div align="center" class="style27">
          <div align="center">Contrato</div>
      </div>
          <div align="center" class="style27"></div></td>
      <td colspan="2" bgcolor="#0033FF"><div align="center" class="style27">Cuenta</div></td>
      <td bgcolor="#0033FF"><div align="center" class="style27">Producto</div></td>
      <td colspan="3" bgcolor="#0033FF"><div align="center" class="style27">Saldo</div></td>
      <td width="269" bgcolor="#0033FF"><div align="center" class="style27">Mora</div></td>
      <td width="269" bgcolor="#0033FF"><div align="center" class="style27">Ciclo</div>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
          <input name="numero_cte" type="text" id="numero_cte" size="15" value="<?php echo $fila_producto["numero_cte"] ?>" readonly="true"/>
      </div></td>
      <td colspan="4">
        <div align="center">
          <input name="contrato" type="text" id="contrato" size="20" value="<?php echo $fila_producto["contrato"] ?> " readonly="true"/>
        </div>
        <div align="center"></div></td>
      <td colspan="2"><div align="center">
          <input name="cuenta" type="text" id="cuenta" size="19" value="<?php echo $fila_producto["cuenta"] ?>" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="producto" type="text" id="producto" size="15" value="<?php echo $fila_producto["producto"] ?>" readonly="true"/>
      </div></td>
      <td colspan="3"><div align="center">
          <!-- <input name="saldo" type="text" id="saldo" value="$" size="9" maxlength="10"/>-->
          <input name="saldo" type="text" onkeypress="mis_datos()" value="$ <?php echo $fila_producto["saldo"] ?>" size="9" maxlength="10" />
      </div></td>
      <td><div align="center">
          <input name="mora" type="text" id="mora" onkeypress="mis_datos()" value="<?php echo $fila_producto["mora"] ?>" size="2" maxlength="2"/>
      </div></td>
      <td><div align="center">
          <input name="ciclo" type="text" id="ciclo" onkeypress="mis_datos()" value="<?php echo $fila_producto["ciclo"] ?>" size="2" maxlength="2"/>
      </div>        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td width="165" colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#0066FF"><div align="center" class="style27">Telefono</div></td>
      <td colspan="2" bgcolor="#0066FF"><div align="center" class="style27">Extensi&oacute;n</div></td>
      <td colspan="2" bgcolor="#0066FF"><div align="center" class="style27">CA</div></td>
      <td width="41" bgcolor="#0066FF"><div align="center" class="style27">CR</div></td>
      <td width="73" bgcolor="#0066FF"><div align="center" class="style27">Tipo</div></td>
      <td><div align="center"></div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span></td>
      <td colspan="2" bgcolor="#0066FF"><div align="center"><span class="style28"><strong>Email</strong></span></div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span></td>
      <td bgcolor="#0000CC"><div align="center" class="style27">1-</div></td>
      <td bgcolor="#FFFFFF"><div align="center">
          <input name="email_1" type="text" id="email_1" onblur="javascript:changeCase(this.form.email_1)" value="<?php echo $fila_producto["email_1"] ?>" size="40"/>
          <span class="style28"></span></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#000066"><div align="center"><strong><span class="style28">1- </span> </strong></div>
          <div align="center"></div></td>
      <td><div align="center">
          <input name="telefono_1" type="text" id="telefono_1"  size="13" maxlength="13" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="extension_1" type="text" id="extension_1"  size="5" maxlength="5" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2"><div align="center">
          <select name="ca_1" id="ca_1" onchange="opcionescr(this.form)" onblur="contactouno(this.form)">
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cr_1" id="cr_1" onchange="opcionestipo(this.form)" >
            <option value=" " selected="selected"></option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_1" id="tipo_1">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel1"  id="status_tel1" size="1" type="hidden"/>
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span><span class="style28"></span></td>
      <td bgcolor="#000099"><div align="center" class="style27">2-</div></td>
      <td bgcolor="#FFFFFF"><div align="center">
          <input name="email_2" type="text" id="email_2" size="40" onblur="javascript:changeCase(this.form.email_2)" value="<?php echo $fila_producto["email_2"] ?>"/>
          <span class="style28"></span></div></td>
    </tr>
    <tr>
      <td width="17" bgcolor="#000099"><div align="center" class="style27">2- </div></td>
      <td width="20" bgcolor="#000099"><span class="style27">
        <input type="checkbox" name="checkbox" value="checkbox" onclick="check(this.form)"/>
      </span></td>
      <td width="78"><div align="center">
          <input name="telefono_2" type="text" disabled="disabled" id="telefono_2" onkeypress="mis_datos()" size="13" maxlength="13"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="extension_2" type="text" disabled="disabled" id="extension_2" onkeypress="mis_datos()" size="5" maxlength="5"/>
      </div></td>
      <td colspan="2"><div align="center">
          <select name="ca_2" id="ca_2" onchange="opcionescr2(this.form)" onblur="contactodos(this.form)" disabled="disabled">
            <option value=" " selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cr_2" id="cr_2" onchange="opcionestipo2(this.form)" disabled="disabled" >
            <option value=" "> </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_2" id="tipo_2" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel2"  id="status_tel2" size="1" type="hidden"/>
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span><span class="style28"></span></td>
      <td colspan="2" bgcolor="#CC0033"><div align="center"><span class="style46">Nuevos Telefonos </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">3-</div></td>
      <td bgcolor="#0000CC"><span class="style27">
        <input type="checkbox" name="checkboxtres" value="checkbox" onclick="checktres(this.form)"/>
      </span></td>
      <td><div align="center">
          <input name="telefono_3" type="text" disabled="disabled" id="telefono_3"  size="13" maxlength="13" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="extension_3" type="text" disabled="disabled" id="extension_3" onkeypress="mis_datos()" size="5" maxlength="5"/>
      </div></td>
      <td colspan="2"><div align="center">
          <select name="ca_3" id="ca_3" onchange="opcionescr3(this.form)" onblur="contactotres(this.form)" disabled="disabled">
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cr_3" id="cr_3" onchange="opcionestipo3(this.form)" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_3" id="tipo_3" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel3"  id="status_tel3" size="1" type="hidden"/>
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span><span class="style28"></span></td>
      <td bgcolor="#0000CC"><div align="center" class="style27">1-</div></td>
      <td>        <div align="center">
        <input name="telefono_nuevo_1" type="text" id="telefono_nuevo_1" onkeypress="mis_datos()" size="13" maxlength="13"/>      
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">4-</div></td>
      <td bgcolor="#0000FF"><span class="style27">
        <input type="checkbox" name="checkboxcuatro" value="checkbox" onclick="checkcuatro(this.form)"/>
      </span></td>
      <td><div align="center">
          <input name="telefono_4" type="text" disabled="disabled" id="telefono_4" size="13" maxlength="13" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="extension_4" type="text" disabled="disabled" id="extension_4" onkeypress="mis_datos()" size="5" maxlength="5"/>
      </div></td>
      <td colspan="2"><div align="center">
          <select name="ca_4" id="ca_4" onchange="opcionescr4(this.form)" onblur="contactocuatro(this.form)" disabled="disabled">
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cr_4" id="cr_4" onchange="opcionestipo4(this.form)"  disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_4" id="tipo_4" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel4"  id="status_tel4" size="1" type="hidden" />
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span><span class="style28"></span></td>
      <td bgcolor="#000099"><div align="center" class="style27">2-</div></td>
      <td>        <div align="center">
        <input name="telefono_nuevo_2" type="text" id="telefono_nuevo_2" onkeypress="mis_datos()" size="13" maxlength="13"/>      
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>5-</strong></div></td>
      <td bgcolor="#0066FF"><span class="style27">
        <input type="checkbox" name="checkboxcinco" value="checkbox" onclick="checkcinco(this.form)"/>
      </span></td>
      <td><div align="center">
          <input name="telefono_5" type="text" disabled="disabled" id="telefono_5" size="13" maxlength="13" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="extension_5" type="text" disabled="disabled" id="extension_5" onkeypress="mis_datos()" size="5" maxlength="5"/>
      </div></td>
      <td colspan="2"><div align="center">
          <select name="ca_5" id="ca_5" onchange="opcionescr5(this.form)" onblur="contactocinco(this.form)" disabled="disabled">
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cr_5" id="cr_5" onchange="opcionestipo5(this.form)" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_5" id="tipo_5" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel5"  id="status_tel5" size="1" type="hidden"/>
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span><span class="style28"></span></td>
      <td colspan="2" bgcolor="#0066FF"><div align="center"><span class="style28"><strong>Observaciones</strong></span></div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style27">6-</div></td>
      <td bgcolor="#0066FF"><span class="style27">
        <input type="checkbox" name="checkboxseis" value="checkbox" onclick="checkseis(this.form)"/>
      </span></td>
      <td><div align="center">
          <input name="telefono_6" type="text" disabled="disabled" id="telefono_6"  size="13" maxlength="13" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="extension_6" type="text" disabled="disabled" id="extension_6" onkeypress="mis_datos()" size="5" maxlength="5"/>
      </div></td>
      <td colspan="2"><div align="center">
          <select name="ca_6" id="ca_6" onchange="opcionescr6(this.form)" onblur="contactoseis(this.form)" disabled="disabled">
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cr_6" id="cr_6" onchange="opcionestipo6(this.form)" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_6" id="tipo_6" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel6"  id="status_tel6" size="1" type="hidden"/>
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span><span class="style28"></span></td>
      <td colspan="2"><div align="center">
        <textarea name="observaciones" cols="50" id="observaciones" onChange="conMayusculas(this)"></textarea>
      </div></td>
    </tr>
    <tr>
      <td height="24" bgcolor="#0000FF"><div align="center" class="style27">7-</div></td>
      <td bgcolor="#0000FF"><span class="style27">
        <input type="checkbox" name="checkboxsiete" value="checkbox" onclick="checksiete(this.form)"/>
      </span></td>
      <td><div align="center">
          <input name="telefono_7" type="text" disabled="disabled" id="telefono_7" size="13" maxlength="13" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="extension_7" type="text" disabled="disabled" id="extension_7" onkeypress="mis_datos()" size="5" maxlength="5"/>
      </div></td>
      <td colspan="2"><div align="center">
          <select name="ca_7" id="ca_7" onchange="opcionescr7(this.form)" onblur="contactosiete(this.form)" disabled="disabled">
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cr_7" id="cr_7" onchange="opcionestipo7(this.form)"  disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_7" id="tipo_7" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel7"  id="status_tel7" size="1" type="hidden"/>
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span><span class="style28"></span></td>
      <td colspan="2"><div align="center"><span class="style4">
        <input name="Directotio" type="button" id="Directotio" value="Directorio" onclick="win()"/>
      </span></div></td>
    </tr>
    <tr>
      <td rowspan="2" bgcolor="#0000CC"><div align="center" class="style27">8-</div></td>
      <td rowspan="2" bgcolor="#0000CC"><span class="style27">
        <input type="checkbox" name="checkboxocho" value="checkbox" onclick="checkocho(this.form)"/>
      </span></td>
      <td rowspan="2"><div align="center">
          <input name="telefono_8" type="text" disabled="disabled" id="telefono_8"  size="13" maxlength="13" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2" rowspan="2"><div align="center">
          <input name="extension_8" type="text" disabled="disabled" id="extension_8" onkeypress="mis_datos()" size="5" maxlength="5"/>
      </div></td>
      <td colspan="2" rowspan="2"><div align="center">
          <select name="ca_8" id="ca_8" onchange="opcionescr8(this.form)" onblur="contactoocho(this.form)" disabled="disabled">
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td rowspan="2"><div align="center">
          <select name="cr_8" id="cr_8" onchange="opcionestipo8(this.form)" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td rowspan="2"><div align="center">
          <select  name="tipo_8" id="tipo_8" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td rowspan="2"><div align="center">
          <input name="status_tel8"  id="status_tel8" size="1" type="hidden" />
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28">
        <input name="centro" id="centro" value="<?php echo $fila_producto["centro"] ?>" size="30" readonly="true" type="hidden"/>
      </span></td>
      <td colspan="2" rowspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">9-</div></td>
      <td bgcolor="#000099"><span class="style27">
        <input type="checkbox" name="checkboxnueve" value="checkbox" onclick="checknueve(this.form)"/>
      </span></td>
      <td><div align="center">
          <input name="telefono_9" type="text" disabled="disabled" id="telefono_9" size="13" maxlength="13" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="extension_9" type="text" disabled="disabled" id="extension_9" onkeypress="mis_datos()" size="5" maxlength="5"/>
      </div></td>
      <td colspan="2"><div align="center">
          <select name="ca_9" id="ca_9" onchange="opcionescr9(this.form)" onblur="contactonueve(this.form)" disabled="disabled">
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cr_9" id="cr_9" onchange="opcionestipo9(this.form)" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_9" id="tipo_9" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel9"  id="status_tel9" size="1" type="hidden" />
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28"></span><span class="style28">
        <input name="cliente" id="cliente" value="<?php echo $fila_producto["cliente"] ?>" size="30" readonly="true" type="hidden"/>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#000066"><div align="center" class="style27">10</div></td>
      <td bgcolor="#000066"><span class="style27">
        <input type="checkbox" name="checkboxdiez" value="checkbox" onclick="checkdiez(this.form)"/>
      </span></td>
      <td><div align="center">
          <input name="telefono_10" type="text" disabled="disabled" id="telefono_10" size="13" maxlength="13" onkeypress="mis_datos()"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="extension_10" type="text" disabled="disabled" id="extension_10" onkeypress="mis_datos()" size="5" maxlength="5"/>
      </div></td>
      <td colspan="2"><div align="center">
          <select name="ca_10" id="ca_10" onchange="opcionescr10(this.form)" onblur="contactodiez(this.form)" disabled="disabled">
            <option value=" "selected="selected">Seleccione una opcion</option>
            <option>NC</option>
            <option>FS</option>
            <option>OC</option>
            <option>CT</option>
            <option>LL</option>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cr_10" id="cr_10" onchange="opcionestipo10(this.form)" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_10" id="tipo_10" disabled="disabled">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center" class="style31">
          <input name="status_tel10"  id="status_tel10" size="1" type="hidden"/>
      </div></td>
      <td colspan="3" bgcolor="#FFFFFF"><span class="style28"></span><span class="style28">
        <input name="base" type="hidden" id="base" value="<?php echo $fila_producto["base"]?>"/>
      </span></td>
    </tr>
    
    
    <tr>
      <td><div align="center" class="style27">
        <input name="nombre"  id="nombre" size="1"  value="<?php /*Mostrando nombre de Usuario */echo $fila_observaciones["nombre"];?>" type="hidden"/>
      </div></td>
      <td><?php $fecha = date ("Y-m-d");?></td>
      <td><div align="center">
        <input name="hora" size="6" readonly="true" value="horaImprimible"/>
      </div></td>
      <td width="36"><input name="fecha"  id="fecha" size="8" value="<?php echo $fecha;?>" readonly="true" type="hidden"/></td>
      <td width="26"><input name="duracion" size="4" readonly="true" /></td>
      <td><input name="eslabon"  id="eslabon" value="<?php echo $fila_observaciones["usuario"] ?>" size="30" readonly="true" type="hidden"/></td>
      <td><input name="gestion"  id="gestion" value="<?php echo $fila_producto["gestion"] ?>" size="30" readonly="true" type="hidden"/></td>
      <td><input name="turno"  id="turno" value="<?php echo $fila_observaciones["turno"] ?>" size="30" readonly="true" type="hidden"/></td>
      <td colspan="5"><div align="center">
        <input name="Guardar"  type="button" value="Guardar" onclick="validar(this.form)"/>
      </div></td>
    </tr>
  </table>
</form>
<p align="center" class="style25"><span class="style19"><span class="style29"><a href="javascript:history.go(-1)">Anterior</a> || <a href="Salirexa">Salir</a></span>
    <label></label>
    <label> </label>
</span></p>
<hr align="center" color="#003399" />
<div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
</body>
</html>
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
		{ if ( obj.value.length < l || l < obj.value.length){alert("ESTE CAMPO DEBE DE CONTENER " + l + " N�MEROS"); obj.
		
		focus(); return false;} }

if ((form1.telefono_1.value=="1111111111") || (form1.telefono_1.value=="1111111111111") || (form1.telefono_1.value=="2222222222") || (form1.telefono_1.value=="2222222222222"))
			{
			alert("El telefono No es Valido");
			form1.telefono_1.focus(); return true;
			}
}
</script>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>


<script>
//funcion de seleccion para los botones CA_1 y CR_1
function opcionescr(form)
{
var select = form.ca_1.options;   
var combo = form.cr_1.options;
var combo1 = form.tipo_1.options;
combo.length = null;
combo1.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel1.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel1.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel1.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel1.value="PC"
	}
	

	if (select[5].selected == true) //realizando la seleccion del piso
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
		var seleccion1 = new Option(" ");
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
var combo1 = form.tipo_2.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel2.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel2.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel2.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel2.value="PC"
	}
	
	if (select[5].selected == true) //realizando la seleccion del piso
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
//Asignando el tipo de telefono  
function opcionestipo2(form)
{
var select = form.cr_2.options;
var combo = form.tipo_2.options;
combo.length = null;

	if (select[0].selected == true)
	{
		var seleccion1 = new Option(" ");
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
var combo1 = form.tipo_3.options;
combo.length = null;
combo1.length = null;	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel3.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel3.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel3.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel3.value="PC"
	}
	

	
	if (select[5].selected == true) //realizando la seleccion del piso
	{	

		var seleccionar1 = new Option("Seleccione una opcion");
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
//Asignando el tipo de telefono  
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
var combo1 = form.tipo_4.options;
combo.length = null;
combo1.length = null;
	
//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel4.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel4.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel4.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel4.value="PC"
	}
	

	
	if (select[5].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion");
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

//Asignando el tipo de telefono 
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
var combo1 = form.tipo_5.options;
combo.length = null;
combo1.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel5.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel5.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel5.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel5.value="PC"
	}
	

	if (select[5].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion");
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

//Asignando el tipo de telefono  
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
var combo1 = form.tipo_6.options;
combo.length = null;
combo1.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel6.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel6.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel6.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel6.value="PC"
	}
	

	if (select[5].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion");
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

//Asignando el tipo de telefono 
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
var combo1 = form.tipo_7.options;
combo.length = null;
combo1.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel7.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel7.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel7.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel7.value="PC"
	}

	
	if (select[5].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion");
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


//Asignando el tipo de telefono 
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
var combo1 = form.tipo_8.options;
combo.length = null;
combo1.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel8.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel8.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel8.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel8.value="PC"
	}

	
	if (select[5].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion");
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


//Asignando el tipo de telefono  
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
var combo1 = form.tipo_9.options;
combo.length = null;
combo1.length = null;
	
	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel9.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel9.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel9.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel9.value="PC"
	}
	


	if (select[5].selected == true) //realizando la seleccion del piso
	{	
		var seleccionar1 = new Option("Seleccione una opcion");
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

//Asignando el tipo de telefono  
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
var combo1 = form.tipo_10.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel10.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel10.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel10.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel10.value="PC"
	}
	

	
	if (select[5].selected == true) //realizando la seleccion del piso
	{	
		
		var seleccionar1 = new Option("Seleccione una opcion");
		var seleccionar2 = new Option("TH");
		var seleccionar3 = new Option("TERCERO");
		var seleccionar4 = new Option("FAMILIAR");
		combo[0]=seleccionar1;
		combo[1]=seleccionar2;
		combo[2]=seleccionar3;
		combo[3]=seleccionar4;
		document.form1.status_tel10.value="C"
	}

}

//Asignando el tipo de telefono  
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

<SCRIPT LANGUAGE="JavaScript">

//Funcion de convierte las letras MAYUSCULAS EN letras minusculas en los campos Email_1 y Email_2
function changeCase(frmObj) {
var index;
var tmpStr;
var tmpChar;
var preString;
var postString;
var strlen;
tmpStr = frmObj.value.toLowerCase();
strLen = tmpStr.length;
if (strLen > 0)  {
for (index = 0; index < strLen; index++)  {
if (index == 0)  {
tmpChar = tmpStr.substring(0,0).toUpperCase();
postString = tmpStr.substring(0,strLen);
tmpStr = tmpChar + postString;
}
else {
tmpChar = tmpStr.substring(index, index+0);
if (tmpChar == " " && index < (strLen-0))  {
tmpChar = tmpStr.substring(index+0, index+1).toUpperCase();
preString = tmpStr.substring(0, index+0);
postString = tmpStr.substring(index+1,strLen);
tmpStr = preString + tmpChar + postString;
         }
      }
   }
}
frmObj.value = tmpStr;
}

</script>

<script>
//Funcion que valida el formulario antes de ser enviado a la base de datos 
function validar(form1)
{

//validando que coloquen el saldo 
if (form1.saldo.value.length==" ")
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
/*if (form1.ciclo.value.length==" ")
		{	
			alert("Por favor, Introdusca el Ciclo");
			form1.ciclo.focus(); return false;
		}
*/
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
			alert("El Telefono 1, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_1.focus(); return true;
			}
			
		}
		

//validando que el telefono 2 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_2.value.length!=0) && (form1.telefono_2.disabled==false)){
			
			if (form1.telefono_2.value.length<10){
			alert("El Telefono 2, NO puede ser menor de 10 numeros");
			form1.telefono_2.focus(); return true;
			}
			
			if ((form1.telefono_2.value.length==11) || (form1.telefono_2.value.length==12)){
			alert("El Telefono 2, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_2.focus(); return true;
			}
		}

//validando que el telefono 3 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_3.value.length!=0) && (form1.telefono_3.disabled==false)){
			
			if (form1.telefono_3.value.length<10){
			alert("El Telefono 3, NO puede ser menor de 10 numeros");
			form1.telefono_3.focus(); return true;
			}
			
			if ((form1.telefono_3.value.length==11) || (form1.telefono_3.value.length==12)){
			alert("El Telefono 3, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_3.focus(); return true;
			}

		}

//validando que el telefono 4 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_4.value.length!=0) && (form1.telefono_4.disabled==false)){

			if (form1.telefono_4.value.length<10){
			alert("El Telefono 4, NO puede ser menor de 10 numeros");
			form1.telefono_4.focus(); return true;
			}
			
			if ((form1.telefono_4.value.length==11) || (form1.telefono_4.value.length==12)){
			alert("El Telefono 4, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_4.focus(); return true;
			}

		}
		
//validando que el telefono 5 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_5.value.length!=0) && (form1.telefono_5.disabled==false)){
			
			if (form1.telefono_5.value.length<10){
			alert("El Telefono 5, NO puede ser menor de 10 numeros");
			form1.telefono_5.focus(); return true;
			}
			
			if ((form1.telefono_5.value.length==11) || (form1.telefono_5.value.length==12)){
			alert("El Telefono 5, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_5.focus(); return true;
			}

		}

//validando que el telefono 4 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_6.value.length!=0) && (form1.telefono_6.disabled==false)){
			
			if (form1.telefono_6.value.length<10){
			alert("El Telefono 6, NO puede ser menor de 10 numeros");
			form1.telefono_6.focus(); return true;
			}
			
			if ((form1.telefono_6.value.length==11) || (form1.telefono_6.value.length==12)){
			alert("El Telefono 6, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_6.focus(); return true;
			}

		}

//validando que el telefono 7 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_7.value.length!=0) && (form1.telefono_7.disabled==false)){

			if (form1.telefono_7.value.length<10){
			alert("El Telefono 7, NO puede ser menor de 10 numeros");
			form1.telefono_7.focus(); return true;
			}
			
			if ((form1.telefono_7.value.length==11) || (form1.telefono_7.value.length==12)){
			alert("El Telefono 7, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_7.focus(); return true;
			}

		}

//validando que el telefono 8 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_8.value.length!=0) && (form1.telefono_8.disabled==false)){

			if (form1.telefono_8.value.length<10){
			alert("El Telefono 8, NO puede ser menor de 10 numeros");
			form1.telefono_8.focus(); return true;
			}
			
			if ((form1.telefono_8.value.length==11) || (form1.telefono_8.value.length==12)){
			alert("El Telefono 8, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_8.focus(); return true;
			}


		}
		
//validando que el telefono 9 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_9.value.length!=0) && (form1.telefono_9.disabled==false)){
		
			if (form1.telefono_9.value.length<10){
			alert("El Telefono 9, NO puede ser menor de 10 numeros");
			form1.telefono_9.focus(); return true;
			}
			
			if ((form1.telefono_9.value.length==11) || (form1.telefono_9.value.length==12)){
			alert("El Telefono 9, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_9.focus(); return true;
			}

		}

//validando que el telefono 10 no sea menor que 13 siempre y cuando este deshabilitado
if ((form1.telefono_10.value.length!=0) && (form1.telefono_10.disabled==false)){

			if (form1.telefono_10.value.length<10){
			alert("El Telefono 10, NO puede ser menor de 10 numeros");
			form1.telefono_10.focus(); return true;
			}
			
			if ((form1.telefono_10.value.length==11) || (form1.telefono_10.value.length==12)){
			alert("El Telefono 10, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_10.focus(); return true;
			}
	
		}		


//validando que el telefono nuevo 1 no sea menor que 13

if (form1.telefono_nuevo_1.value.length!=0){
			if (form1.telefono_nuevo_1.value.length<10){
			alert("El Telefono Nuevo 1, NO puede ser menor de 10 numeros");
			form1.telefono_nuevo_1.focus(); return true;
			}
			
			if ((form1.telefono_nuevo_1.value.length==11) || (form1.telefono_nuevo_1.value.length==12)){
			alert("El Telefono Nuevo 1, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_nuevo_1.focus(); return true;
			}
			
		}

//validando que el telefono nuevo 2 no sea menor que 13

if (form1.telefono_nuevo_2.value.length!=0){
			if (form1.telefono_nuevo_2.value.length<10){
			alert("El Telefono Nuevo 2, NO puede ser menor de 10 numeros");
			form1.telefono_nuevo_2.focus(); return true;
			}
			
			if ((form1.telefono_nuevo_2.value.length==11) || (form1.telefono_nuevo_2.value.length==12)){
			alert("El Telefono Nuevo 2, NO es valido deben ser numeros de 10 � 13");
			form1.telefono_nuevo_2.focus(); return true;
			}
			
		}


//VALIDACIONES DE LOS CAMPOS CA 

//validando que se tipifique el CA_1
if (form1.ca_1.options[form1.ca_1.selectedIndex].value==" "){
		    alert("Por favor, tipifique el telefono 1");
		    form1.ca_1.focus(); return false;
		    }		
			
//validando que el telefono 2 este deshabilitado y en 0
if ((form1.telefono_2.value.length==0) && (form1.telefono_2.disabled==false))
	{
	alert ("El telefono 2 no puede estar vacio")
			form1.telefono_2.focus();return true;
	}

//validando que se tipifique el CA_2 si esta habilitado		
if ((form1.ca_2.disabled==false) && (form1.ca_2.options[form1.ca_2.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 2");
			form1.ca_2.focus(); return false;
			}
			
//validando que el telefono 3 este deshabilitado y en 0
if ((form1.telefono_3.value.length==0) && (form1.telefono_3.disabled==false))
	{
	alert ("El telefono 3 no puede estar vacio")
			form1.telefono_3.focus();return true;
	}

//validando que se tipifique el CA_3 si esta habilitado			
if ((form1.ca_3.disabled==false) && (form1.ca_3.options[form1.ca_3.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 3");
			form1.ca_3.focus(); return false;
			}

//validando que el telefono 4 no este en 0 si esta deshabilitado 
if ((form1.telefono_4.value.length==0) && (form1.telefono_4.disabled==false))
	{
	alert ("El telefono 4 no puede estar vacio")
			form1.telefono_4.focus();return true;
	}
	
//validando que se tipifique el CA_4 si esta habilitado
if ((form1.ca_4.disabled==false) && (form1.ca_4.options[form1.ca_4.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 4");
			form1.ca_4.focus(); return false;
			}

//validando que el telefono 5 no este en 0 si esta deshabilitado 
if ((form1.telefono_5.value.length==0) && (form1.telefono_5.disabled==false))
	{
	alert ("El telefono 5 no puede estar vacio")
			form1.telefono_5.focus();return true;
	}
	
//validando que se tipifique el CA_5 si esta habilitado
if ((form1.ca_5.disabled==false) && (form1.ca_5.options[form1.ca_5.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 5");
			form1.ca_5.focus(); return false;
			}

//validando que el telefono 6 no este en 0 si esta deshabilitado 
if ((form1.telefono_6.value.length==0) && (form1.telefono_6.disabled==false))
	{
	alert ("El telefono 6 no puede estar vacio")
			form1.telefono_6.focus();return true;
	}
	
//validando que se tipifique el CA_6 si esta habilitado
if ((form1.ca_6.disabled==false) && (form1.ca_6.options[form1.ca_6.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 6");
			form1.ca_6.focus(); return false;
			}

//validando que el telefono 7 no este en 0 si esta deshabilitado 
if ((form1.telefono_7.value.length==0) && (form1.telefono_7.disabled==false))
	{
	alert ("El telefono 7 no puede estar vacio")
			form1.telefono_7.focus();return true;
	}

//validando que se tipifique el CA_7 si esta habilitado
if ((form1.ca_7.disabled==false) && (form1.ca_7.options[form1.ca_7.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 7");
			form1.ca_7.focus(); return false;
			}


//validando que el telefono 8 no este en 0 si esta deshabilitado 
if ((form1.telefono_8.value.length==0) && (form1.telefono_8.disabled==false))
	{
	alert ("El telefono 8 no puede estar vacio")
			form1.telefono_8.focus();return true;
	}

//validando que se tipifique el CA_8 si esta habilitado
if ((form1.ca_8.disabled==false) && (form1.ca_8.options[form1.ca_8.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 8");
			form1.ca_8.focus(); return false;
			}

//validando que el telefono 9 no este en 0 si esta deshabilitado 
if ((form1.telefono_9.value.length==0) && (form1.telefono_9.disabled==false))
	{
	alert ("El telefono 9 no puede estar vacio")
			form1.telefono_9.focus();return true;
	}

//validando que se tipifique el CA_9 si esta habilitado
if ((form1.ca_9.disabled==false) && (form1.ca_9.options[form1.ca_9.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 9");
			form1.ca_9.focus(); return false;
			}

//validando que el telefono 10 no este en 0 si esta deshabilitado 
if ((form1.telefono_10.value.length==0) && (form1.telefono_10.disabled==false))
	{
	alert ("El telefono 10 no puede estar vacio")
			form1.telefono_10.focus();return true;
	}

//validando que se tipifique el CA_10 si esta habilitado
if ((form1.ca_10.disabled==false) && (form1.ca_10.options[form1.ca_10.selectedIndex].value==" ")){
			alert ("Por favor, tipifique el telefono 10");
			form1.ca_10.focus(); return false;
			}


//TIPIFICANDO LOS STATUS DE LOS TELEFONOS A IL CUANDO NO ESTEN  VACIOS LOS CAMPOS DE TELEFONOS DEL 2 AL 10 

//tipificando el status del telefono a IL si no hay nada en el campo telefono 2
if (form1.telefono_2.value==0){document.form1.status_tel2.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 3
if (form1.telefono_3.value==0){document.form1.status_tel3.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 4
if (form1.telefono_4.value==0){document.form1.status_tel4.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 5
if (form1.telefono_5.value==0){document.form1.status_tel5.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 6
if (form1.telefono_6.value==0){document.form1.status_tel6.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 7
if (form1.telefono_7.value==0){document.form1.status_tel7.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 8
if (form1.telefono_8.value==0){document.form1.status_tel8.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 9
if (form1.telefono_9.value==0){document.form1.status_tel9.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 10
if (form1.telefono_10.value==0){document.form1.status_tel10.value="IL"}

//Mensaje para el Usuario una vez que haya completado el formulario de manera Exitosa
if (confirm('�Estas seguro de enviar esta informaci�n?')){ 
	   alert("Gesti�n realizada exitosamente");
	   document.form1.submit() 
    } 


} //FIN DE LA FUNCION VALIDAR 



//VALIDANDO LOS CHECKBOXS CUANDO ESTAN SELECCIONADOS

//validando para el CheckBox  si esta seleccionado deshabilita a telefono_2, extencion_2, ca_2, cr_2 y tipo_2
function check(form)
{
	if (form1.checkbox.checked==true){
	document.form1.telefono_2.disabled=false
	document.form1.extension_2.disabled=false
	document.form1.ca_2.disabled=false
	document.form1.cr_2.disabled=false
	document.form1.tipo_2.disabled=false
	}else
	{
	document.form1.telefono_2.disabled=true
	document.form1.extension_2.disabled=true
	document.form1.ca_2.disabled=true
	document.form1.cr_2.disabled=true
	document.form1.tipo_2.disabled=true
	document.form1.telefono_2.value=" ";
	document.form1.extension_2.value=" ";
	document.form1.ca_2.value=" ";
	document.form1.cr_2.value=" ";
	document.form1.tipo_2.value=" ";
	document.form1.status_tel2.value=" ";
	}
}

//validando para el CheckBox 3 si esta seleccionado deshabilita a telefono_3, extencion_3, ca_3, cr_3 y tipo_3
function checktres(form)
{
	if (form1.checkboxtres.checked==true){
	document.form1.telefono_3.disabled=false
	document.form1.extension_3.disabled=false
	document.form1.ca_3.disabled=false
	document.form1.cr_3.disabled=false
	document.form1.tipo_3.disabled=false
	}else
	{
	document.form1.telefono_3.disabled=true
	document.form1.extension_3.disabled=true
	document.form1.ca_3.disabled=true
	document.form1.cr_3.disabled=true
	document.form1.tipo_3.disabled=true
	document.form1.telefono_3.value=" ";
	document.form1.extension_3.value=" ";
	document.form1.ca_3.value=" ";
	document.form1.cr_3.value=" ";
	document.form1.tipo_3.value=" ";
	document.form1.status_tel3.value=" ";
	}
}

//validando para el CheckBox 4 si esta seleccionado deshabilita a telefono_4, extencion_4, ca_4, cr_4 y tipo_4
function checkcuatro(form)
{
	if (form1.checkboxcuatro.checked==true){
	document.form1.telefono_4.disabled=false
	document.form1.extension_4.disabled=false
	document.form1.ca_4.disabled=false
	document.form1.cr_4.disabled=false
	document.form1.tipo_4.disabled=false
	}else
	{
	document.form1.telefono_4.disabled=true
	document.form1.extension_4.disabled=true
	document.form1.ca_4.disabled=true
	document.form1.cr_4.disabled=true
	document.form1.tipo_4.disabled=true
	document.form1.telefono_4.value=" ";
	document.form1.extension_4.value=" ";
	document.form1.ca_4.value=" ";
	document.form1.cr_4.value=" ";
	document.form1.tipo_4.value=" ";
	document.form1.status_tel4.value=" ";
	}
}

//validando para el CheckBox 5 si esta seleccionado deshabilita a telefono_5, extencion_5, ca_5, cr_5 y tipo_5
function checkcinco(form)
{
	if (form1.checkboxcinco.checked==true){
	document.form1.telefono_5.disabled=false
	document.form1.extension_5.disabled=false
	document.form1.ca_5.disabled=false
	document.form1.cr_5.disabled=false
	document.form1.tipo_5.disabled=false
	}else
	{
	document.form1.telefono_5.disabled=true
	document.form1.extension_5.disabled=true
	document.form1.ca_5.disabled=true
	document.form1.cr_5.disabled=true
	document.form1.tipo_5.disabled=true
	document.form1.telefono_5.value=" ";
	document.form1.extension_5.value=" ";
	document.form1.ca_5.value=" ";
	document.form1.cr_5.value=" ";
	document.form1.tipo_5.value=" ";
	document.form1.status_tel5.value=" ";
	}
}

//validando para el CheckBox 6 si esta seleccionado deshabilita a telefono_6, extencion_6, ca_6, cr_6 y tipo_6
function checkseis(form)
{
	if (form1.checkboxseis.checked==true){
	document.form1.telefono_6.disabled=false
	document.form1.extension_6.disabled=false
	document.form1.ca_6.disabled=false
	document.form1.cr_6.disabled=false
	document.form1.tipo_6.disabled=false
	}else
	{
	document.form1.telefono_6.disabled=true
	document.form1.extension_6.disabled=true
	document.form1.ca_6.disabled=true
	document.form1.cr_6.disabled=true
	document.form1.tipo_6.disabled=true
	document.form1.telefono_6.value=" ";
	document.form1.extension_6.value=" ";
	document.form1.ca_6.value=" ";
	document.form1.cr_6.value=" ";
	document.form1.tipo_6.value=" ";
	document.form1.status_tel6.value=" ";
	}
}

//validando para el CheckBox 7 si esta seleccionado deshabilita a telefono_7, extencion_7, ca_7, cr_7 y tipo_7
function checksiete(form)
{
	if (form1.checkboxsiete.checked==true){
	document.form1.telefono_7.disabled=false
	document.form1.extension_7.disabled=false
	document.form1.ca_7.disabled=false
	document.form1.cr_7.disabled=false
	document.form1.tipo_7.disabled=false
	}else
	{
	document.form1.telefono_7.disabled=true
	document.form1.extension_7.disabled=true
	document.form1.ca_7.disabled=true
	document.form1.cr_7.disabled=true
	document.form1.tipo_7.disabled=true
	document.form1.telefono_7.value=" ";
	document.form1.extension_7.value=" ";
	document.form1.ca_7.value=" ";
	document.form1.cr_7.value=" ";
	document.form1.tipo_7.value=" ";
	document.form1.status_tel7.value=" ";
	}
}

//validando para el CheckBox 8 si esta seleccionado deshabilita a telefono_8, extencion_8, ca_8, cr_8 y tipo_8
function checkocho(form)
{
	if (form1.checkboxocho.checked==true){
	document.form1.telefono_8.disabled=false
	document.form1.extension_8.disabled=false
	document.form1.ca_8.disabled=false
	document.form1.cr_8.disabled=false
	document.form1.tipo_8.disabled=false
	}else
	{
	document.form1.telefono_8.disabled=true
	document.form1.extension_8.disabled=true
	document.form1.ca_8.disabled=true
	document.form1.cr_8.disabled=true
	document.form1.tipo_8.disabled=true
	document.form1.telefono_8.value=" ";
	document.form1.extension_8.value=" ";
	document.form1.ca_8.value=" ";
	document.form1.cr_8.value=" ";
	document.form1.tipo_8.value=" ";
	document.form1.status_tel8.value=" ";
	}
}

//validando para el CheckBox 9 si esta seleccionado deshabilita a telefono_9, extencion_9, ca_9, cr_9 y tipo_9
function checknueve(form)
{
	if (form1.checkboxnueve.checked==true){
	document.form1.telefono_9.disabled=false
	document.form1.extension_9.disabled=false
	document.form1.ca_9.disabled=false
	document.form1.cr_9.disabled=false
	document.form1.tipo_9.disabled=false
	}else
	{
	document.form1.telefono_9.disabled=true
	document.form1.extension_9.disabled=true
	document.form1.ca_9.disabled=true
	document.form1.cr_9.disabled=true
	document.form1.tipo_9.disabled=true
	document.form1.telefono_9.value=" ";
	document.form1.extension_9.value=" ";
	document.form1.ca_9.value=" ";
	document.form1.cr_9.value=" ";
	document.form1.tipo_9.value=" ";
	document.form1.status_tel9.value=" ";
	}
}

//validando para el CheckBox 10 si esta seleccionado deshabilita a telefono_10, extencion_10, ca_10, cr_10 y tipo_10
function checkdiez(form)
{
	if (form1.checkboxdiez.checked==true){
	document.form1.telefono_10.disabled=false
	document.form1.extension_10.disabled=false
	document.form1.ca_10.disabled=false
	document.form1.cr_10.disabled=false
	document.form1.tipo_10.disabled=false
	}else
	{
	document.form1.telefono_10.disabled=true
	document.form1.extension_10.disabled=true
	document.form1.ca_10.disabled=true
	document.form1.cr_10.disabled=true
	document.form1.tipo_10.disabled=true
	document.form1.telefono_10.value=" ";
	document.form1.extension_10.value=" ";
	document.form1.ca_10.value=" ";
	document.form1.cr_10.value=" ";
	document.form1.tipo_10.value=" ";
	document.form1.status_tel10.value=" ";
	}
}


//validando si la cuenta esta sucursalizada

function checksucursalizada(form)
{
	if (form1.sucursalizada.options[form1.sucursalizada.selectedIndex].value=="NO"){

	document.form1.nombre_ref_1.disabled=false
	document.form1.telefono_ref_1.disabled=false
	document.form1.nombre_ref_2.disabled=false
	document.form1.telefono_ref_2.disabled=false
	document.form1.nombre_ref_3.disabled=false
	document.form1.telefono_ref_3.disabled=false
	document.form1.nombre_beneficiario.disabled=false
	document.form1.telefono_beneficiario.disabled=false
	document.form1.domicilios_alternos_1.disabled=false
	document.form1.domicilios_alternos_2.disabled=false
	}else
	{
	document.form1.nombre_ref_1.disabled=true 
	document.form1.telefono_ref_1.disabled=true 
	document.form1.nombre_ref_2.disabled= true
	document.form1.telefono_ref_2.disabled=true 
	document.form1.nombre_ref_3.disabled=true 
	document.form1.telefono_ref_3.disabled=true 
	document.form1.nombre_beneficiario.disabled= true 
	document.form1.telefono_beneficiario.disabled=true 
	document.form1.domicilios_alternos_1.disabled=true 
	document.form1.domicilios_alternos_2.disabled=true 
	}
}
//FUNCIONES PARA EVALUAR SI LOS CAMPOS CR PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista

//FUNCION  PARA EVALUAR EL CAMPO CR_1 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactouno (form)
{
	//validando que se Seleccione un tipo de CR_1 cuando el campo CA_1 sea igual a LL
	if ((form1.ca_1.value.length="LL") && (form1.cr_1.options[form1.cr_1.selectedIndex].value=="Seleccione una opcion")) 
	{
	alert("Seleccione un tipo de contacto en el Telefono 1");
	form1.cr_1.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_2 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactodos(form)
{
	//validando que se Seleccione un tipo de CR_2 cuando el campo CA_2 sea igual a LL
	if ((form1.ca_2.value.length="LL") && (form1.cr_2.options[form1.cr_2.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 2");
		form1.cr_2.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_3 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactotres(form)
{
	//validando que se Seleccione un tipo de CR_3 cuando el campo CA_3 sea igual a LL
	if ((form1.ca_3.value.length="LL") && (form1.cr_3.options[form1.cr_3.selectedIndex].value=="Seleccione una opcion")){
		alert("Seleccione un tipo de contacto en el Telefono 3");
		form1.cr_3.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_4 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactocuatro(form)
{

	//validando que se Seleccione un tipo de CR_4 cuando el campo CA_4 sea igual a LL
	if ((form1.ca_4.value.length="LL") && (form1.cr_4.options[form1.cr_4.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 4");
		form1.cr_4.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_5 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactocinco(form)
{
	//validando que se Seleccione un tipo de CR_5 cuando el campo CA_5 sea igual a LL
	if ((form1.ca_5.value.length="LL") && (form1.cr_5.options[form1.cr_5.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 5");
		form1.cr_5.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_6 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactoseis(form)
{
	//validando que se Seleccione un tipo de CR_6 cuando el campo CA_6 sea igual a LL
	if ((form1.ca_6.value.length="LL") && (form1.cr_6.options[form1.cr_6.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 6");
		form1.cr_6.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_7 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactosiete(form)
{
	//validando que se Seleccione un tipo de CR_7 cuando el campo CA_7 sea igual a LL
	if ((form1.ca_7.value.length="LL") && (form1.cr_7.options[form1.cr_7.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 7");
		form1.cr_7.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_8 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactoocho(form)
{
	//validando que se Seleccione un tipo de CR_8 cuando el campo CA_8 sea igual a LL
	if ((form1.ca_8.value.length="LL") && (form1.cr_8.options[form1.cr_8.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 8");
		form1.cr_8.focus(); return false;
	}
}

//FUNCION  PARA EVALUAR EL CAMPO CR_9 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactonueve(form)
{
	//validando que se Seleccione un tipo de CR_9 cuando el campo CA_9 sea igual a LL
	if ((form1.ca_9.value.length="LL") && (form1.cr_9.options[form1.cr_9.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 9");
		form1.cr_9.focus(); return false;
	}
}
//FUNCION  PARA EVALUAR EL CAMPO CR_10 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactodiez(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.ca_10.value.length="LL") && (form1.cr_10.options[form1.cr_10.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 10");
		form1.cr_10.focus(); return false;
	}	
}


</script>

<SCRIPT LANGUAGE="JavaScript"> 
 
<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
 
<!-- Begin
function win() {
msg=window.open("","msg","height=5000,width=2000,left=80,top=80");
msg.document.write("<html><title>Directorio Localizaci�n</title>");
msg.document.write("<body bgcolor='white' onblur=window.close()>");
msg.document.write("<center><img src='imagenes/directorio.JPG' onblur=window.close()> </center>");
msg.document.write("</body></html><p>");
 
// If you just want to open an existing HTML page in the 
// new window, you can replace win()'s coding above with:
// window.open("page.html","","height=200,width=200,left=80,top=80");
 
}


function fullwin() {

window.open("http://172.18.76.219/sistema_de_localizacion/fotos.php","","fullscreen,scrollbars")
 
}


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
function opciones_sucursalizada(form)
{
	if (form1.sucursalizada.options[form1.sucursalizada.selectedIndex].value=="NO") 
	{			
		alert("Si la cuenta, NO esta Sucursalizada, No olvides en consultar el Expediente y capturar las Referencias, Beneficiarios y Domicilios Alternos");
		form1.sucursalizada.focus(); return false;
	}
}
