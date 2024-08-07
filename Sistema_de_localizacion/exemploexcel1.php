<?php  
$path="C:\AppServ\www\Sistema_de_localizacion/";


$directorio=dir($path);
echo "Directorio ".$path.":<br><br>";
while ($archivo = $directorio->read())
{
   echo $archivo."<br>";
}
$directorio->close();

?>  

<form name=m method="POST" >
  <div align="center">
  <object width=518 height=366
  classid="CLSID:106E49CF-797A-11D2-81A2-00E02C015623">
    <param name="src" value="4555006248405738.tif">
    <param name="" value="yes">
    <embed width=518 height=366 src="4555006248405738.tif" type="image/tiff" negative=no>
   </object>
 <center>
</form>