<?php 
	session_start();
	require_once('mysql.php');

	$matricula = $_POST['matricula'];
	$nome = $_POST['nome'];
	$ramal = $_POST['ramal'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$conexao = new Mysql();

	$conexao->insert('usuario', array('matricula' => $matricula, 'nome' => $nome, 'ramal' => $ramal, 'email' => $email, 'senha' => $senha,));

				echo "<script>javascript:window.alert('Usuario cadastrado com sucesso');</script>";
				echo "<script>javascript:window.open('index.php', '_self');</script>";

?>