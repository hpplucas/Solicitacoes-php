<?php
	include("conect.php");

	$recmatricula=$_GET["fmatricula"];
	$recdescricao=$_GET["fdescricao"];
	$rectombo=$_GET["ftombo"];

	mysql_query($conexao, "insert into 'chamado' (matricula_usuario, descricao, tombo_equipamento) values ('$recmatricula', '$recdescricao', '$rectombo')");


	

?>