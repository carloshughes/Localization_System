<?php  

define(db_host, "xxxxx");  
define(db_user, "xxxxxx");  
define(db_pass, "xxxxxx");  
define(db_link, mysql_connect(db_host,db_user,db_pass));  
define(db_name, "registro");  
mysql_select_db(db_name);  


/********************************************  
Write the query, call it, and find the number of fields  
/********************************************/  
$qry =mysql_query("SELECT * from descargas");  

$campos = mysql_num_fields($qry);    
$i=0;    

/********************************************  
Extract field names and write them to the $header  
variable  
/********************************************/ 
ob_start();  
echo "&nbsp;<center><table border=\"1\" align=\"center\">";  
echo "<tr bgcolor=\"#336666\">  
  <td><font color=\"#ffffff\"><strong>ID</strong></font></td>  
  <td><font color=\"#ffffff\"><strong>NOMBRE</strong></font></td>  
  <TD><font color=\"#ffffff\"><strong>DESCRIPCION</strong></font></TD>  
  <td><font color=\"#ffffff\"><strong>RUTA</strong></font></td>  
  <td><font color=\"#ffffff\"><strong>TIPO</strong></font></td>  
  <td><font color=\"#ffffff\"><strong>TAMAÑO</strong></font></td> 
  <td><font color=\"#ffffff\"><strong>CATEGORIA</strong></font></td> 
</tr>";  
while($row=mysql_fetch_array($qry))  
{    
    echo "<tr>";    
     for($j=0; $j<$campos; $j++) {    
         echo "<td>".$row[$j]."</td>";    
     }    
     echo "</tr>";          
}    
echo "</table>";  

//$reporte = ob_get_clean(); 

/********************************************  
Write the query, call it, and find the number of fields  
/********************************************/  
$qry2 =mysql_query("SELECT * from noticias");  

$campos2 = mysql_num_fields($qry2);    
$i2=0;    

/********************************************  
Extract field names and write them to the $header  
variable  
/********************************************/ 
//ob_start();  
echo "&nbsp;<center><table border=\"1\" align=\"center\">";  
echo "<tr bgcolor=\"#336666\">  
  <td><font color=\"#ffffff\"><strong>ID</strong></font></td>  
  <td><font color=\"#ffffff\"><strong>TITULAR</strong></font></td>  
  <TD><font color=\"#ffffff\"><strong>RESUMEN</strong></font></TD>  
  <td><font color=\"#ffffff\"><strong>NOTICIA</strong></font></td>  
  <td><font color=\"#ffffff\"><strong>IMAGEN</strong></font></td>  
  <td><font color=\"#ffffff\"><strong>FECHA</strong></font></td> 

</tr>";  
while($row2=mysql_fetch_array($qry2))  
{    
    echo "<tr>";    
     for($j2=0; $j2<$campos; $j2++) {    
         echo "<td>".$row2[$j2]."</td>";    
     }    
     echo "</tr>";          
}    
echo "</table>";  

$reporte = ob_get_clean(); 

/********************************************  
Set the automatic downloadn section  
/********************************************/ 

header("Content-type: application/vnd.ms-excel");  
header("Content-Disposition: attachment; filename=consulta.xls");  
header("Pragma: no-cache");  
header("Expires: 0");   

echo $reporte;  


?>