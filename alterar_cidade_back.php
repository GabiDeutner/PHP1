
<?php
error_reporting(0);
$db =mysql_connect("127.0.0.1","root","vertrigo");
mysql_select_db("teste",$db);
$codcidade1=$_POST['codcidade'];
$cidade1=$_POST['cidade'];
$uf1=$_POST['uf'];


$alterar= mysql_query("UPDATE cidade 
                      SET cidade='$cidade1',uf='$uf1' 
					  WHERE codcidade='$codcidade1'")
		  or die(mysql_error()); // ele pega a $cidade 1 que eu digitei no campo e coloca dentro do registro de cidade no BD quando o código que eu digitei for o mesmo código do registro da tabela, assim ele só muda de um registro com código específico
mysql_close($db);
include "consulta_cidade.php"
?>

