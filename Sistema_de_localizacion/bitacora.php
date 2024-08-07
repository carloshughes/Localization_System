<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
//include("verificasessionexa.php");


if (($_POST["aplicativo"]!='Seleccione una opcion') && ($_POST["producto"]!='Seleccione una opcion') && ($_POST["supervisor"]!='Seleccione una opcion') && ($_POST["reporto"]) && ($_POST["usuarios"]) &&  ($_POST["hora_inicio"]) && ( $_POST["hora_final"]) && ($_POST["duracion"]) && ($_POST["fecha"]) && ($_POST["problema"])!='' && ($_POST["ticket"])=='')
{

// consulta para ingresar los datos a la tabla descripcion_inmueble todos menos el del telefono
mysql_query ("INSERT INTO reportes(
reporto, aplicativo, producto, supervisor, usuarios, hora_inicio, hora_final, duracion, fecha, problema)"." VALUES (
'".$_POST["reporto"]."','".$_POST["aplicativo"]."', '".$_POST["producto"]."','".$_POST["supervisor"]."','".$_POST["usuarios"]."','".$_POST["hora_inicio"]."','".$_POST["hora_final"]."', '".$_POST["duracion"]."','".$_POST["fecha"]."','".$_POST["problema"]."');",$conexion);
}


if (($_POST["aplicativo"]!='Seleccione una opcion') && ($_POST["producto"]!='Seleccione una opcion') && ($_POST["supervisor"]!='Seleccione una opcion') && ($_POST["reporto"]) && ($_POST["usuarios"]) &&  ($_POST["ticket"]) && ($_POST["hora_inicio"]) && ( $_POST["hora_final"]) && ($_POST["duracion"]) && ($_POST["fecha"]) && ($_POST["problema"])!='')
{

// consulta para ingresar los datos a la tabla descripcion_inmueble todos menos el del telefono
mysql_query ("INSERT INTO reportes(
reporto, aplicativo, producto, supervisor, usuarios, ticket, hora_inicio, hora_final, duracion, fecha, problema)"." VALUES (
'".$_POST["reporto"]."', '".$_POST["aplicativo"]."', '".$_POST["producto"]."','".$_POST["supervisor"]."','".$_POST["usuarios"]."','".$_POST["ticket"]."','".$_POST["hora_inicio"]."','".$_POST["hora_final"]."', '".$_POST["duracion"]."','".$_POST["fecha"]."','".$_POST["problema"]."');",$conexion);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Soluciones de Credito Bancomer</title>
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
.style5 {
	color: #0066CC;
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
.style16 {font-size: 18px}
a:link {
	color: #003399;
}
a:active {
	color: #003399;
}
.style21 {color: #000099; font-weight: bold; }
.style24 {
	color: #003399;
	font-weight: bold;
}
.style25 {color: #FFFFFF}
.style26 {color: #FFFFFF; font-weight: bold; }
.style32 {color: #0099FF}
.style33 {font-size: 24px}
-->
</style>

<script language="JavaScript">
<!--
//funcion para mostrar la hora actualizada 
function mueveReloj()
{ 
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
							horaImprimible = hora+":"+minuto+":"+segundo //horaImprimible = hora+":"+minuto
							document.form1.hora_final.value = horaImprimible 
							setTimeout("mueveReloj()",1000) 
} 

//variables para la funcion de cronometro

var horas = "0"
var minutos = "00"
var segundos = "0"

//Funcion para el cronometro
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

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</SCRIPT>
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
<p align="center" class="style4"></p>
<p align="center" class="style4"><img src="imagenes/logo.JPG" width="244" height="189" /></p>
<p align="center" class="style5 style16"><span class="style3 style33">CC Sevilla</span></p>
<form id="form1" name="form1" method="post">
  <p>&nbsp;</p>
  <table width="1032" border="0" align="center">
    <tr>
      <td height="21" colspan="7"><span class="style4">Bienvenido <span class="style15">
      <?php /*Mostrando nombre de Usuario*/ echo $_COOKIE["usuario_nombre"]; ?>
      </span></span></td>
    </tr>
    <tr>
      <td height="21" colspan="7">&nbsp;</td>
    </tr>
    <tr>
      <td width="218" height="21" bgcolor="#000099"><div align="center" class="style21">
          <div align="center" class="style25">Reporto</div>
      </div></td>
      <td colspan="2" bgcolor="#0033FF"><div align="center" class="style21">
          <div align="center" class="style25">Aplicativo</div>
      </div></td>
      <td colspan="2" bgcolor="#0099FF"><div align="center"><span class="style26">Producto</span></div></td>
      <td colspan="2" bgcolor="#00CCFF"><div align="center"><span class="style26">Supervisor</span></div>
          <div align="center"></div>
        <div align="center"></div></td>
    </tr>
    
    <tr>
      <td><div align="center">
        <input name="reporto" type="text" id="reporto" value="<?php echo $_COOKIE["usuario_nombre"]; ?>" size="15" readonly="true"/>
      </div></td>
      <td width="169">
        
          <div align="center">
              <select name="menu_aplicativo" id="menu_aplicativo" style="width=150px" width="150px" >
                <option value=" ">Seleccione una opcion</option>
                <option value="-Call Manager">Call Manager</option>
                <option value="-Cyber">Cyber</option>
                <option value="-IG">IG</option>
                <option value="-PU">PU</option>
                <option value="-Sistema de Red">Sistema de Red</option>
                <option value="-UIP">UIP</option>
                <option value="-Melita">Melita</option>
                <option value="-Otros">Otros</option>
              </select>
          </div></td>
      <td width="82"><label>
        
        <input name="Agregar_aplicativo" type="button" id="Agregar_aplicativo" value="Agregar" onClick="passText(this.form.menu_aplicativo.options[this.form.menu_aplicativo.selectedIndex].value);"/>
      </label></td>
      <td width="169">
        
          <div align="center">
                <select name="menu_producto" id="menu_producto" style="width=150px" width="200px">
                <option value=" ">Seleccione una opcion</option>
                  <option value="-Consumo">Consumo</option>
                  <option value="-Celula de Localizacion">Celula de Localizacion</option>
                  <option value="-TDC Banco">TDC Banco</option>
                  <option value="-TDC Banco Finanzia">TDC Banco Finanzia</option>
                  <option value="-TDC Banco Castigo">TDC Banco Castigo</option>
                  <option value="-TDC Banco Mora 5">TDC Banco Mora 5</option>
                  <option value="-TDC Banco Mora 6">TDC Banco Mora 6</option>
                  <option value="-TDC Banco Mora 7 +">TDC Banco Mora 7 +</option>
                  <option value="-TDC Finanzia">TDC Finanzia</option>
                  <option value="-Todos">Todos</option>
                  <option value="-Otros">Otros</option>
                </select>
          </div>
      <label></label></td>
      <td width="65"><label>
        
        <input name="Agregar_producto" type="button" id="Agregar_producto" value="Agregar" onClick="passTex(this.form.menu_producto.options[this.form.menu_producto.selectedIndex].value);"/>
      </label></td>
      <td width="229">
        <div align="center">
          <select name="menu_supervisor" id="menu_supervisor" style="width=150px" width="200px" ondblclick="movess('right')" >
	        <option value=" ">Seleccione una opcion</option>
            <option value="-Jose Ignacio Vazquez">Jose Ignacio Vazquez</option>
            <option value="-Jose Alberto Pardo">Jose Alberto Pardo</option>
            <option value="-Esteban Ledesma">Esteban Ledesma</option>
            <option value="-Paola Santamaria Romero">Paola Santamaria Romero</option>
            <option value="-Juan Pablo Morales Villeda">Juan Pablo Morales Villeda</option>
            <option value="-Frank Perez">Frank Perez</option>
            <option value="-Angelica Martinez Hernandez">Angelica Martinez Hernandez</option>
            <option value="-Alan David Vazquez Oribio">Alan David Vazquez Oribio</option>
            <option value="-Jesus Cabrera Sotelo">Jesus Cabrera Sotelo</option>
            <option value="-Omar Flores Pichardo">Omar Flores Pichardo</option>
            <option value="-Omar Rodriguez Garduño">Omar Rodriguez Gardu&ntilde;o</option>
            <option value="-Carlos Hughes">Carlos Hughes</option>
            <option value="-Manuel Leal Navarro">Manuel Leal Navarro</option>
            <option value="-Jorge Medina Garcia">Jorge Medina Garcia</option>
            <option value="-Jorge Oropeza Irlanda">Jorge Oropeza Irlanda</option>
            <option value="-Mary Carmen Garcia Monreal">Mary Carmen Garcia Monreal</option>
            <option value="-Gabriel Albis Garcia">Gabriel Albis Garcia</option>
            <option value="-Vacante Consumo">Vacante Consumo</option>
	        <option value="-Vacante TDC">Vacante TDC</option>
            <option value="-Modelos Operativos">Modelos Operativos</option>
            <option value="-Todos">Todos</option>
          </select>
        </div></td>
      <td width="70"><label>
        
        <input name="Agregar_supervisor" type="button" id="Agregar_supervisor" value="Agregar" onClick="passTextt(this.form.menu_supervisor.options[this.form.menu_supervisor.selectedIndex].value);"/>
      </label></td>
    </tr>
    <tr>
      <td colspan="7">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td colspan="2">        <label>
        <div align="center">
          <textarea name="aplicativo" cols="25" rows="3" id="aplicativo"></textarea>
        </div>
      </label></td>
      <td colspan="2"><label>
        
        <div align="center">
          <textarea name="producto" cols="25" rows="3" id="producto"></textarea>
        </div>
      </label></td>
      <td colspan="2"><label>
        
        <div align="center">
          <textarea name="supervisor" cols="25" rows="3" id="supervisor"></textarea>
        </div>
      </label></td>
    </tr>
    <tr>
      <td height="100" colspan="7"><table width="1017" border="0" align="center">
            <tr>
              <td width="104" rowspan="2" bgcolor="#000099"><div align="center" class="style25"><strong>Usuarios Afectados</strong></div></td>
              <td width="109" rowspan="2" bgcolor="#000099"><div align="center" class="style25"><strong>Ticket N</strong>&deg;</div></td>
              <td colspan="4" bgcolor="#0033FF"><div align="center" class="style25"><strong>Hora</strong></div>                <div align="center" class="style25"></div></td>
              <td width="110" rowspan="2" bgcolor="#0099FF"><div align="center" class="style25"><span class="style26">Duraci&oacute;n</span></div></td>
              <td width="126" rowspan="2" bgcolor="#0099FF"><div align="center" class="style25"><strong>Fecha</strong></div></td>
              <td width="308" rowspan="2" bgcolor="#00CCFF"><div align="center" class="style26 style25">Problema</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#0033FF"><div align="center"><span class="style25"><span class="style26">Inicio </span></span></div></td>
              <td width="113" colspan="2" bgcolor="#0033FF"><div align="center"><span class="style25"><strong>Final</strong></span></div></td>
            </tr>
            <tr>
              <td><div align="center">
                  <input name="usuarios" type="text" id="usuarios" size="5" maxlength="4" onblur="javascript:Numeros(this,0);"/>
              </div></td>
              <td><div align="center">
                <input name="ticket" type="text" id="ticket" size="6" maxlength="6" />
              </div></td>
              <td width="66" height="51"><div align="center">
                <label>
                <input name="hrs_inicio" type="text" id="hrs_inicio" size="2" maxlength="2"  onblur="javascript:Numeros(this,0);" />
                </label>
              <strong>:</strong></div></td>
              <td width="47">
                <div align="left">
                  <input name="mins_inicio" type="text" id="mins_inicio" size="2" maxlength="2"  onblur="javascript:Numeros(this,0);"/>
                </div></td>
              <td><label>
                <div align="center">
                  <input name="hrs_final" type="text" id="hrs_final"  onblur="javascript:Numeros(this,0);" size="2" maxlength="2"/>
                  <strong>:</strong></div>
              </label></td>
              <td><label>
                <div align="left">
					  <input name="mins_final" type="text" id="mins_final"  onblur="javascript:Numeros(this,0);" size="02" maxlength="02"/>
                </div>
              </label></td>
              <td><div align="center">
                <input name="duracion" id="duracion" size="4" maxlength="5"  readonly="true"/>
                <span class="style32">mins.</span></div></td>
              <td><div align="center">
                <?php $fecha = date ("Y-m-d");?>
                <input name="fecha" type="text" id="fecha" size="8" value="<?php echo $fecha;?>" readonly="true"/>
              </div></td>
              <td><div align="center">
                  <textarea name="problema" cols="25" rows="3" id="problema"></textarea>
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="2"><div align="center">
                <input name="hora_inicio" id="hora_inicio" size="5" maxlength="5" />
              </div></td>
              <td colspan="2"><div align="center">
                <input name="hora_final" id="hora_final" size="5" maxlength="5" />
              </div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><div align="center">
                <input name="resta" id="resta" size="5" maxlength="5"/>
              </div></td>
              <td><div align="center">
                <input name="resta1" id="resta1" size="5" maxlength="5" />
              </div></td>
              <td colspan="2"><div align="center">
                <input name="multiplicacion" id="multiplicacion" size="5" maxlength="5"/>
              </div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="9">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="9"><div align="center">
                  <input name="Guardar" type="button" onclick="validar(this.form)" value="Guardar"/>
                </div>
                  <div align="center"></div>
                <div align="center"></div>
                <div align="center"></div>
                <div align="center"></div>
                <div align="center"></div>
                <div align="center"></div></td>
            </tr>
        </table></td>
    </tr>
  </table>
</form>
<p align="center"><span class="style24"><a href="Reportes.php">Reportes</a></span> <font color="#000000"><font color="#000000"><font color="#000000"><font color="#003399">||</font></font></font></font> <font color="#003399"><strong><a href="Salirexa.php">Salir</a></strong></font></p>
<hr align="center" color="#003399" />
<p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2011</strong></font></font></font></p>
<center></center>
</form>
</body>
</html>
<SCRIPT LANGUAGE="JavaScript">
//Funcion para agregar un aplicativo
oldvalu = "";
function passText(passedvalu) {
  if (passedvalu != "") {
    var totalvalu = passedvalu+"\n"+oldvalu;
    document.form1.aplicativo.value = totalvalu;
    oldvalu = document.form1.aplicativo.value;
  }
   
   if (form1.menu_aplicativo.options[form1.menu_aplicativo.selectedIndex].value == " ")
   {
    alert("Seleccione un Aplicativo, por favor");
    form1.menu_aplicativo.focus(); return false;
   }

}
</script>

<SCRIPT LANGUAGE="JavaScript">
//Funcion para agregar un producto
oldvalue = "";
function passTex(passedvalue) {
  if (passedvalue != "") {
    var totalvalue = passedvalue+"\n"+oldvalue;
    document.form1.producto.value = totalvalue;
    oldvalue = document.form1.producto.value;
  }

   if (form1.menu_producto.options[form1.menu_producto.selectedIndex].value == " ")
   {
    alert("Seleccione un Producto, por favor");
    form1.menu_producto.focus(); return false;
   }

}
</script>

<SCRIPT LANGUAGE="JavaScript">
//Funcion para agregar un supervisor
oldvaluee = "";
function passTextt(passedvaluee) {
  if (passedvaluee != "") {
    var totalvaluee = passedvaluee+"\n"+oldvaluee;
    document.form1.supervisor.value = totalvaluee;
    oldvaluee = document.form1.supervisor.value;
  }

  if (form1.menu_supervisor.options[form1.menu_supervisor.selectedIndex].value == " ")
   {
    alert("Seleccione un Supervisor, por favor");
    form1.menu_supervisor.focus(); return false;
   }

}
</script>

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


function validar(form1)
{


//validando la seleccion de un aplicativo 
    if (form1.aplicativo.value.length==0)
    {
    alert("Seleccione un Aplicativo");
    form1.aplicativo.focus(); return false;
    }

//validando el producto 
    if (form1.producto.value=="")
    {
    alert("Seleccione un Producto");
    form1.producto.focus(); return false;
    }

//validando el supervisor

	if (form1.supervisor.value.length==0)
    {
    alert("Seleccione un Supervisor");
    form1.supervisor.focus(); return false;
    }
		
//validando el numero de Usuarios afectados 
	if (form1.usuarios.value.length==0){
		alert("Determina cuantos usuarios fueron afectados");
	form1.usuarios.focus(); return true;
	}

//Llenado de manera automatica el campo Ticket por si ponen nada 
	if (form1.ticket.value==0){document.form1.ticket.value="Sin ticket"}

//validando la hora inicial
	if (form1.hrs_inicio.value==0){
		alert("Determine, la hora de inicio del reporte");
		form1.hrs_inicio.focus(); return true;
	}
	
//validando los minutos iniciales
	
	if (form1.mins_inicio.value=="")
	{
		alert("Determine los minutos de inicio del reporte");
		form1.mins_inicio.focus(); return true;
	}

//validando la hora final 
	if (form1.hrs_final.value==0){
		alert("Determine, la hora final del reporte");
		form1.hrs_final.focus(); return true;
	}

//validando los minutos finales
	if (form1.mins_final.value=="")
	{
		alert("Determine los minutos finales del reporte");
		form1.mins_final.focus(); return true;
	}


//validando la duracion 
	if (form1.duracion.value.length==0){
		alert("Determina, la duracion del reporte");
		form1.ticket.focus(); return true;
	}

//Validando el campo de Problema
	if (form1.problema.value.length==0){
		alert("Escribe una descripcion del problema");
	form1.problema.focus(); return true;
	}

	
//Mensaje Reporte Generado Exitosamente 
		alert("Reporte Generado Exitosamente");
		form1.submit();

}
</script>






