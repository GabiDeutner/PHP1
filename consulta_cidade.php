<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1", "root", "vertrigo");
mysql_select_db("teste",$db);
$result = mysql_query("select * from cidade", $db); // declarando a variável $result
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo</h1></td>
	<td><h1>Cidade</h1></td>
	<td><h1>UF</h1></td>
</tr>";
// tr é linha e td é coluna, ele escreveu uma linha (um tr) com três colunas (três td)
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) { //ele pega o que está no resultado e joga para an variável row
echo "<tr><td>".$row["codcidade"]."</td>
          <td>".$row["cidade"]."</td>
		  <td>".$row["uf"]."</td>
	  </tr><br>";
	} // tem que ser na ordem de como está no banco de dados 
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result); // mysql_free_result: é um comando para limpar a variável. Ele tira da memória do computador principal o que eu carreguei na $result, ele zera a função
mysql_close ($db); // fecha a conexão com BD, não pode deixar o banco aberto, por segurança 
?>
<!--Fim Consulta-->