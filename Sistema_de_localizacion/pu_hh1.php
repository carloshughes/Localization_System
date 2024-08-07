<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
//include("verificasessionexa.php");

//Consulta que regresa solo los datos del usuario que se acaba de loguear

$rst_productos=mysql_query("SELECT * FROM base_telefonos_hh WHERE numero_cte =".$_REQUEST["cod"].";",$conexion);
$fila_producto=mysql_fetch_array($rst_productos);


//Condicion para mandar los datos del formulario 
if (($_POST["eslabon"]!='') && ($_POST["rfc"]!=''))
{
mysql_query ("INSERT INTO base_captura_hh (eslabon, nombre, numero_cte, rfc, nombre_cliente, telefono_1, extension_1, ca_1, cr_1, tipo_1, status_tel1, telefono_2, extension_2, ca_2, cr_2, tipo_2, status_tel2, telefono_3, extension_3, ca_3, cr_3, tipo_3, status_tel3, telefono_4, extension_4, ca_4, cr_4, tipo_4, status_tel4, 
telefono_5, extension_5, ca_5, cr_5, tipo_5, status_tel5, telefono_6, extension_6, ca_6, cr_6, tipo_6, status_tel6, telefono_7, extension_7, ca_7, cr_7, tipo_7, status_tel7, telefono_8, extension_8, ca_8, cr_8, tipo_8, status_tel8, telefono_9, extension_9, ca_9, cr_9, tipo_9, status_tel9, telefono_10, extension_10, ca_10, cr_10, tipo_10, status_tel10, telefono_11, extension_11, ca_11, cr_11, tipo_11, status_tel11, telefono_12, extension_12, ca_12, cr_12, tipo_12, status_tel12, 
telefono_13, extension_13, ca_13, cr_13, tipo_13, status_tel13, telefono_14, extension_14, ca_14, cr_14, tipo_14, status_tel14, telefono_15, extension_15, ca_15, cr_15, tipo_15, status_tel15, nuevo_telefono_1, nuevo_extension_1, nuevo_ca_1, nuevo_cr_1, nuevo_tipo_1, nuevo_status_tel1, nuevo_telefono_2, nuevo_extension_2, nuevo_ca_2, nuevo_cr_2, nuevo_tipo_2, nuevo_status_tel2, nuevo_telefono_3, nuevo_extension_3, nuevo_ca_3, nuevo_cr_3, nuevo_tipo_3, nuevo_status_tel3, 
nuevo_telefono_4, nuevo_extension_4, nuevo_ca_4, nuevo_cr_4, nuevo_tipo_4, nuevo_status_tel4, nuevo_telefono_5, nuevo_extension_5, nuevo_ca_5, nuevo_cr_5, nuevo_tipo_5, nuevo_status_tel5, email_1, email_2, observaciones, hora, fecha)"." VALUE ('".$_POST["eslabon"]."','".$_POST["nombre"]."','".$_POST["numero_cte"]."' , '".$_POST["rfc"]."','".$_POST["nombre_cliente"]."','".$_POST["telefono_1"]."','".$_POST["extension_1"]."','".$_POST["ca_1"]."','".$_POST["cr_1"]."','".$_POST["tipo_1"]."','".$_POST["status_tel1"]."','".$_POST["telefono_2"]."','".$_POST["extension_2"]."','".$_POST["ca_2"]."','".$_POST["cr_2"]."','".$_POST["tipo_2"]."','".$_POST["status_tel2"]."','".$_POST["telefono_3"]."','".$_POST["extension_3"]."','".$_POST["ca_3"]."','".$_POST["cr_3"]."','".$_POST["tipo_3"]."','".$_POST["status_tel3"]."',
'".$_POST["telefono_4"]."','".$_POST["extension_4"]."','".$_POST["ca_4"]."','".$_POST["cr_4"]."','".$_POST["tipo_4"]."','".$_POST["status_tel4"]."','".$_POST["telefono_5"]."','".$_POST["extension_5"]."','".$_POST["ca_5"]."','".$_POST["cr_5"]."','".$_POST["tipo_5"]."','".$_POST["status_tel5"]."','".$_POST["telefono_6"]."','".$_POST["extension_6"]."','".$_POST["ca_6"]."','".$_POST["cr_6"]."','".$_POST["tipo_6"]."','".$_POST["status_tel6"]."','".$_POST["telefono_7"]."','".$_POST["extension_7"]."','".$_POST["ca_7"]."','".$_POST["cr_7"]."','".$_POST["tipo_7"]."','".$_POST["status_tel7"]."','".$_POST["telefono_8"]."','".$_POST["extension_8"]."','".$_POST["ca_8"]."','".$_POST["cr_8"]."','".$_POST["tipo_8"]."','".$_POST["status_tel8"]."','".$_POST["telefono_9"]."','".$_POST["extension_9"]."','".$_POST["ca_9"]."','".$_POST["cr_9"]."','".$_POST["tipo_9"]."','".$_POST["status_tel9"]."','".$_POST["telefono_10"]."','".$_POST["extension_10"]."','".$_POST["ca_10"]."','".$_POST["cr_10"]."','".$_POST["tipo_10"]."','".$_POST["status_tel10"]."','".$_POST["telefono_11"]."','".$_POST["extension_11"]."','".$_POST["ca_11"]."','".$_POST["cr_11"]."','".$_POST["tipo_11"]."','".$_POST["status_tel11"]."','".$_POST["telefono_12"]."','".$_POST["extension_12"]."','".$_POST["ca_12"]."','".$_POST["cr_12"]."','".$_POST["tipo_12"]."','".$_POST["status_tel12"]."','".$_POST["telefono_13"]."','".$_POST["extension_13"]."','".$_POST["ca_13"]."','".$_POST["cr_13"]."','".$_POST["tipo_13"]."','".$_POST["status_tel13"]."','".$_POST["telefono_14"]."','".$_POST["extension_14"]."','".$_POST["ca_14"]."','".$_POST["cr_14"]."','".$_POST["tipo_14"]."','".$_POST["status_tel14"]."','".$_POST["telefono_15"]."','".$_POST["extension_15"]."','".$_POST["ca_15"]."','".$_POST["cr_15"]."','".$_POST["tipo_15"]."','".$_POST["status_tel15"]."','".$_POST["nuevo_telefono_1"]."','".$_POST["nuevo_extension_1"]."','".$_POST["nuevo_ca_1"]."','".$_POST["nuevo_cr_1"]."','".$_POST["nuevo_tipo_1"]."','".$_POST["nuevo_status_tel1"]."','".$_POST["nuevo_telefono_2"]."','".$_POST["nuevo_extension_2"]."','".$_POST["nuevo_ca_2"]."','".$_POST["nuevo_cr_2"]."','".$_POST["nuevo_tipo_2"]."','".$_POST["nuevo_status_tel2"]."','".$_POST["nuevo_telefono_3"]."','".$_POST["nuevo_extension_3"]."','".$_POST["nuevo_ca_3"]."','".$_POST["nuevo_cr_3"]."','".$_POST["nuevo_tipo_3"]."','".$_POST["nuevo_status_tel3"]."','".$_POST["nuevo_telefono_4"]."','".$_POST["nuevo_extension_4"]."','".$_POST["nuevo_ca_4"]."','".$_POST["nuevo_cr_4"]."','".$_POST["nuevo_tipo_4"]."','".$_POST["nuevo_status_tel4"]."','".$_POST["nuevo_telefono_5"]."','".$_POST["nuevo_extension_5"]."','".$_POST["nuevo_ca_5"]."','".$_POST["nuevo_cr_5"]."','".$_POST["nuevo_tipo_5"]."','".$_POST["nuevo_status_tel5"]."',
'".$_POST["email_1"]."','".$_POST["email_2"]."','".$_POST["observaciones"]."','".$_POST["hora"]."','".$_POST["fecha"]."');",$conexion) or die("Error al grabar un mensaje: ".header ("Location:error_hh.php"));

//Actualizando la columna de status de la tabla base para saber que cuentas ya estan trabajadas
mysql_query("UPDATE base_telefonos_hh SET status = 'Trabajada' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

//ACTUALIZANDO EL CAMPO DE STATUS_CUENTA a PC DE LA TABLA base_captura_hh CUANDO TODO SEA DIFERENTE DE C 
if (($_POST["status_tel1"]=='PC') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel2"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}


if (($_POST["status_tel3"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}


if (($_POST["status_tel4"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}


if (($_POST["status_tel5"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel6"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}


if (($_POST["status_tel7"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel8"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel9"]!='C') || ($_POST["status_tel10"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel9"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel10"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel10"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}


if (($_POST["status_tel11"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel1"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel10"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel12"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel11"]!='C') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel10"]!='C') || ($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel13"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel10"]!='C') || ($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel14"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel14"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel10"]!='C') || ($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel15"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["status_tel15"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel10"]!='C') || ($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') ||
($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["nuevo_status_tel1"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel10"]!='C') || ($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') ||
($_POST["status_tel15"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["nuevo_status_tel2"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel10"]!='C') || ($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') ||
($_POST["status_tel15"]!='C') || ($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["nuevo_status_tel3"]=='PC') || ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel10"]!='C') || ($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') ||
($_POST["status_tel15"]!='C') || ($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel4"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}


if (($_POST["nuevo_status_tel4"]=='PC')|| ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel10"]!='C') || ($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') ||
($_POST["status_tel15"]!='C') || ($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel5"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

if (($_POST["nuevo_status_tel5"]=='PC')|| ($_POST["status_tel1"]!='C') || ($_POST["status_tel2"]!='C') || ($_POST["status_tel3"]!='C') || ($_POST["status_tel4"]!='C') || ($_POST["status_tel5"]!='C') || ($_POST["status_tel6"]!='C') || ($_POST["status_tel7"]!='C') || ($_POST["status_tel8"]!='C') || ($_POST["status_tel9"]!='C') ||
($_POST["status_tel10"]!='C') || ($_POST["status_tel11"]!='C') || ($_POST["status_tel12"]!='C') || ($_POST["status_tel13"]!='C') || ($_POST["status_tel14"]!='C') ||
($_POST["status_tel15"]!='C') || ($_POST["nuevo_status_tel1"]!='C') || ($_POST["nuevo_status_tel2"]!='C') || ($_POST["nuevo_status_tel3"]!='C') || ($_POST["nuevo_status_tel4"]!='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'POSIBLE CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);

}

//ACTUALIZANDO EL CAMPO DE STATUS_CUENTA a C DE LA TABLA base_captura CUANDO POR LO MENOS EN UN CAMPO DE STATUS_TEL HAYA UNA C
if (($_POST["status_tel1"]=='C') || ($_POST["status_tel2"]=='C') || ($_POST["status_tel3"]=='C') || ($_POST["status_tel4"]=='C') || ($_POST["status_tel5"]=='C') || ($_POST["status_tel6"]=='C') || ($_POST["status_tel7"]=='C') || ($_POST["status_tel8"]=='C') || ($_POST["status_tel9"]=='C') || ($_POST["status_tel10"]=='C') 
|| ($_POST["status_tel11"]=='C') || ($_POST["status_tel12"]=='C') || ($_POST["status_tel13"]=='C') || ($_POST["status_tel14"]=='C') || ($_POST["status_tel15"]=='C') ||
($_POST["nuevo_status_tel1"]=='C') || ($_POST["nuevo_status_tel2"]=='C') || ($_POST["nuevo_status_tel3"]=='C') || ($_POST["nuevo_status_tel4"]=='C') || ($_POST["nuevo_status_tel5"]=='C')){
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'CONTACTO' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);
}

//ACTUALIZANDO EL CAMPO DE STATUS_CUENTA a IL DE LA TABLA base_captura CUANDO TODOS LOS CAMPOS DE STATUS_TEL SEAN IL
if (($_POST["status_tel1"]=='IL') && ($_POST["status_tel2"]=='IL') && ($_POST["status_tel3"]=='IL') && ($_POST["status_tel4"]=='IL') && ($_POST["status_tel5"]=='IL') && ($_POST["status_tel6"]=='IL') && ($_POST["status_tel7"]=='IL') && ($_POST["status_tel8"]=='IL') && ($_POST["status_tel9"]=='IL') && ($_POST["status_tel10"]=='IL')
&& ($_POST["status_tel11"]=='IL') && ($_POST["status_tel12"]=='IL') && ($_POST["status_tel13"]=='IL') && ($_POST["status_tel14"]=='IL') && ($_POST["status_tel15"]=='IL') && ($_POST["nuevo_status_tel1"]=='IL') && ($_POST["nuevo_status_tel2"]=='IL') && ($_POST["nuevo_status_tel3"]=='IL') && ($_POST["nuevo_status_tel4"]=='IL') && ($_POST["nuevo_status_tel5"]=='IL'))
{
  mysql_query("UPDATE base_captura_hh SET status_cuenta= 'ILOCALIZABLE' WHERE numero_cte=" .$_REQUEST["cod"].";",$conexion);
}


if (($_POST["email_1"]!='') || ($_POST["email_2"]!=''))
{
	mysql_query("UPDATE base_captura_hh SET status_email = 'POSIBLE CONTACTO' WHERE numero_cte =" .$_REQUEST["cod"].";", $conexion);
}else
{
	mysql_query("UPDATE base_captura_hh SET status_email = 'ILOCALIZABLE' WHERE numero_cte =" .$_REQUEST["cod"].";", $conexion);
}

}

		$sql= "SELECT  count(*) trabajadas FROM base_captura_hh WHERE eslabon='".$_COOKIE["usuario_nombre"]."'";
		$rs = mysql_query($sql, $conexion);
		$count = mysql_fetch_array($rs);
		
		//Consulta para saber cuantos Contactos lleva en el mes
		$sql_c = "SELECT  count(*) contactos FROM base_captura_hh WHERE eslabon='".$_COOKIE["usuario_nombre"]."' and status_cuenta ='CONTACTO'";
		$rs_c = mysql_query($sql_c, $conexion);
		$count_c = mysql_fetch_array($rs_c);
		
		
		$sql_fecha = "SELECT  count(*) dia FROM base_captura_hh WHERE eslabon='".$_COOKIE["usuario_nombre"]."' and fecha ='".$fecha = date ("Y-m-d")."'";
		$rs_fecha = mysql_query($sql_fecha, $conexion);
		$count_fecha = mysql_fetch_array($rs_fecha);


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
<p align="center"><img src="imagenes/logo.JPG" width="272" height="195" /></p>
<form id="form1" name="form1" method="post">
<table width="780" border="0" align="center">
    
    <tr>
      <td colspan="3">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td colspan="3" rowspan="9"><div align="right"><img src="imagenes/Logo_nuevo.JPG" width="381" height="255" /></div></td>
    </tr>
    <tr>
      <td colspan="5"><span class="style4 style26">Marcacion de Telefonos </span></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="165">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><span class="style4">Bienvenido:</span></td>
      <td colspan="3"><span class="style4 style26"><span class="style4"><span class="style15">
        <?php /*Mostrando nombre de Usuario */echo $fila_producto["nombre"];?>
      </span></span></span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="style4">Eslabon:</span></td>
      <td colspan="3"><span class="style15"><strong><?php echo $_COOKIE["usuario_nombre"];?></strong></span></td>
    </tr>
    <tr>
      <td rowspan="2">&nbsp;</td>
      <td bgcolor="#000066"><div align="left" class="style27 style30">
          <div align="center">Al dia </div>
      </div>
          <div align="center" class="style27"></div></td>
      <td bgcolor="#000099"><div align="center"><strong><span class="style28">Contactos</span></strong></div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">
          <div align="center">Cuentas Trabajadas </div>
      </div></td>
      <td rowspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center" class="style31"><strong><?php echo $count_fecha['dia'];?></strong></div>
          <div align="center" class="style31"></div></td>
      <td><div align="center" class="style32"><?php echo $count_c['contactos'];?></div>
          <span class="style33"></span></td>
      <td><div align="center" class="style27 style19"><?php echo $count['trabajadas'];?></div>
          <span class="style19"></span></td>
    </tr>
    
    
    
    <tr>
      <td width="40" bgcolor="#003366"><span class="style27">N&deg; <?php echo "<font color='#FFFFFF'>".$fila_producto["asignadas"] ."</font>";?></span></td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="3" bgcolor="#0033FF"><div align="center" class="style27">
          <div align="center">Eslabon</div>
      </div></td>
      <td width="79" bgcolor="#0033FF"><div align="center" class="style27">
        <div align="center">N&deg; Cliente </div>
      </div></td>
      <td bgcolor="#0033FF"><div align="center" class="style27">RFC</div></td>
      <td colspan="2" bgcolor="#0033FF"><div align="center" class="style27">Nombre Cliente </div></td>
      <td width="36"><div align="center" class="style27"></div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
          <input name="eslabon" type="text" id="eslabon" value="<?php echo $fila_producto["eslabon"] ?>" size="30" readonly="true"/>
      </div></td>
      <td>        <div align="center">
        <input name="numero_cte" type="text" id="numero_cte" size="10" value="<?php echo $fila_producto["numero_cte"] ?>" readonly="true"/>      
      </div></td>
      <td><div align="center">
          <input name="rfc" type="text" id="rfc" size="20" value="<?php echo $fila_producto["rfc"] ?> " readonly="true"/>
      </div></td>
      <td colspan="2"><div align="center">
          <input name="nombre_cliente" type="text" id="nombre_cliente" size="35" value="<?php echo $fila_producto["nombre_cliente"] ?>" readonly="true"/>
      </div></td>
      <td><div align="center"></div></td>
    </tr>
    
    <tr>
      <td colspan="3" bgcolor="#0066FF"><div align="center" class="style27">Telefono</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">Extensi&oacute;n</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">CA</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">CR</div></td>
      <td bgcolor="#0066FF"><div align="center" class="style27">Tipo</div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td bgcolor="#000066"><div align="center"><strong><span class="style28">1-
        </span>
      </strong></div>
        <div align="center"></div></td>
      <td colspan="2">
        
        <div align="center">
           <input name="telefono_1" type="text" id="telefono_1"  value="<?php echo $fila_producto["telefono_1"] ?>"  size="13" maxlength="13" readonly="true"/>
        </div></td>
      <td><div align="center">
        <input name="extension_1" type="text" id="extension_1"  size="5" maxlength="5"/>
      </div></td>
      <td><div align="center">
        <select name="ca_1" id="ca_1" onchange="opcionescr(this.form)" onblur="contactouno(this.form)">
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
        <select name="cr_1" id="cr_1" onchange="opcionestipo(this.form)" >
		<option value=" " selected="selected"> </option>
        </select>
      </div></td>
      <td width="247"><div align="center">
        <select  name="tipo_1" id="tipo_1">
          <option value=" " selected="selected" > </option>
        </select>
      </div></td>
      <td><div align="center">
        <input name="status_tel1"  id="status_tel1" size="1" type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">2-
        
      </div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_2" type="text" id="telefono_2" onKeypress="mis_datos()" value="<?php echo $fila_producto["telefono_2"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_2" type="text"  id="extension_2" onKeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="ca_2" id="ca_2" onchange="opcionescr2(this.form)" onblur="contactodos(this.form)" >
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
              <select name="cr_2" id="cr_2" onchange="opcionestipo2(this.form)">
               <option value=" "> </option>
            </select>
        </div></td>
      <td>
        
        <div align="center">
            <select  name="tipo_2" id="tipo_2" >
              <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="status_tel2"  id="status_tel2" size="1"  type="hidden" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">3-</div>        </td>
      <td colspan="2"><div align="center">
        <input name="telefono_3" type="text"  id="telefono_3" onkeypress="mis_datos()" value="<?php echo $fila_producto["telefono_3"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_3" type="text"  id="extension_3" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="ca_3" id="ca_3" onchange="opcionescr3(this.form)" onblur="contactotres(this.form)" >
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
              <select name="cr_3" id="cr_3" onchange="opcionestipo3(this.form)" >
              <option value=" " selected="selected" > </option>
            </select>
        </div></td>
      <td>
        
        <div align="center">
            <select  name="tipo_3" id="tipo_3" >
             <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="status_tel3"  id="status_tel3" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">4-</div>        </td>
      <td colspan="2"><div align="center">
        <input name="telefono_4" type="text" id="telefono_4" onkeypress="mis_datos()" value="<?php echo $fila_producto["telefono_4"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_4" type="text"  id="extension_4" onKeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="ca_4" id="ca_4" onchange="opcionescr4(this.form)" onblur="contactocuatro(this.form)">
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
              <select name="cr_4" id="cr_4" onchange="opcionestipo4(this.form)"  >
               <option value=" " selected="selected" > </option>
            </select>
        </div></td>
      <td>
        
        <div align="center">
            <select  name="tipo_4" id="tipo_4" >
              <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="status_tel4"  id="status_tel4" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>5-</strong></div>        </td>
      <td colspan="2"><div align="center">
        <input name="telefono_5" type="text"  id="telefono_5" onKeypress="mis_datos()" value="<?php echo $fila_producto["telefono_5"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_5" type="text"  id="extension_5" onKeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="ca_5" id="ca_5" onchange="opcionescr5(this.form)" onblur="contactocinco(this.form)" >
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
              <select name="cr_5" id="cr_5" onchange="opcionestipo5(this.form)" >
               <option value=" " selected="selected" > </option>
            </select>
        </div></td>
      <td>
        
        <div align="center">
            <select  name="tipo_5" id="tipo_5" >
              <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="status_tel5"  id="status_tel5" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#000066"><div align="center"><strong><span class="style28">6- </span> </strong></div>
          <div align="center"></div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_6" type="text"  id="telefono_6" onKeypress="mis_datos()" value="<?php echo $fila_producto["telefono_6"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_6" type="text"  id="extension_6" onKeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
        <select name="ca_6" id="ca_6" onchange="opcionescr6(this.form)" onblur="contactoseis(this.form)" >
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
         <select name="cr_6" id="cr_6" onchange="opcionestipo6(this.form)" >
         <option value=" " selected="selected" > </option>
         </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_6" id="tipo_6" >
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel6"  id="status_tel6" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">7- </div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_7" type="text" id="telefono_7" onKeypress="mis_datos()" value="<?php echo $fila_producto["telefono_7"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_7" type="text"  id="extension_7" onKeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
        <select name="ca_7" id="ca_7" onchange="opcionescr7(this.form)" onblur="contactosiete(this.form)" >
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
          <select name="cr_7" id="cr_7" onchange="opcionestipo7(this.form)"  >
          <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_7" id="tipo_7" >
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel7"  id="status_tel7" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">8-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_8" type="text"  id="telefono_8" onKeypress="mis_datos()" value="<?php echo $fila_producto["telefono_8"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_8" type="text"  id="extension_8" onKeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
        <select name="ca_8" id="ca_8" onchange="opcionescr8(this.form)" onblur="contactoocho(this.form)" >
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
          <select name="cr_8" id="cr_8" onchange="opcionestipo8(this.form)" >
	      <option value=" " selected="selected" > </option>
    	  </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_8" id="tipo_8" >
           <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel8"  id="status_tel8" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">9-</div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_9" type="text"  id="telefono_9" onKeypress="mis_datos()" value="<?php echo $fila_producto["telefono_9"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_9" type="text"  id="extension_9" onKeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
        <select name="ca_9" id="ca_9" onchange="opcionescr9(this.form)" onblur="contactonueve(this.form)" >
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
          <select name="cr_9" id="cr_9" onchange="opcionestipo9(this.form)" >
          <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_9" id="tipo_9">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel9"  id="status_tel9" size="1"  type="hidden" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>10-</strong></div></td>
      <td colspan="2"><div align="center">
        <input name="telefono_10" type="text"  id="telefono_10" onKeypress="mis_datos()" value="<?php echo $fila_producto["telefono_10"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="extension_10" type="text"  id="extension_10" onKeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
        <select name="ca_10" id="ca_10" onchange="opcionescr10(this.form)" onblur="contactodiez(this.form)" >
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
          <select name="cr_10" id="cr_10" onchange="opcionestipo10(this.form)" >
           <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_10" id="tipo_10" >
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel10"  id="status_tel10" size="1"  type="hidden" />
      </div></td>
    </tr>
    
    <tr>
      <td bgcolor="#000066"><div align="center"><strong><span class="style28">11- </span> </strong></div>
          <div align="center"></div></td>
      <td colspan="2"><div align="center">
          <input name="telefono_11" type="text"  id="telefono_11" onkeypress="mis_datos()" value="<?php echo $fila_producto["telefono_11"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_11" type="text"  id="extension_11" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="ca_11" id="ca_11" onchange="opcionescr11(this.form)" onblur="contactoonce(this.form)" >
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
        <select name="cr_11" id="cr_11" onchange="opcionestipo11(this.form)" >
          <option value=" " selected="selected" > </option>
        </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_11" id="tipo_11" >
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel11"  id="status_tel11" size="1"  type="hidden" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">12- </div></td>
      <td colspan="2"><div align="center">
          <input name="telefono_12" type="text"  id="telefono_12" onkeypress="mis_datos()" value="<?php echo $fila_producto["telefono_12"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_12" type="text"  id="extension_12" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="ca_12" id="ca_12" onchange="opcionescr12(this.form)" onblur="contactodoce(this.form)" >
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
          <select name="cr_12" id="cr_12" onchange="opcionestipo12(this.form)">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_12" id="tipo_12">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel12"  id="status_tel12" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">13-</div></td>
      <td colspan="2"><div align="center">
          <input name="telefono_13" type="text"  id="telefono_13" onkeypress="mis_datos()" value="<?php echo $fila_producto["telefono_13"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_13" type="text" id="extension_13" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="ca_13" id="ca_13" onchange="opcionescr13(this.form)" onblur="contactotrece(this.form)" >
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
          <select name="cr_13" id="cr_13" onchange="opcionestipo13(this.form)">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_13" id="tipo_13">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel13"  id="status_tel13" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td height="38" bgcolor="#0000FF"><div align="center" class="style27">14-</div></td>
      <td colspan="2"><div align="center">
          <input name="telefono_14" type="text"  id="telefono_14" onkeypress="mis_datos()" value="<?php echo $fila_producto["telefono_14"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_14" type="text"  id="extension_14" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="ca_14" id="ca_14" onchange="opcionescr14(this.form)" onblur="contactocatorce(this.form)" >
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
          <select name="cr_14" id="cr_14" onchange="opcionestipo14(this.form)">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_14" id="tipo_14">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel14"  id="status_tel14" size="1"  type="hidden" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>15-</strong></div></td>
      <td colspan="2"><div align="center">
          <input name="telefono_15" type="text"  id="telefono_15" onkeypress="mis_datos()" value="<?php echo $fila_producto["telefono_15"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="extension_15" type="text"  id="extension_15" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="ca_15" id="ca_15" onchange="opcionescr15(this.form)" onblur="contactoquince(this.form)" >
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
          <select name="cr_15" id="cr_15" onchange="opcionestipo15(this.form)">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <select  name="tipo_15" id="tipo_15">
            <option value=" " selected="selected" > </option>
          </select>
      </div></td>
      <td><div align="center">
          <input name="status_tel15"  id="status_tel15" size="1"  type="hidden"/>
      </div></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7" bgcolor="#0000CC"><div align="center"><span class="style28"><strong>NUEVOS TELEFONOS</strong></span></div></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td bgcolor="#000066"><div align="center"><strong><span class="style28">1- </span> </strong></div>
          <div align="center"></div></td>
      <td colspan="2"><div align="center">
          <input name="nuevo_telefono_1" type="text" id="nuevo_telefono_1" onkeypress="mis_datos()" value="<?php echo $fila_producto["nuevo_tel1"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="nuevo_extension_1" type="text" id="nuevo_extension_1"  size="5" maxlength="5" onkeypress="mis_datos()" readonly="true"/>
      </div></td>
      <td><div align="center">
        <select name="nuevo_ca_1" id="nuevo_ca_1" onchange="nuevo_opcionescr1(this.form)" onblur="nuevo_contacouno(this.form)">
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
      <td width="84">
        
        <div align="center">
          <select name="nuevo_cr_1" id="nuevo_cr_1" onchange="nuevo_opcionestipo1(this.form)" >
            <option value=" " selected="selected"></option>
          </select>
        </div></td>
      <td width="247">
        
        <div align="center">
          <select  name="nuevo_tipo_1" id="nuevo_tipo_1">
            <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="nuevo_status_tel1"  id="nuevo_status_tel1" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#000099"><div align="center" class="style27">2- </div></td>
      <td colspan="2"><div align="center">
          <input name="nuevo_telefono_2" type="text" id="nuevo_telefono_2" onkeypress="mis_datos()" value="<?php echo $fila_producto["nuevo_tel2"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="nuevo_extension_2" type="text"  id="nuevo_extension_2" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="nuevo_ca_2" id="nuevo_ca_2" onchange="nuevo_opcionescr2(this.form)" onblur="nuevo_contacodos(this.form)" >
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
          <select name="nuevo_cr_2" id="nuevo_cr_2" onchange="nuevo_opcionestipo2(this.form)">
            <option value=" "> </option>
          </select>
        </div></td>
      <td>
        
        <div align="center">
          <select  name="nuevo_tipo_2" id="nuevo_tipo_2" >
            <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="nuevo_status_tel2"  id="nuevo_status_tel2" size="1"  type="hidden" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000CC"><div align="center" class="style27">3-</div></td>
      <td colspan="2"><div align="center">
          <input name="nuevo_telefono_3" type="text"  id="nuevo_telefono_3" onkeypress="mis_datos()" value="<?php echo $fila_producto["nuevo_tel3"] ?>"  size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="nuevo_extension_3" type="text"  id="nuevo_extension_3" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="nuevo_ca_3" id="nuevo_ca_3" onchange="nuevo_opcionescr3(this.form)" onblur="nuevo_contactotres(this.form)" >
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
          <select name="nuevo_cr_3" id="nuevo_cr_3" onchange="nuevo_opcionestipo3(this.form)" >
            <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td>
        
        <div align="center">
          <select  name="nuevo_tipo_3" id="nuevo_tipo_3" >
            <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="nuevo_status_tel3"  id="nuevo_status_tel3" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0000FF"><div align="center" class="style27">4-</div></td>
      <td colspan="2"><div align="center">
          <input name="nuevo_telefono_4" type="text" id="nuevo_telefono_4" onkeypress="mis_datos()" value="<?php echo $fila_producto["nuevo_tel4"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="nuevo_extension_4" type="text"  id="nuevo_extension_4" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="nuevo_ca_4" id="nuevo_ca_4" onchange="nuevo_opcionescr4(this.form)" onblur="nuevo_contactocuatro(this.form)">
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
          <select name="nuevo_cr_4" id="nuevo_cr_4" onchange="nuevo_opcionestipo4(this.form)"  >
            <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td>
        
        <div align="center">
          <select  name="nuevo_tipo_4" id="nuevo_tipo_4" >
            <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td><div align="center">
        <input name="nuevo_status_tel4"  id="nuevo_status_tel4" size="1"  type="hidden"/>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#0066FF"><div align="center" class="style28"><strong>5-</strong></div></td>
      <td colspan="2"><div align="center">
          <input name="nuevo_telefono_5" type="text"  id="nuevo_telefono_5" onkeypress="mis_datos()" value="<?php echo $fila_producto["nuevo_tel5"] ?>" size="13" maxlength="13" readonly="true"/>
      </div></td>
      <td><div align="center">
          <input name="nuevo_extension_5" type="text"  id="nuevo_extension_5" onkeypress="mis_datos()" size="5" maxlength="5" readonly="true"/>
      </div></td>
      <td><div align="center">
          <select name="nuevo_ca_5" id="nuevo_ca_5" onchange="nuevo_opcionescr5(this.form)" onblur="nuevo_contactocinco(this.form)" >
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
          <select name="nuevo_cr_5" id="nuevo_cr_5" onchange="nuevo_opcionestipo5(this.form)" >
            <option value=" " selected="selected" > </option>
          </select>
        </div></td>
      <td>
        
        <div align="center">
          <select  name="nuevo_tipo_5" id="nuevo_tipo_5" >
            <option value=" " selected="selected" > </option>
          </select>
        </div>
      <td><div align="center">
        <input name="nuevo_status_tel5"  id="nuevo_status_tel5" size="1"  type="hidden"/>
      </div></td>
    </tr>
    
    
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    <tr>
      <td><div align="center" class="style28"></div></td>
      <td width="61" bgcolor="#0066FF"><div align="center" class="style27">HORA</div></td>
      <td width="71" bgcolor="#0066FF"><div align="center" class="style27">FECHA</div></td>
      <td colspan="2" bgcolor="#0066FF"><div align="center" class="style28"><strong>EMAIL</strong></div></td>
      <td colspan="2" bgcolor="#0066FF"><div align="center" class="style27">OBSERVACIONES</div></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td><div align="center" class="style19"><strong>Email 1</strong></div></td>
      <td><div align="center">
          <input name="email_1" type="text" id="email_1" size="30" onblur="javascript:changeCase(this.form.email_1)" value=""/>
      </div></td>
      <td colspan="2" rowspan="2"><div align="center">
        <textarea name="observaciones" cols="35" id="observaciones"></textarea>
      </div></td>
      <td rowspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="hora" type="text" size="6" readonly="true" value="horaImprimible" /></td>
      <td><?php $fecha = date ("Y-m-d");?>
      <input name="fecha" type="text" id="fecha" size="8" value="<?php echo $fecha;?>" readonly="true"/></td>
      <td><div align="center" class="style19"><strong>Email 2</strong></div></td>
      <td><div align="center">
          <input name="email_2" type="text" id="email_2" size="30" onblur="javascript:changeCase(this.form.email_2)" value=""/>
      </div></td>
    </tr>
    <tr>
      <td><input name="nombre"  id="status_tel102" size="1" type="hidden" value="<?php /*Mostrando nombre de Usuario */echo $fila_producto["nombre"];?>"/></td>
      <td colspan="2"><div align="center">
        <input name="Directotio" type="button" id="Directotio" value="Directorio" onclick="win()"/>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="7"><div align="center">
        <input name="Guardar"  type="button" value="Guardar" onclick="validar(this.form)"/>
      </div></td>
      <td>&nbsp;</td>
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
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel1.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel1.value="IL"
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
	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel2.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel2.value="IL"
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
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel3.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel3.value="IL"
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
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel4.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel4.value="IL"
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
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		document.form1.status_tel5.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel5.value="IL"
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
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel6.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel6.value="IL"
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

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel7.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel7.value="IL"
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

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel8.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel8.value="IL"
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
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel9.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel9.value="IL"
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
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel10.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel10.value="IL"
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

<script>
//funcion de seleccion para los botones CA_11, CR_11 y TIPO_11
function opcionescr11(form)
{
var select = form.ca_11.options;   
var combo = form.cr_11.options;
var combo1 = form.tipo_11.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel11.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel11.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel11.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel11.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel11.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel11.value="IL"
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
		document.form1.status_tel11.value="C"
	}

}

//Asignando el tipo de telefono  
function opcionestipo11(form)
{
var select = form.cr_11.options;
var combo = form.tipo_11.options;
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
//funcion de seleccion para los botones CA_12, CR_12 y TIPO_12
function opcionescr12(form)
{
var select = form.ca_12.options;   
var combo = form.cr_12.options;
var combo1 = form.tipo_12.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel12.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel12.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel12.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel12.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel12.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel12.value="IL"
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
		document.form1.status_tel12.value="C"
	}

}

//Asignando el tipo de telefono  
function opcionestipo12(form)
{
var select = form.cr_12.options;
var combo = form.tipo_12.options;
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
//funcion de seleccion para los botones CA_13, CR_13 y TIPO_13
function opcionescr13(form)
{
var select = form.ca_13.options;   
var combo = form.cr_13.options;
var combo1 = form.tipo_13.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel13.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel13.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel13.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel13.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel13.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel13.value="IL"
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
		document.form1.status_tel13.value="C"
	}

}

//Asignando el tipo de telefono  
function opcionestipo13(form)
{
var select = form.cr_13.options;
var combo = form.tipo_13.options;
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
//funcion de seleccion para los botones CA_14, CR_14 y TIPO_14
function opcionescr14(form)
{
var select = form.ca_14.options;   
var combo = form.cr_14.options;
var combo1 = form.tipo_14.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel14.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel14.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel14.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel14.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel14.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel14.value="IL"
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
		document.form1.status_tel14.value="C"
	}

}

//Asignando el tipo de telefono  
function opcionestipo14(form)
{
var select = form.cr_14.options;
var combo = form.tipo_14.options;
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
//funcion de seleccion para los botones CA_15, CR_15 y TIPO_15
function opcionescr15(form)
{
var select = form.ca_15.options;   
var combo = form.cr_15.options;
var combo1 = form.tipo_15.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel15.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel15.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel15.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel15.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel15.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.status_tel15.value="IL"
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
		document.form1.status_tel15.value="C"
	}

}

//Asignando el tipo de telefono  
function opcionestipo15(form)
{
var select = form.cr_15.options;
var combo = form.tipo_15.options;
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
//funcion de seleccion para los botones nuevo_tel1, nuevo_CR_1 y nuevo_TIPO_1
function nuevo_opcionescr1(form)
{
var select = form.nuevo_ca_1.options;   
var combo = form.nuevo_cr_1.options;
var combo1 = form.nuevo_tipo_1.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel1.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel1.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel1.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel1.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel1.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel1.value="IL"
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
		document.form1.nuevo_status_tel1.value="C"
	}

}

//Asignando el tipo de telefono  
function nuevo_opcionestipo1(form)
{
var select = form.nuevo_cr_1.options;
var combo = form.nuevo_tipo_1.options;
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
//funcion de seleccion para los botones nuevo_tel2, nuevo_CR_2 y nuevo_TIPO_2
function nuevo_opcionescr2(form)
{
var select = form.nuevo_ca_2.options;   
var combo = form.nuevo_cr_2.options;
var combo1 = form.nuevo_tipo_2.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel2.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel2.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel2.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel2.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel2.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel2.value="IL"
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
		document.form1.nuevo_status_tel2.value="C"
	}

}

//Asignando el tipo de telefono  
function nuevo_opcionestipo2(form)
{
var select = form.nuevo_cr_2.options;
var combo = form.nuevo_tipo_2.options;
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
//funcion de seleccion para los botones nuevo_tel3, nuevo_CR_3 y nuevo_TIPO_3
function nuevo_opcionescr3(form)
{
var select = form.nuevo_ca_3.options;   
var combo = form.nuevo_cr_3.options;
var combo1 = form.nuevo_tipo_3.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel3.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel3.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel3.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel3.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel3.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel3.value="IL"
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
		document.form1.nuevo_status_tel3.value="C"
	}

}

//Asignando el tipo de telefono  
function nuevo_opcionestipo3(form)
{
var select = form.nuevo_cr_3.options;
var combo = form.nuevo_tipo_3.options;
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
//funcion de seleccion para los botones nuevo_tel4, nuevo_CR_4 y nuevo_TIPO_4
function nuevo_opcionescr4(form)
{
var select = form.nuevo_ca_4.options;   
var combo = form.nuevo_cr_4.options;
var combo1 = form.nuevo_tipo_4.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel4.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel4.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel4.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel4.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel4.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel4.value="IL"
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
		document.form1.nuevo_status_tel4.value="C"
	}

}

//Asignando el tipo de telefono  
function nuevo_opcionestipo4(form)
{
var select = form.nuevo_cr_4.options;
var combo = form.nuevo_tipo_4.options;
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
//funcion de seleccion para los botones nuevo_tel5, nuevo_CR_5 y nuevo_TIPO_5
function nuevo_opcionescr5(form)
{
var select = form.nuevo_ca_5.options;   
var combo = form.nuevo_cr_5.options;
var combo1 = form.nuevo_tipo_5.options;
combo.length = null;
combo1.length = null;

	//asignando el valor de PC en caso de escojer la posicion 1 
	if (select[1].selected == true){
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel5.value="PC";
	}
	//asignando el valor de PC en caso de escojer la posicion 2 
	if (select[2].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel5.value="PC"
	}
	//asignando el valor de PC en caso de escojer la posicion 3 
	if (select[3].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel5.value="PC"
	}
	
	//asignando el valor de PC en caso de escojer la posicion 4 
	if (select[4].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel5.value="PC"
	}
	

	//asignando el valor de PC en caso de escojer la posicion 5
	if (select[5].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel5.value="IL"
	}

	//asignando el valor de PC en caso de escojer la posicion 6
	if (select[6].selected == true)	{
		var seleccion1 = new Option("");
		combo1[0]=seleccion1;
		document.form1.nuevo_status_tel5.value="IL"
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
		document.form1.nuevo_status_tel5.value="C"
	}

}

//Asignando el tipo de telefono  
function nuevo_opcionestipo5(form)
{
var select = form.nuevo_cr_5.options;
var combo = form.nuevo_tipo_5.options;
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

//VALIDACIONES DE LOS CAMPOS CA 

//validando que se tipifique el CA_1
if ((form1.telefono_1.value!='') && (form1.ca_1.options[form1.ca_1.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 1");
		    form1.ca_1.focus(); return false;
		    }		

//validando que se tipifique el CA_2
if ((form1.telefono_2.value!='') && (form1.ca_2.options[form1.ca_2.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 2");
		    form1.ca_2.focus(); return false;
		    }		

if (form1.telefono_2.value==''){
		document.form1.ca_2.disabled=true;
		document.form1.cr_2.disabled=true;
		document.form1.tipo_2.disabled=true;
		
   }		

if (form1.telefono_3.value==''){
		document.form1.ca_3.disabled=true;
		document.form1.cr_3.disabled=true;
		document.form1.tipo_3.disabled=true;
		
   }		


if (form1.telefono_4.value==''){
		document.form1.ca_4.disabled=true;
		document.form1.cr_4.disabled=true;
		document.form1.tipo_4.disabled=true;
		
   }		

if (form1.telefono_5.value==''){
		document.form1.ca_5.disabled=true;
		document.form1.cr_5.disabled=true;
		document.form1.tipo_5.disabled=true;
		
   }		


if (form1.telefono_6.value==''){
		document.form1.ca_6.disabled=true;
		document.form1.cr_6.disabled=true;
		document.form1.tipo_6.disabled=true;
		
   }		
   
 if (form1.telefono_7.value==''){
		document.form1.ca_7.disabled=true;
		document.form1.cr_7.disabled=true;
		document.form1.tipo_7.disabled=true;
		
   }	

 if (form1.telefono_8.value==''){
		document.form1.ca_8.disabled=true;
		document.form1.cr_8.disabled=true;
		document.form1.tipo_8.disabled=true;
		
   }	
 
  if (form1.telefono_9.value==''){
		document.form1.ca_9.disabled=true;
		document.form1.cr_9.disabled=true;
		document.form1.tipo_9.disabled=true;
		
   }	

 if (form1.telefono_10.value==''){
		document.form1.ca_10.disabled=true;
		document.form1.cr_10.disabled=true;
		document.form1.tipo_10.disabled=true;
		
   }	
 
  if (form1.telefono_11.value==''){
		document.form1.ca_11.disabled=true;
		document.form1.cr_11.disabled=true;
		document.form1.tipo_11.disabled=true;
		
   }	
   
    if (form1.telefono_12.value==''){
		document.form1.ca_12.disabled=true;
		document.form1.cr_12.disabled=true;
		document.form1.tipo_12.disabled=true;
		
   }	
   
    if (form1.telefono_13.value==''){
		document.form1.ca_13.disabled=true;
		document.form1.cr_13.disabled=true;
		document.form1.tipo_13.disabled=true;
		
   }	
   
	 if (form1.telefono_14.value==''){
		document.form1.ca_14.disabled=true;
		document.form1.cr_14.disabled=true;
		document.form1.tipo_14.disabled=true;
		
   }	
   
	 if (form1.telefono_15.value==''){
		document.form1.ca_15.disabled=true;
		document.form1.cr_15.disabled=true;
		document.form1.tipo_15.disabled=true;
		
   }	
  	   
		
//validando que se tipifique el CA_3
if ((form1.telefono_3.value!='') && (form1.ca_3.options[form1.ca_3.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 3");
		    form1.ca_3.focus(); return false;
		    }		
			

//validando que se tipifique el CA_4
if ((form1.telefono_4.value!='') && (form1.ca_4.options[form1.ca_4.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 4");
		    form1.ca_4.focus(); return false;
		    }		

//validando que se tipifique el CA_5
if ((form1.telefono_5.value!='') && (form1.ca_5.options[form1.ca_5.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 5");
		    form1.ca_5.focus(); return false;
		    }	

//validando que se tipifique el CA_6
if ((form1.telefono_6.value!='') && (form1.ca_6.options[form1.ca_6.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 6");
		    form1.ca_6.focus(); return false;
		    }		
	
//validando que se tipifique el CA_7
if ((form1.telefono_7.value!='') && (form1.ca_2.options[form1.ca_7.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 7");
		    form1.ca_7.focus(); return false;
		    }		

//validando que se tipifique el CA_8
if ((form1.telefono_8.value!='') && (form1.ca_8.options[form1.ca_8.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 8");
		    form1.ca_8.focus(); return false;
		    }		

//validando que se tipifique el CA_9
if ((form1.telefono_9.value!='') && (form1.ca_9.options[form1.ca_9.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 9");
		    form1.ca_9.focus(); return false;
		    }		

//validando que se tipifique el CA_10
if ((form1.telefono_10.value!='') && (form1.ca_10.options[form1.ca_10.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 10");
		    form1.ca_10.focus(); return false;
		    }		

//validando que se tipifique el CA_11
if ((form1.telefono_11.value!='') && (form1.ca_11.options[form1.ca_11.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 11");
		    form1.ca_11.focus(); return false;
		    }		

//validando que se tipifique el CA_12
if ((form1.telefono_12.value!='') && (form1.ca_12.options[form1.ca_12.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 12");
		    form1.ca_12.focus(); return false;
		    }		

//validando que se tipifique el CA_13
if ((form1.telefono_13.value!='') && (form1.ca_13.options[form1.ca_13.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 13");
		    form1.ca_13.focus(); return false;
		    }		

//validando que se tipifique el CA_14
if ((form1.telefono_14.value!='') && (form1.ca_14.options[form1.ca_14.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 14");
		    form1.ca_14.focus(); return false;
		    }		

//validando que se tipifique el CA_15
if ((form1.telefono_15.value!='') && (form1.ca_15.options[form1.ca_15.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el telefono 15");
		    form1.ca_15.focus(); return false;
		    }		
	
//validando que se tipifique el Nuevo_CA_1
if ((form1.nuevo_telefono_1.value!='') && (form1.nuevo_ca_1.options[form1.nuevo_ca_1.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el Nuevo telefono 1");
		    form1.nuevo_ca_1.focus(); return false;
		    }		

//validando que se tipifique el Nuevo_CA_2
if ((form1.nuevo_telefono_2.value!='') && (form1.nuevo_ca_2.options[form1.nuevo_ca_2.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el Nuevo telefono 2");
		    form1.nuevo_ca_2.focus(); return false;
		    }		

//validando que se tipifique el Nuevo_CA_3
if ((form1.nuevo_telefono_3.value!='') && (form1.nuevo_ca_3.options[form1.nuevo_ca_3.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el Nuevo telefono 3");
		    form1.nuevo_ca_3.focus(); return false;
		    }		

//validando que se tipifique el Nuevo_CA_4
if ((form1.nuevo_telefono_4.value!='') && (form1.nuevo_ca_4.options[form1.nuevo_ca_4.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el Nuevo telefono 4");
		    form1.nuevo_ca_4.focus(); return false;
		    }		

//validando que se tipifique el Nuevo_CA_5
if ((form1.nuevo_telefono_5.value!='') && (form1.nuevo_ca_5.options[form1.nuevo_ca_5.selectedIndex].value==" ")){
		    alert("Por favor, tipifique el Nuevo telefono 5");
		    form1.nuevo_ca_5.focus(); return false;
		    }	
	
//TIPIFICANDO LOS STATUS DE LOS TELEFONOS A IL CUANDO NO ESTEN  VACIOS LOS CAMPOS DE TELEFONOS DEL 2 AL 15 

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


//tipificando el status del telefono a IL si no hay nada en el campo telefono 11
if (form1.telefono_11.value==0){document.form1.status_tel11.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 12
if (form1.telefono_12.value==0){document.form1.status_tel12.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 13
if (form1.telefono_13.value==0){document.form1.status_tel13.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo telefono 14
if (form1.telefono_14.value==0){document.form1.status_tel14.value="IL"}


//tipificando el status del telefono a IL si no hay nada en el campo telefono 15
if (form1.telefono_15.value==0){document.form1.status_tel15.value="IL"}


//TIPIFICANDO LOS STATUS DE LOS NUEVOS TELEFONOS A IL CUANDO NO ESTEN  VACIOS LOS CAMPOS DE TELEFONOS DEL 2 AL 15 

//tipificando el status del telefono a IL si no hay nada en el campo Nuevo telefono 1
if (form1.nuevo_telefono_1.value==0){document.form1.nuevo_status_tel1.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo Nuevo telefono 2
if (form1.nuevo_telefono_2.value==0){document.form1.nuevo_status_tel2.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo Nuevo telefono 3
if (form1.nuevo_telefono_3.value==0){document.form1.nuevo_status_tel3.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo Nuevo telefono 4
if (form1.nuevo_telefono_4.value==0){document.form1.nuevo_status_tel4.value="IL"}

//tipificando el status del telefono a IL si no hay nada en el campo Nuevo telefono 5
if (form1.nuevo_telefono_5.value==0){document.form1.nuevo_status_tel5.value="IL"}

//Mensaje para el Usuario una vez que haya completado el formulario de manera Exitosa
alert("Gestión realizada exitosamente");
form1.submit()

} //FIN DE LA FUNCION VALIDAR 


//FUNCIONES PARA EVALUAR SI LOS CAMPOS CR PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista

function contactouno(form)
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

//FUNCION  PARA EVALUAR EL CAMPO CR_11 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactoonce(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.ca_11.value.length="LL") && (form1.cr_11.options[form1.cr_11.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 11");
		form1.cr_11.focus(); return false;
	}	
}

//FUNCION  PARA EVALUAR EL CAMPO CR_12 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactodoce(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.ca_12.value.length="LL") && (form1.cr_12.options[form1.cr_12.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 12");
		form1.cr_12.focus(); return false;
	}	
}

//FUNCION  PARA EVALUAR EL CAMPO CR_13 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactotrece(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.ca_13.value.length="LL") && (form1.cr_13.options[form1.cr_13.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 13");
		form1.cr_13.focus(); return false;
	}	
}

//FUNCION  PARA EVALUAR EL CAMPO CR_12 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactocatorce(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.ca_14.value.length="LL") && (form1.cr_14.options[form1.cr_14.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 14");
		form1.cr_14.focus(); return false;
	}	
}


//FUNCION  PARA EVALUAR EL CAMPO CR_12 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function contactoquince(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.ca_15.value.length="LL") && (form1.cr_15.options[form1.cr_15.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto en el Telefono 15");
		form1.cr_15.focus(); return false;
	}	
}

//FUNCION  PARA EVALUAR EL NUEVO CAMPO CR_1 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function nuevo_contacouno(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.nuevo_ca_1.value.length="LL") && (form1.nuevo_cr_1.options[form1.nuevo_cr_1.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto para el Nuevo Telefono 1");
		form1.nuevo_cr_1.focus(); return false;
	}	
}

//FUNCION  PARA EVALUAR EL NUEVO CAMPO CR_2 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function nuevo_contacodos(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.nuevo_ca_2.value.length="LL") && (form1.nuevo_cr_2.options[form1.nuevo_cr_2.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto para el Nuevo Telefono 2");
		form1.nuevo_cr_2.focus(); return false;
	}	
}


//FUNCION  PARA EVALUAR EL NUEVO CAMPO CR_3 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function nuevo_contactotres(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.nuevo_ca_3.value.length="LL") && (form1.nuevo_cr_3.options[form1.nuevo_cr_3.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto para el Nuevo Telefono 3");
		form1.nuevo_cr_3.focus(); return false;
	}	
}

//FUNCION  PARA EVALUAR EL NUEVO CAMPO CR_3 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function nuevo_contactocuatro(form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.nuevo_ca_4.value.length="LL") && (form1.nuevo_cr_4.options[form1.nuevo_cr_4.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto para el Nuevo Telefono 4");
		form1.nuevo_cr_4.focus(); return false;
	}	
}

//FUNCION  PARA EVALUAR EL NUEVO CAMPO CR_3 QUE PERMANECEN en 'Seleccione una opcion' si es asi, solicita se tome una opcion de la lista
function nuevo_contactocinco (form)
{
	//validando que se Seleccione un tipo de CR_10 cuando el campo CA_10 sea igual a LL
	if ((form1.nuevo_ca_5.value.length="LL") && (form1.nuevo_cr_5.options[form1.nuevo_cr_5.selectedIndex].value=='Seleccione una opcion')){
		alert("Seleccione un tipo de contacto para el Nuevo Telefono 5");
		form1.nuevo_cr_5.focus(); return false;
	}	
}

</script>

<SCRIPT LANGUAGE="JavaScript"> 
//Script para mostrar el directorio de la Celula de Localizacion  
function win() {
msg=window.open("","msg","height=500,width=500,left=80,top=80");
msg.document.write("<html><title>Directorio Localización</title>");
msg.document.write("<body bgcolor='white' onblur=window.close()>");
msg.document.write("<center><img src='imagenes/logo1.jpg' height=100,width=100 onblur=window.close()> </center>");
msg.document.write("<img src='imagenes/directorio.jpg' onblur=window.close()>");
msg.document.write("</body></html><p>");
 
}
</script>
