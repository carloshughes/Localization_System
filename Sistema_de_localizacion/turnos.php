<?php 
//Desarrollado por Carlos Iván Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessión
session_start();

//conexion a la base de datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
include("verificasessionadmi.php");

$asesores=mysql_query("delete FROM base_marcar WHERE status='Trabajada'",$conexion); 

//Consulta solo para regresar el nombre del Administrador 
$rst_cuentas=mysql_query("SELECT * FROM administrador",$conexion); 
$fila=mysql_fetch_array($rst_cuentas);


//consulta para saber cuantos telefono se cargaron 

$sql_tel= "SELECT  count(*) contador_telefonos FROM baja_telefonos ";
$rs_tel = mysql_query($sql_tel, $conexion);
$telefonos = mysql_fetch_array($rs_tel);


//consulta para saber cuantas cuentas hay en la base
$sql= "SELECT  count(*) contador FROM base_marcar ";
$rs = mysql_query($sql, $conexion);
$count = mysql_fetch_array($rs);

//consulta para saber nombre de las bases que hay
$sql_distinc= "SELECT DISTINCT base FROM base_marcar order by base";
//$sql_distinc= "SELECT DISTINCT base * FROM nueva_base_captura order by base";
$rs_dis = mysql_query($sql_distinc, $conexion);
$fila=mysql_fetch_array($rs_dis);

//consulta para saber cuentas cuentas, se han trabajado 
$sql_1= "SELECT  count(*) trabajadas FROM nueva_base_captura";
$rs_1 = mysql_query($sql_1, $conexion);
$count_1 = mysql_fetch_array($rs_1);


//consulta para saber cuentas cuentas, se han trabajado en telefonos 
$sql_1_tel= "SELECT  count(*) trabajadas_tel FROM base_telefonos WHERE status='Trabajada' ";
$rs_1_tel = mysql_query($sql_1_tel, $conexion);
$count_1_tel = mysql_fetch_array($rs_1_tel);

//Consulta para saber cuentos Contactos se han registrado 
$sql_2= "SELECT  count(*) contactos FROM nueva_base_captura WHERE status_cuenta='CONTACTO' ";
$rs_2 = mysql_query($sql_2, $conexion);	
$count_2 = mysql_fetch_array($rs_2);

@$porcentaje = $count_2['contactos'] / $count_1['trabajadas'];
$multiplicacion = ($porcentaje * 100);				

//Consulta para saber cuentos Posibles Contactos se han registrado 
$sql_3= "SELECT  count(*) p_contactos FROM nueva_base_captura WHERE status_cuenta='POSIBLE CONTACTO' ";
$rs_3 = mysql_query($sql_3, $conexion);
$count_3 = mysql_fetch_array($rs_3);

