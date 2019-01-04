<?php
	require "conexao.php";
?>
<fieldset>
	<form method="POST">
		Nome: <br>
		<input type="text" name="nome"><br><br>

		Mensagem: <br>
		<textarea name="mensagem" cols="30" rows="10"></textarea><br><br>

		<input type="submit" value="Enviar Mensagem">
	</form>
</fieldset>
<br><br>

<?php 
	require "postagens.php";
?>