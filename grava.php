<?php
	require_once("mysql.php");

	$matricula_usuario = $_POST['matricula_usuario'];
	$tombo_equipamento = $_POST['tombo_equipamento'];
	$descricao = $_POST['descricao'];
	$data_abertura = date('Y-m-d');
	$id_status = 1;
	$id_prioridade = 4;
	

	$conexao = new MySQL();

	$conexao->insert('chamado', array('matricula_usuario' => $matricula_usuario,'data_abertura' => $data_abertura, 'id_status' => $id_status, 'descricao' => $descricao, 'tombo_equipamento' =>$tombo_equipamento, 'id_prioridade' => $id_prioridade ));

				echo "<script>javascript:window.alert('Chamado cadastrado');</script>";
				echo "<script>javascript:window.open('chamado.php', '_self');</script>";



?>