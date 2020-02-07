<?php 
	session_start();

	require_once('mysql.php');
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$conexao = new Mysql();

	$verifica = $conexao->where('email', $email)->get('usuario'); 
	$resultado = mysqli_fetch_assoc($verifica); 
	
		if ($resultado['email'] != "")
		{
			if ($resultado['senha'] == $senha)
			{
				$_SESSION['usuario'][0] = $resultado['matricula'];
				$_SESSION['usuario'][1] = $resultado['nome'];
				$_SESSION['usuario'][2] = $resultado['ramal'];
				$_SESSION['usuario'][3] = $resultado['email'];
				$_SESSION['usuario'][4] = $resultado['id_tipo_usuario'];

				echo "<script>javascript:window.open('abrirchamados.php', '_self');</script>";
			}
			else
			{
				
				echo "<script>javascript:window.alert('Senha Invalida');</script>";
				echo "<script>javascript:window.open('index.php', '_self');</script>";
			}
		}
		else
		{
				echo "<script>javascript:window.alert('Usuario não cadastrado');</script>";
				echo "<script>javascript:window.open('index.php', '_self');</script>";
		}	
	
 ?>