//Consulta para saber cuentos Ilocalizables se han registrado 
$sql_4= "SELECT  count(*) ilocalizable FROM nueva_base_captura WHERE status_cuenta='ILOCALIZABLE' ";
$rs_4 = mysql_query($sql_4, $conexion);
$count_4 = mysql_fetch_array($rs_4);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language='javascript' src="popcalendar.js"></script> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Localizacion</title>
<!-- Código del Icono -->
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
<style type="text/css">
<!--
.style4 {	color: #0033CC;
	font-weight: bold;
}
body,td,th {
	color: #0000FF;
}
.style23 {color: #FFFFFF; font-weight: bold; }
.style37 {font-size: 16px; color: #FFFFFF; font-weight: bold; }
a:link {
	color: #0000FF;
}
a:visited {
	color: #0033FF;
}
a:hover {
	color: #0066FF;
}
a:active {
	color: #0099FF;
}
.style41 {font-size: 18px}
.style43 {color: #FFFFFF}
.style45 {color: #000099; font-weight: bold; }
.style46 {
	color: #000066;
	font-weight: bold;
}
.style47 {color: #FF0000}
.style48 {font-weight: bold}
-->
</style>
</head>
<body onload="setTimeout('location.reload()',120000)" bgcolor="#FFFFFF">
<p align="center"><img src="imagenes/margen11.jpg" width="1293" height="25"/></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="543" height="50"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="271"><img src="imagenes/logo1.jpg" width="266" height="209" /></td>
    <td width="271">&nbsp;</td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center"> <strong> B i e n v e n i d o </strong> </p>
<table width="793" border="0" align="center">
  
  
  <tr>
    <td colspan="11"><div align="center"><span class="style4"><span class="style4 style41">
      <?php $_COOKIE["usuario_nombre"];?>
    </span><?php echo $fila["nombre"]; /*Mostrando nombre de Usuario*/ /*echo $fila["nombre"]; echo $_COOKIE["usuario_nombre"];*/ ?></span></div></td>
  </tr>
  
  <tr>
    <td colspan="4"><div align="center"><span class="style45">BASE PU </span></div></td>
    <td width="13">&nbsp;</td>
    <td colspan="3"><div align="center"><span class="style45">STATUS</span></div></td>
    <td width="53">&nbsp;</td>
    <td colspan="2"><div align="center"><span class="style45">PRODUCTIVIDAD DIARIA</span></div></td>
  </tr>
  
  
  <tr>
    <td colspan="4"><table width="232" border="0" align="center">
      <tr>
        <td width="109" height="21" bgcolor="#0000CC"><div align="left" class="style43"><span class="style37">Base</span></div></td>
        <td width="54" height="21" bgcolor="#0000CC"><div align="right" class="style37 style43">
          <div align="center"><?php echo $count['contador'];?></div>
        </div></td>
        <td width="55" bgcolor="#0000CC"><div align="center" class="style37 style43">Cuentas </div></td>
      </tr>
      <tr>
        <td bgcolor="#0033FF"><span class="style43"><span class="style37">Trabajadas</span></span></td>
        <td bgcolor="#0033FF"><div align="center" class="style43"><?php echo $count_1['trabajadas'];?></div></td>
        <td bgcolor="#0033FF"><div align="center" class="style37 style43">Cuentas</div>          </td>
      </tr>
      
	     </table></td>
    <td>&nbsp;</td>
    <td colspan="3"><table width="251" border="0" align="center">
      <tr>
        <td width="45" bgcolor="#0000CC"><div align="center"><span class="style37"><?php echo $count_2['contactos'];?></span></div></td>
        <td width="97"><div align="center" class="style46 style48">
            <div align="left">CONTACTOS</div>
        </div></td>
        <td width="97"><div align="center"><strong>
          <?php  echo round ($multiplicacion,2	);?>
        %</strong></div></td>
      </tr>
      <tr>
        <td bgcolor="#0033FF"><div align="center"><span class="style43"><span class="style37"><?php echo $count_3['p_contactos'];?></span></span></div></td>
        <td colspan="2"><div align="left"><span class="style46">POSIBLES CONTACTOS </span></div></td>
      </tr>
      <tr>
        <td bgcolor="#000066"><div align="center"><span class="style43"><span class="style37"><?php echo $count_4['ilocalizable'];?></span></span></div></td>
        <td colspan="2"><div align="left"><span class="style46">ILOCALIZABLES</span></div></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td colspan="2"><table width="205" border="0" align="center">
      <tr>
        <td colspan="3" bgcolor="#0000CC"><div align="center"><span class="style23">Seleccione un Turno</span></div></td>
      </tr>
      
      <tr>
        <td width="63" bgcolor="#FFFFFF"><div align="center" class="style23">
          <div align="center"><a href="avance_matutino_diario.php">Matutino</a></div>
        </div></td>
        <td width="83" bgcolor="#FFFFFF"><div align="center"><span class="style23"><a href="avance_vespertino_diario.php">Vespertino</a></span></div></td>
        <td width="45" bgcolor="#FFFFFF"><div align="center"><span class="style23"><a href="avance_general.php">Todos</a></span></div></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="2">&nbsp;</td>
    <td width="114"><div align="center"><a href="Eliminar_base.php">Eliminar Base</a></div></td>
    <td width="124"><div align="center"><a href="cargar_base.php">Cargar Base</a></div></td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="95"><div align="center"><a href="cuentas_matutino.php">Asignadas MATUTINO</a></div></td>
    <td width="106"><div align="center"><a href="cuentas_vespertino.php">Asignadas VESPERTINO</a></div></td>
  </tr>
  
  <tr>
    <td height="21" colspan="2">&nbsp;</td>
    <td colspan="2"><div align="center"><strong>76089</strong></div></td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center">Descarga Captura<span class="style47"> (hacer)</span></div></td>
    <td>&nbsp;</td>
    <td colspan="2"><div align="center">Contactos</div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2"><div align="center"><span class="style45">BASE TELEFONOS BAJA</span></div></td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><form method="post" name="form1" id="form1" action="exemploexcel_contactos.php">
      <div align="center">
        <p>
          <label><strong>Fecha</strong>
          <input name="fecha" type="text" id="dateArrival" onclick="popUpCalendar(this, form1.dateArrival, 'yyyy-mm-dd');" size="10" />
          <input type="submit" name="Submit" value="Descargar" />
          </label>
        </p>
      </div>
    </form></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2"><table width="232" border="0" align="center">
      <tr>
        <td width="103" height="21" bgcolor="#0033FF"><div align="left"><span class="style37">Base  </span></div></td>
        <td width="44" height="21" bgcolor="#0033FF"><div align="right" class="style37">
          <div align="center"><?php echo $telefonos['contador_telefonos'];?></div>
        </div>          </td>
        <td width="71" bgcolor="#0033FF"><div align="center" class="style37">
          <div align="center">Telefonos </div>
        </div></td>
      </tr>
      
    </table></td>
    <td>&nbsp;</td>
    <td width="110">
      <div align="center">
        <?php //consulta para saber cuentas cuentas, se han trabajado 
		$sql_9= "SELECT  count(*) trabajadas_dos FROM nueva_base_captura WHERE status_cuenta_2='CONTACTO'";
		$rs_9 = mysql_query($sql_9, $conexion);
		$count_9 = mysql_fetch_array($rs_9);
		echo $count_9['trabajadas_dos'];
		?>
      </div></td>
    <td width="52"><div align="center">
      <?php $sql_91= "SELECT  count(*) trabajadas_doss FROM nueva_base_captura WHERE status_cuenta_2!=' '";
		$rs_91 = mysql_query($sql_91, $conexion);
		$count_91 = mysql_fetch_array($rs_91);
		echo $count_91['trabajadas_doss'];?>
    </div></td>
    <td width="81"><?php @$por=$count_9['trabajadas_dos'] / $count_91['trabajadas_doss'];
					$porcien = ($por * 100);
					echo round($porcien,2);?></td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#0033FF"><div align="center"><span class="style43"># de Base en proceso</span> </div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td><div align="center"><a href="Eliminar_Telefonos.php">Eliminar Telefonos</a></div></td>
    <td><div align="center"><a href="cargar_telefonos.php">Cargar Telefonos </a></div></td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><span class="style4 style41"><a href="Saliradmi.php">Salir</a></span></div></td>
    <td>&nbsp;</td>
    <td colspan="2"><span class="style43 style43">
      <?php
		//Obteniendo las variables dependiendo el campo de la tabla 
		while ($fila=mysql_fetch_array($rs_dis))
			   
		{
		//$sql_base= "SELECT  count(*) contador_base FROM base_marcar where base='".$fila['base']."'";
		//$sql_base= "SELECT  count(*) contador_base FROM base_marcar where base='".$fila["base"]."'";
		$sql_base= "SELECT  count(*) contador_base FROM nueva_base_captura where base='".$fila["base"]."'";
		$rs_base = mysql_query($sql_base, $conexion);
		$count_base = mysql_fetch_array($rs_base);
?>
    </span>
      <table width="186" border="0" align="center">
      <tr>
        <td width="39" bgcolor="#0033FF"><div align="center"><span class="style43 style43"><?php echo $fila['base'];?></span></div></td>
        <td width="47" bgcolor="#0033FF"><div align="center"><span class="style43 style43"><?php echo $count_base['contador_base'];?></span></div></td>
        <td width="86" bgcolor="#0033FF"><span class="style23">Cuentas</span></td>
      </tr>
	   <?php
}
?>
    </table></td>
  </tr>
</table>
<hr align="center" color="#003399" />
<div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
</body>
</html>

<script>
//Funcion para no aceptar letras, espacios y signos
function Numeros(obj,l)
{
with (obj)
	{ var Num; Num = false; 
	for ( i=0; i < value.length; i++ )
			{if ( isNaN ( parseInt( value.charAt(i) ) ) == true) {Num = true;}}
		}
	if ( Num == true )
		{alert("ESTE CAMPO ES NUMÉRICO Y NO ACEPTA LETRAS, ESPACIOS, NI SIGNOS");obj.focus(); }
	if ( obj.value != "" && l != 0 )
		{ if ( obj.value.length < l || l < obj.value.length){alert("ESTE CAMPO DEBE DE CONTENER " + l + " NÚMEROS"); obj.			focus();} }

//Restringiendo el formato de hora a solo 24 hrs de la hora_inicio
if (form1.hrs_inicio.value>24)
	{
		alert("La hora no puede ser mayor de 24 hrs");
		form1.hrs_inicio.focus(); return false;	
	}


//Restringiendo el formato de minutos a 59 de la hora_inicio
if (form1.mins_inicio.value>59)
	{
		alert("Los minutos no pueden ser mayor a 59");
		form1.mins_inicio.focus(); return false; 
	}


//Concatenando los tiempos capturados de la hora_inicio
if ((form1.hrs_inicio.value.length!=0) && (form1.mins_inicio.value.length!=0)){
			document.form1.hora_inicio.value= form1.hrs_inicio.value + ':' + form1.mins_inicio.value;
	}
	
//Restringiendo el formato de hora a solo 24 hrs de la hora_final
if (form1.hrs_final.value>24)
	{
		alert("La hora no puede ser mayor de 24 hrs");
		form1.hrs_final.focus(); return false;
	}
	
//Restringiendo el formato de minutos a solo 59 de la hora_final
if (form1.mins_final.value>59)
	{
		alert("Los minutos no pueden ser mayor a 59");
		form1.mins_final.focus(); return false;
	}

//Concatenando los tiempos capturados de la hora_final
if ((form1.hrs_final.value.length!=0) && (form1.mins_final.value.length!=0)){
	document.form1.hora_final.value= form1.hrs_final.value + ':' + form1.mins_final.value;
}

var h_inicio =(document.form1.hrs_inicio.value);
var h_final =(document.form1.hrs_final.value);
document.form1.resta.value = h_final-h_inicio;	

var m_inicio = (document.form1.mins_inicio.value);
var m_final = (document.form1.mins_final.value);
document.form1.resta1.value = m_final-m_inicio;

var multiplicar = parseInt(document.form1.resta.value);
document.form1.multiplicacion.value = (multiplicar * 60);

var resta_min = parseInt(document.form1.resta1.value);

//Operacion para sumar los minutos resultantes con la multiplicacion de la horas
resultado1 = parseInt(document.form1.resta1.value);
resultado2 = parseInt(document.form1.multiplicacion.value);

document.form1.duracion.value = eval(resultado1+resultado2);

}
</script>