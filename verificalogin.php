<?php 
	session_start();
	
	if (!(isset($_SESSION['usuario'])))
	{
		echo "<script>javascript:window.alert('Efetue login para acesar');</script>";
		echo "<script>javascript:window.open('login.php', '_self');</script>";
	}

?>