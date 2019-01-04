<?php 
	try{
		$pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost", "will", "will");
	}catch(PDOException $e){
		echo "ERRO: ".$e->getMessage();
		exit;
	}

	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = $_POST['nome'];
		$msg = $_POST['mensagem'];

		$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg,  data_msg = NOW();");
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":msg", $msg);
		$sql->execute();

		header("Location: index.php");
	}