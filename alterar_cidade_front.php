<!-- Inicio Alterar -->
<center>
<form method="post" action="alterar_cidade_back.php">
<br> Codigo da cidade: <select size="1" name="codcidade">

<?php
// gera lista de cidades // fazer a conexão
$db=mysql_connect("127.0.0.1","root","vertrigo");
mysql_select_db("teste",$db);
$res = mysql_query ("select * from cidade");
while ($registro = mysql_fetch_row ($res)) // mysql_fetch_row mostra quantos registros foram afetados , ou seja, enquanto um resgistro $res for afetado ele vai entrar na variavel $registro 
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod - $nome<option>\n"; // grava o código e mostra o nome 
}
?>
</select><br><br>

<br> Cidade.:<br>  
<input type="text" name="cidade">
<br> UF.:<br>  
<input type="text" name="uf">
<br><br>
<input type="submit" name="Submit" value="Alterar">
</form>
</center>