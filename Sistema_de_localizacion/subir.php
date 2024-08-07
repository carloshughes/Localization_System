<?php 


if($boton) { 
    if (is_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'])) { 
      copy($HTTP_POST_FILES['archivo']['tmp_name'], $HTTP_POST_FILES['archivo']['name']); 
      $subio = true; 
    } 

if($subio) { 
    echo "El archivo subio con exito"; 
} else { 
    echo "El archivo no cumple con las reglas establecidas"; 
} 
die(); 
} 
?> 


