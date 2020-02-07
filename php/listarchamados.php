<?php 
require_once("mysql.php");


function listar(){
$conexao = new MySQL();
$chamado = $conexao->order_by('id','ASC')->get('chamado');
while ($resultado = mysqli_fetch_assoc($chamado)) 
	{ 
		
		  echo "<tr class='odd gradeX'>";
          echo "<td>{$resultado['id']}</td>";
          echo "<td>{$resultado['id_status']}</td>";
          echo "<td>{$resultado['id_prioridade']}</td>";
          echo "<td class='center'>{$resultado['data_abertura']}</td>";
          echo "</tr>";
       
	}

	}
 ?>