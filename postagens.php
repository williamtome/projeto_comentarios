<?php
	$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC;";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $msg):
			?>
			<strong><?php echo $msg['nome']; ?></strong>
			<?php echo $msg['msg']; ?>
			<hr>
			<?php
		endforeach;
	} else {
		echo "Não há mensagens!";
	}