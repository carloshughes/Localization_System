<?php
if($archivo){ 
$nombre_archivo = $HTTP_POST_FILES['userfile']['name'];  /// fijate aqui nos da le nombre del archivo 
$tipo_archivo = $HTTP_POST_FILES['userfile']['type'];  
$tamano_archivo = $HTTP_POST_FILES['userfile']['size'];  
$nombre_dir = "Sistema_de_localizacion/fotos"; // este es el dir donde lo quieres meter 
$nombre_ruta = $nombre_dir. "/".$nombre_archivo  ; // y aqui le das la ruta, te pongo la barra en medio pero puede ir en la variable $nombre_dir 
if  (is_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'])) 
{ 
  	 if(!move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_ruta))
	 {  
         // lo que le decimos es qu sin nos devuelve false, pues nos dara el error 
		header ("Location: Exito.php");
	 } 
}
else { 
    //echo "El archivo no cumple con las reglas establecidas"; 
	header ("Location: error_formulario.php");
	} 
die(); 
} 

if(isset($enviar)){ 
$nombre_archivo = $HTTP_POST_FILES['userfile']['tmp_name'];  
$tipo_archivo = $HTTP_POST_FILES['userfile']['type'];  
$tamano_archivo = $HTTP_POST_FILES['userfile']['size'];  
$nombre_dir = "fotos"; 
$nombre_ruta = $nombre_dir . $nombre_archivo; 
if (is_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'])) { 
    move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_ruta); 
    //if  (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_ruta)){  
       echo "El archivo ha sido cargado correctamente.";  
       echo "<h2>Se ha transferido el archivo $nombre_archivo</h2>"; 
      echo "<br>Su tamaño es: $archivo_size bytes<br>"; 
      echo "<br>El fichero es tipo: $tipo_archivo<br>"; 
    }else{  
       echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";  
    }  
} 

?>