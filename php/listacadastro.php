<?php 
require_once("mysql.php");


function listacadastro(){
$conexao = new MySQL();
$usuario = $conexao->order_by('matricula','ASC')->get('usuario');
while ($resultado = mysqli_fetch_assoc($usuario)) 
	{ 
		
		  echo "<tr class='odd gradeX'>";
          echo "<td>{$resultado['matricula']}</td>";
          echo "<td>{$resultado['nome']}</td>";
          echo "<td>{$resultado['ramal']}</td>";
          echo "<td>{$resultado['email']}</td>";
          echo "</tr>";
       
	}

	}
 ?>