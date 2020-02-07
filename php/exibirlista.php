<?php 
require_once("mysql.php");


	$conexao = new MySQL();
	$chamado = $conexao->where('id', 11)->get('chamado');
	while ($resultado = mysqli_fetch_assoc($chamado))
	 {
		  	$id = $resultado['id'];
			$matricula_usuario = $resultado['matricula_usuario'];
			$data_abertura = $resultado['data_abertura'];
			$id_status = $resultado['id_status'];
			$descricao = $resultado['descricao'];
			$tombo_equipamento = $resultado['tombo_equipamento'];
			$data_encerramento = $resultado['data_encerramento'];

}


 ?>