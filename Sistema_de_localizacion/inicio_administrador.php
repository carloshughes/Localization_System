<?php
//Desarrollado por Carlos Ivan Hughes Corona 
//"Modelos Operativos - Desarrollo - Cobraza Especializada - Moras Tardias 2011"

//Conexion a la base de Datos
include ("conexion.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sistema de Localizacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style4 {color: #0033CC;
	font-weight: bold;
}
.style22 {color: #0033CC; font-weight: bold; font-size: 14px; }
a:link {
	color: #0000FF;
}
a:visited {
	color: #0066CC;
}
a:hover {
	color: #0066FF;
}
a:active {
	color: #0099FF;
}
.style23 {
	font-size: 18px;
	font-weight: bold;
	color: #0066FF;
}
.style40 {font-size: 14px; font-weight: bold; }
.style42 {
	font-size: 16px;
	font-weight: bold;
	color: #0066FF;
	font-family: "Times New Roman", Times, serif;
}
.style43 {
	color: #0099FF;
	font-weight: bold;
}
-->
</style>
<p align="center">
<!-- Código del Icono -->
<link href="favicon1.ico" type="image/x-icon" rel="shortcut icon" />
</head> 
<p align="center"></p>
<body bgcolor="#FFFFFF" text="#000000">
<p align="center"><span class="style4"><img src="imagenes/margen11.jpg" width="1293" height="25"/></span></p>
<table width="1294" border="0" align="center">
  <tr>
    <td width="1089" height="50"><img src="imagenes/bancomer1.GIF" width="186" height="48" /></td>
    <td width="195"><div align="right"><font color="#000099"><b>
      <?php include ("fecha.php") // hora actualizada ?>
    </b></font></div></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p align="center" class="style23">&nbsp;</p>
<form id="form2" name="form2" method="post" action="verificasesion_admi.php">
  <center>
  <p class="style23"><font color="#FF0000"><b>
    <?php if ($_GET["nosession"]==1) echo "Por favor de iniciar sesión para tener acceso al Sitio.";?>
  </b></font></p>
  </center>
<table width="54%" height="34%" border="0" align="center" bordercolor="#003399">
              
                  <tr>
                    <td width="61%" rowspan="7" bordercolor="0"><div align="center"></div>
                      <div align="center"><img src="imagenes/logo1.jpg" width="266" height="209" /></div></td>
                    <td height="20%" colspan="2" bordercolor="0"><div align="left"><span class="style43">Administrador</span></div></td>
                    <td width="5%" rowspan="9" bordercolor="0"><p align="center">&nbsp;</p>
                    <p align="center">&nbsp;</p></td>
                  </tr>
              <tr>
                <td height="20%" colspan="2" bordercolor="0"><div align="left" class="style40">
                  <div align="left"><span class="style42">iniciar  sesi&oacute;n</span></div>
                </div>                  <div align="center"></div></td>
              </tr>
              
            
              <tr>
                <td width="10%" height="59%" bordercolor="0"><span class="style40"><font color="#FFFFFF"><font color ="#084B8A">Usuario:</font></font></span></td>
                <td width="24%" bordercolor="0"><font color="#FFFFFF">
                  <input name="usuario" type="text" id="usuario" onBlur="javascript:sText(this);" onClick="javascript:sText(this);" value="Ingresa tu usuario" size="25" maxlength="25" />
                </font></td>
              </tr>
              <tr>
                <td height="29%" bordercolor="0"><span class="style40"><font color="#084B8A">Password:</font></span></td>
                <td height="29%" bordercolor="0"><input name="password" type="password" id="password" size="25" maxlength="25" /></td>
              </tr>
              <tr>
                <td height="29%" colspan="2" bordercolor="0"><div align="center"><font color="#FFFFFF">
                  <input name='enviar' type='submit' value='Iniciar Sesi&oacute;n'/>
                </font></div></td>
              </tr>
          <tr>
            <td height="29%" colspan="2" bordercolor="0">&nbsp;</td>
          </tr>
          <tr>
            <td height="15%" colspan="2" bordercolor="0">&nbsp;</td>
          </tr>
          <tr>
            <td width="61%" bordercolor="0">&nbsp;</td>
            <td height="15%" colspan="2" bordercolor="0">&nbsp;</td>
          </tr>
          <tr>
            <td width="61%" bordercolor="0">&nbsp;</td>
            <td height="15%" colspan="2" bordercolor="0">&nbsp;</td>
          </tr>
          
          
          <tr bordercolor="#000000">
            <td height="15" colspan="5" bordercolor="0">&nbsp;</td>
          </tr>
          <tr bordercolor="#000000">
            <td height="15" colspan="5" bordercolor="0"><font color="#000000">
              <div align="left"><span class="style22"><a href="inicio.php">Regresar</a></span> </div>
            <div align="center"></div></td></tr>
  </table>
</form>
<p align="center">&nbsp;</p>
	<HR align="center" color="#003399">
    <div align="center"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Created by: Carlos Hughes || </strong></font><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong>Desarrollo</strong></font></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong> ||</strong></font></font> <font color="#000000" size="2"><font color="#000000" size="2"><font color="#000000" size="2"><font color="#003399"><strong> Modelos Operativos</strong></font></font></font></font><font color="#003399"><font color="#000000" size="2"><strong>||</strong></font></font> <font color="#003399"><strong>Moras Tard&iacute;as 2012</strong></font></font></font></font></font></div>
<p>&nbsp;</p>
	<p>&nbsp;
        </p>
</body>
</html>
<script language="JavaScript">
    function sText( sObj ){
      if( sObj.value.length == 0 ){
        sObj.value = "Ingresa tu usuario"
      }else if( sObj.value == "Ingresa tu usuario" ){
        sObj.value = "";
      }
    }
</script>