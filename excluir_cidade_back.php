<?php
error_reporting(0);
$db = mysql_connect("127.0.0.1","root","vertrigo");
mysql_select_db("teste",$db);
$codcidade1=$_POST['codcidade'];

$excluir = mysql_query("DELETE FROM cidade
			 WHERE codcidade = '$codcidade1'")
			or die(mysql_error()); // excluir o registro de cidade no banco de dados quando o codigo que eu digitei é igual ao codigo no registro, assim ele exclui um registro esoecífico 
mysql_close ($db);
include "consulta_cidade.php"
?>