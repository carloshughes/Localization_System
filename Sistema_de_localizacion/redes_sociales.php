<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Conexion a la base de Datos
include("conexion.php");

//conectando a la pagina verificasession.php para comprobar si la session ha sido empezada
include("verificasessionexa.php");

	$rst_productos=mysql_query("SELECT * FROM base WHERE cuenta=". $_REQUEST["cod"].";",$conexion);
	$fila_producto=mysql_fetch_array($rst_productos);

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
.style12 {color: #000099; font-size: 18px; font-weight: bold; }
.style14 {color: #0066CC; font-size: 18px; font-weight: bold; }
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
.style22 {color: #000099}
.style23 {color: #0066CC}
.style24 {
	color: #003399;
	font-weight: bold;
}
-->
</style>

</head>
<body onLoad="mueveReloj();cronometro()">
<div align="center"><img src="imagenes/margen11.jpg"/></div>
<table width="709" border="0" align="center">
  <tr>
    <td width="473" height="52"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="226"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center" class="style4"><img src="imagenes/LOCALIZACION.JPG" width="429" height="262" /></p>
<p class="style4">Bienvenido
   <span class="style15">
   <?php /*Mostrando nombre de Usuario*/ echo $_COOKIE["usuario_nombre"]; ?>
   </span></p>
<p align="center" class="style4">REDES SOCIALES </p>
<form id="form1" name="form1" method="post">
  <table width="1153" border="0" align="center">
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="59"><div align="center" class="style21">
        <div align="center">Asesor</div>
      </div></td>
      <td width="92"><div align="center" class="style21">
        <div align="center">N<span class="style22">&deg;</span> Cliente </div>
      </div></td>
      <td width="139"><div align="center"><span class="style21">Contrato</span></div></td>
      <td width="118"><div align="center"><span class="style21">Cuenta</span></div></td>
      <td width="132"><div align="center"><span class="style21">Busqueda Internet</span></div></td>
      <td width="165"><div align="center"><span class="style21">CA</span></div></td>
      <td width="165"><div align="center"><span class="style21">CR</span></div></td>
      <td width="165"><div align="center"><span class="style21">Tipo</span></div></td>
      <td width="80"><div align="center"><span class="style21">Fecha</span></div></td>
    </tr>
    <tr>
      <td><div align="center">
        <input name="asesor" type="text" id="asesor" value="<?php echo $_COOKIE["usuario_nombre"]; ?>" size="8" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="a" type="text" id="a" size="10" value="<?php echo $fila_producto["numero_cte"] ?>" readonly="true" />
      </div></td>
      <td><div align="center">
        <input name="contrato" type="text" id="contrato" size="20" value="<?php echo $fila_producto["contrato"] ?>" readonly="true" />
      </div></td>
      <td><div align="center">
        <input name="cuenta" type="text" id="cuenta" size="17" value="<?php echo $fila_producto["cuenta"] ?>" readonly="true"/>
      </div></td>
      <td><div align="center">
        <input name="internet" type="text" id="internet" size="17" />
      </div></td>
      <td><div align="center">
        <select name="ca" id="ca">
        <option>Seleccione una opcion</option>  
		<option>NC</option>  
		<option>FS</option>  
		<option>OC</option>  
		<option>LL</option>  
		<option>CT</option>  
		<option>SC</option>  
		<option>IL</option>  
        </select>
      </div></td>
      <td><select name="cr" id="cr">
        <option>Seleccione una opcion</option>
        <option>Th</option>
        <option>Familiar</option>
        <option>Tercero</option>
      </select></td>
      <td><select name="select4">
        <option>Seleccione una opcion</option>
        <option>Celular</option>
        <option>Casa</option>
        <option>Oficina</option>
        <option>Nextel</option>
      </select></td>
      <td><div align="center">
	  <?php $fecha = date ("Y-m-d");?>
	      <input name="fecha" type="text" id="fecha" size="8" value="<?php echo $fecha;?>" readonly="true"/>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    	
          <td colspan="9"><div align="center">
        <input name="Guardar" type="button" onclick="validar(this.form)" value="Guardar"/>
      </div></td>
  </table>
</form>
<p align="center"><a href="Ejecutivo">Regresar</a></p>
<hr align="center" color="#003399" />
<p align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || Modelos Operativos</strong></font><font color="#000000" size="2"><font color="#003399"><strong> ||</strong></font></font> <font color="#003399"><strong>Desarrollo </strong></font><font color="#000000" size="2"><font color="#003399"><strong>||</strong></font></font><font color="#003399"><strong> Cobranza Especializada</strong></font><font color="#000000" size="2"><font color="#003399"><strong> || </strong></font></font><font color="#003399"><strong>Moras Tard&iacute;as 2011</strong></font></font></font></p>
<center></center>
</form>
</body>
</html>
<script>
function Numeros(obj,l)
{
with (obj)
	{ var Num; Num = false; 
	for ( i=0; i < value.length; i++ )
			{if ( isNaN ( parseInt( value.charAt(i) ) ) == true) {Num = true;}}
		}
	if ( Num == true )
		{alert("ESTE CAMPO ES NUM�RICO Y NO ACEPTA LETRAS, ESPACIOS, NI SIGNOS");obj.focus(); }
	if ( obj.value != "" && l != 0 )
		{ if ( obj.value.length < l || l < obj.value.length){alert("ESTE CAMPO DEBE DE CONTENER " + l + " N�MEROS"); obj.			focus();} }

}

function validar(form1)
{

//validando la seleccion de un aplicativo 
    if (form1.aplicativo.options[form1.aplicativo.selectedIndex].value == " ")
    {
    alert("Por favor, Seleccione un Aplicativo");
    form1.aplicativo.focus(); return false;
    }

//validando el producto 
    if (form1.producto.options[form1.producto.selectedIndex].value == " ")
    {
    alert("Por favor, Seleccione un Producto");
    form1.producto.focus(); return false;
    }

//validando el supervisor

	if (form1.supervisor.options[form1.supervisor.selectedIndex].value == "Seleccione una opcion")
    {
    alert("Por favor, Seleccione un Supervisor");
    form1.supervisor.focus(); return false;
    }
	



		
//validando el numero de Usuarios afectados 
	if (form1.usuarios.value.length==0){
		alert("Determina cuantos usuarios fueron afectados");
	form1.usuarios.focus(); return true;
	}

//validando el ticket proporcionado por Comand Center
	if (form1.ticket.value.length==0){
		alert("Si no cuentas con el N� Ticket proporcionado por Comand Center coloca 'Sin ticket'");
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


<script language="javascript">

function opicionessupervisor(form)
{
	var select = form.producto.options;
	var combo = form.supervisor.options;
	combo.length = null;
	
	if (select[0].selected == true){
		
		var seleccionar = new Option ("Seleccione una opcion","","");
		combo[0]=seleccionar;		
	}
	
	//Seleccionando Consumo
	if (select[1].selected == true)	{
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Arturo Rodriguez","Arturo Rodriguez","","");
		var supervisor2 = new Option("Jose Alberto Pardo","Jose Alberto Pardo","","");
		var supervisor3 = new Option("Juan Manuel Jardon","Juan Manuel Jardon","","");
		var supervisor4 = new Option("Paola Santamaria Romero","Paola Santamaria Romero","","");
		var supervisor5 = new Option("Vacante","Vacante","","");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
		combo[2] = supervisor2;
		combo[3] = supervisor3;
		combo[4] = supervisor4;
		combo[5] = supervisor5;
	}
	
	//Seleccionando Consumo Auto
	if (select[2].selected == true){
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Raquel Garcia");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	
	//Seleccionando a todos los de TDC Banco 
		if (select[3].selected == true){
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Todos");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	
	//Seleccionando a todos los de TDC Banco y Finanzia
		if (select[4].selected == true){
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Todos");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	
		
	//Seleccionando TDC Banco Castigo
	if (select[5].selected == true){
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Frank Perez");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	
	//Seleccionando TDC Banco Mora 5
	
	if (select[6].selected == true){
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Angelica Martinez Hernandez");
		var supervisor2 = new Option("Annie Marentes Juarez");
		var supervisor3 = new Option("Gabriela Esquivias Ayala");
		var supervisor4 = new Option("Omar Flores Pichardo");		
		var supervisor5 = new Option("Omar Rodriguez Gardu�o");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
		combo[2] = supervisor2;
		combo[3] = supervisor3;
		combo[4] = supervisor4;
		combo[5] = supervisor5;
	}
	
	//Seleccionando TDC Banco Mora 6
	if (select[7].selected == true){
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Esteban Ledesma Murillo");
		var supervisor2 = new Option("Ignacio Vazquez Flores");
		var supervisor3 = new Option("Manuel Leal Navarro");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
		combo[2] = supervisor2;
		combo[3] = supervisor3;
	}
	
	//Seleccionando TDC Banco Mora 7 +
	
	if (select[8].selected == true){
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Daniel Badillo Morales");
		var supervisor2 = new Option("Jorge Medina Garcia");
		var supervisor3 = new Option("Jorge Oropeza Irlanda");
		var supervisor4 = new Option("Mary Carmen Garcia Monreal");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
		combo[2] = supervisor2;
		combo[3] = supervisor3;
		combo[4] = supervisor4;
	}

	//Seleccionando Finanzia
	
	if (select[9].selected == true){
	
		var supervisor0 = new Option("Seleccione una opcion","Seleccione una opcion","","");
		var supervisor1 = new Option("Gabriel Albis Garcia");
		combo[0] = supervisor0;
		combo[1] = supervisor1;
	}
	

	//validando la opcion de Otros
	if (select[10].selected == true){
	
		var supervisor1 = new Option("Otros");
		combo[0] = supervisor1;

	}

	//validando la opcion de todos
	if (select[11].selected == true){
	
		var supervisor1 = new Option("Todos");
		combo[0] = supervisor1;

	}
		

}

</script>




