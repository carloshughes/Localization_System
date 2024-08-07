<?php
session_start();
   //Incluir a classe excelwriter
   include("excelwriter.inc.php");
   include("conexion.php");
    //Você pode colocar aqui o nome do arquivo que você deseja salvar.
    $excel=new ExcelWriter("Consulta.xls");

    if($excel==false){
        echo $excel->error;
   }
   //Escreve o nome dos campos de uma tabela
   $myArr=array('eslabon','nombre','turno','numero_cte','contrato','cuenta','saldo','mora','ciclo','producto','cliente', 'base', 'telefono_1','extension_1','ca_1','cr_1','tipo_1','status_tel1','telefono_2','extension_2','ca_2','cr_2','tipo_2','status_tel2','telefono_3','extension_3','ca_3','cr_3','tipo_3','status_tel3','telefono_4','extension_4','ca_4','cr_4','tipo_4','status_tel4','telefono_5','extension_5','ca_5','cr_5','tipo_5','status_tel5','telefono_6','extension_6','ca_6','cr_6','tipo_6','status_tel6','telefono_7','extension_7','ca_7','cr_7','tipo_7','status_tel7','telefono_8','extension_8','ca_8','cr_8','tipo_8','status_tel8','telefono_9','extension_9','ca_9','cr_9','tipo_9','status_tel9','telefono_10','extension_10','ca_10','cr_10','tipo_10','status_tel10','nombre_ref_1','telefono_ref_1','nombre_ref_2','telefono_ref_2','nombre_ref_3','telefono_ref_3','nombre_beneficiario','telefono_beneficiario','domicilios_alternos_1','domicilios_alternos_2','email_1','email_2','observaciones','status_cuenta','status_email','hora','fecha');
   $excel->writeLine($myArr);

   //Seleciona os campos de uma tabela
	/*$conn = mysql_connect("localhost", "root", "hughes") or die ('Não foi possivel conectar ao banco de dados! Erro: ' . mysql_error());
	if($conn)
	{
	mysql_select_db("localizacion", $conn);
	}*/
   $consulta = "select * from nueva_base_captura where status_cuenta ='CONTACTO' and fecha ='". $_REQUEST["fecha"] ."'";
   $resultado = mysql_query($consulta);
   if($resultado==true){
      while($linha = mysql_fetch_array($resultado)){
         $myArr=array($linha['eslabon'],$linha['nombre'],$linha['turno'],$linha['numero_cte'],$linha['contrato'],$linha['cuenta'],$linha['saldo'],$linha['mora'],$linha['ciclo'],$linha['producto'],$linha['cliente'], $linha['base'], $linha['telefono_1'],$linha['extension_1'],$linha['ca_1'],$linha['cr_1'],$linha['tipo_1'],$linha['status_tel1'],$linha['telefono_2'],$linha['extension_2'],$linha['ca_2'],$linha['cr_2'],$linha['tipo_2'],$linha['status_tel2'],$linha['telefono_3'],$linha['extension_3'],$linha['ca_3'],$linha['cr_3'],$linha['tipo_3'],$linha['status_tel3'],$linha['telefono_4'],$linha['extension_4'],$linha['ca_4'],$linha['cr_4'],$linha['tipo_4'],$linha['status_tel4'],$linha['telefono_5'],$linha['extension_5'],$linha['ca_5'],$linha['cr_5'],$linha['tipo_5'],$linha['status_tel5'],$linha['telefono_6'],$linha['extension_6'],$linha['ca_6'],$linha['cr_6'],$linha['tipo_6'],$linha['status_tel6'],$linha['telefono_7'],$linha['extension_7'],$linha['ca_7'],$linha['cr_7'],$linha['tipo_7'],$linha['status_tel7'],$linha['telefono_8'],$linha['extension_8'],$linha['ca_8'],$linha['cr_8'],$linha['tipo_8'],$linha['status_tel8'],$linha['telefono_9'],$linha['extension_9'],$linha['ca_9'],$linha['cr_9'],$linha['tipo_9'],$linha['status_tel9'],$linha['telefono_10'],$linha['extension_10'],$linha['ca_10'],$linha['cr_10'],$linha['tipo_10'],$linha['status_tel10'],$linha['nombre_ref_1'],$linha['telefono_ref_1'],$linha['nombre_ref_2'],$linha['telefono_ref_2'],$linha['nombre_ref_3'],$linha['telefono_ref_3'],$linha['nombre_beneficiario'],$linha['telefono_beneficiario'],$linha['domicilios_alternos_1'],$linha['domicilios_alternos_2'],$linha['email_1'],$linha['email_2'],$linha['observaciones'],$linha['status_cuenta'],$linha['status_email'],$linha['hora'],$linha['fecha']);
         $excel->writeLine($myArr);
      }
   }
    $excel->close();
    
//Cambiando el content-type más las <table> se pueden exportar formatos como csv
echo $return; 
header("Location:Consulta.xls");
?>
