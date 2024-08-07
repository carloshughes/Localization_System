<?php
//Desarrollado por Carlos Iván Hughes Corona 
//"Modelos Operativos - Cobraza especializada 2011"

//Inicio de Sessión
session_start();

//conexion a la base de datos
include("conexion.php");

//se verifica que se salga de la aplicacion de manera segura
include("verificasessionadmi.php");


$sql = "SELECT * FROM base_captura WHERE status_cuenta = 'CONTACTO'";
$r = mysql_query( $sql ) or b_error( mysql_error($conn), E_USER_ERROR );
$return = "";
if( mysql_num_rows($r)>0){
    $return .= "<table border=1>";
	$cols = 0;
    while($rs = mysql_fetch_row($r)){
        $return .= "<tr>";
        if($cols==0){
            $cols = sizeof($rs);
            $cols_names = array();
            for($i=0; $i<$cols; $i++){
                $col_name = mysql_field_name($r,$i);
                $return .= "".'<th>'.htmlspecialchars($col_name).'</th>'."";
                $cols_names[$i] = $col_name;
            }
            $return .= '</tr><tr>';
        }
        for($i=0; $i<$cols; $i++){
            #En esta iteración podes manejar de manera personalizada datos, por ejemplo:
            if($cols_names[$i] == '"fechaAlta"'){ #Fromateo el registro en formato Timestamp
                $return .= "'".'<td>'.htmlspecialchars(date('d/m/Y H:i:s',$rs[$i])).'</td>'." ";
            }else if($cols_names[$i] == "activo"){ #Estado lógico del registro, en vez de 1 o 0 le muestro Si o No.
                $return .= '<td>'.htmlspecialchars( $rs[$i]==1? "SI":"NO" ).'</td>';
            }else{

			  $return .= "<td>"." ".htmlspecialchars ($rs[$i]). " " ."\t"."</td>";
			  //$return .= "<td>";
            }
        }
        $return .= ''.'</tr>'.'';
    }
    $return .= ''.'</table>'.'';
    mysql_free_result($r);
}
//Cambiando el content-type más las <table> se pueden exportar formatos como csv
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename= Consulta ".date('d-m-Y').".xls");
echo $return; 
?> 