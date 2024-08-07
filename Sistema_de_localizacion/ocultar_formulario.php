<html>
<head>
<title>CB Hide/Show</title>
<script type="text/javascript">
<!--
function showMe (it, box) {
var vis = (box.checked) ? "block" : "none";
document.getElementById(it).style.display = vis;
}
//-->
</script>
</head>
<body>
<h3 align="center"> This JavaScript shows how to hide divisions </h3>

<div id="div1" style="display:none">
<table border=1 id="t1">
<tr>
<td>i am here!</td>
</tr>
</table>
</div>

<form>
<input type="checkbox" name="c1" onclick="showMe('div1', this)">Show Hide Checkbox
</form>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="fcontacto">

<p>A través de donde nos has conocido:<br />

<input type="radio" name="Conocido" value="Google" id="Conocido_0" onclick="mostrarReferencia();" /> Google
<input type="radio" name="Conocido" value="Otros" id="Conocido_1" onclick="mostrarReferencia();" /> Otros
</p>

<div id="desdeotro" style="display:none;">
<p>Referencia de la oferta:</p>
<p><input type="text" name="otro" class="input" /></p>
</div>

<script type="text/javascript">
<!--
function mostrarReferencia(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.fcontacto.Conocido[1].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='block';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='none';
}
}
-->
</script>
</body>
</html> 