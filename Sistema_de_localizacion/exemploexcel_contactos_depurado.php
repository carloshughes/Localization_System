<?php
session_start();
   //Incluir a classe excelwriter
   include("excelwriter.inc.php");
   include("conexion.php");
    //Voc� pode colocar aqui o nome do arquivo que voc� deseja salvar.
    $excel=new ExcelWriter("Consulta.xls");

    if($excel==false){
        echo $excel->error;
   }
   //Escreve o nome dos campos de uma tabela
   $myArr=array('numero_cte','contrato','cuenta','saldo','mora','ciclo','producto','telefono_1','extension_1','cr_1','tipo_1','telefono_2','extension_2','cr_2','tipo_2','telefono_3','extension_3','cr_3','tipo_3','telefono_4','extension_4','cr_4','tipo_4','telefono_5','extension_5','cr_5','tipo_5','telefono_6','extension_6','cr_6','tipo_6','telefono_7','extension_7','cr_7','tipo_7','telefono_8','extension_8','cr_8','tipo_8','telefono_9','extension_9','cr_9','tipo_9','telefono_10','extension_10','cr_10','tipo_10','email_1','email_2','observaciones','status_cuenta','fecha','cliente','base');
   $excel->writeLine($myArr);

   //Seleciona os campos de uma tabela
	/*$conn = mysql_connect("localhost", "root", "hughes") or die ('N�o foi possivel conectar ao banco de dados! Erro: ' . mysql_error());
	if($conn)
	{
	mysql_select_db("localizacion", $conn);
	}*/
	//$consulta = "select * from nueva_base_captura where status_cuenta ='CONTACTO' and fecha ='". $_REQUEST["fecha"] ."'";

	$consulta = "SELECT numero_cte, contrato, cuenta, producto, saldo, mora, ciclo, telefono_1, extension_1, cr_1, tipo_1, telefono_2, extension_2, cr_2, tipo_2, telefono_3, extension_3, cr_3, tipo_3, telefono_4, extension_4, cr_4, tipo_4, telefono_5, extension_5, cr_5, tipo_5, telefono_6, extension_6, cr_6, tipo_6, telefono_7, extension_7, cr_7, tipo_7, telefono_8, extension_8, cr_8, tipo_8, telefono_9, extension_9, cr_9, tipo_9, telefono_10, extension_10, cr_10, tipo_10, email_1, email_2, observaciones, status_cuenta, fecha, cliente, base FROM nueva_base_captura  WHERE status_cuenta = 'CONTACTO' and fecha ='". $_REQUEST["fecha"] ."'";
   
//consulta = "select e1.cuenta, 'cuenta', e1.telefono_1 'tel_1', e1.status_tel1 'status_1', e2.cuenta 'cuenta', e2.cuenta 'cuenta', e2.telefono_1 'tel_2', e2.status_tel2 'status_2' from nueva_base_captura e1 join nueva_base_captura e2 on e1.cuenta=e2.cuenta 


   $resultado = mysql_query($consulta);
   if($resultado==true){
      while($linha = mysql_fetch_array($resultado)){
         $myArr=array($linha['numero_cte'],$linha['contrato'],$linha['cuenta'],$linha['saldo'],$linha['mora'],$linha['ciclo'],
		 $linha['producto'],$linha['telefono_1'],$linha['extension_1'],$linha['cr_1'],$linha['tipo_1'],$linha['telefono_2'],$linha['extension_2'],$linha['cr_2'],$linha['tipo_2'],$linha['telefono_3'],$linha['extension_3'],$linha['cr_3'],$linha['tipo_3'],$linha['telefono_4'],$linha['extension_4'],$linha['cr_4'],$linha['tipo_4'],$linha['telefono_5'],$linha['extension_5'],$linha['cr_5'],$linha['tipo_5'], $linha['telefono_6'],$linha['extension_6'],$linha['cr_6'],$linha['tipo_6'], $linha['telefono_7'],$linha['extension_7'],$linha['cr_7'],$linha['tipo_7'], $linha['telefono_8'],$linha['extension_8'],$linha['cr_8'],$linha['tipo_8'], $linha['telefono_9'],$linha['extension_9'],$linha['cr_9'],$linha['tipo_9'], $linha['telefono_10'],$linha['extension_10'],$linha['cr_10'],$linha['tipo_10'], $linha['email_1'],$linha['email_2'],$linha['observaciones'],$linha['status_cuenta'],$linha['fecha'], $linha['cliente'], $linha['base']);
         $excel->writeLine($myArr);
      }
   }
    $excel->close();
    
//Cambiando el content-type m�s las <table> se pueden exportar formatos como csv
echo $return; 
header("Location:Consulta.xls");
?>
