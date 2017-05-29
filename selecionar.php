<?php
	
	require 'dados.php';
	require 'conexao.php';
	require 'crud.php';
	
	
	$cpf_socio= $_POST['input_cpf'];
	
	//$nome_socio= $_POST['input_nome'];
	//$email_socio= $_POST['input_email'];
	//echo ("$cpf_socio, $nome_socio, $email_socio");

	
	//Alterar
	if($cpf_socio==null){
		$query= "SELECT * from socio";
	}
	else{
		$query= "SELECT * from socio WHERE cpf= '$cpf_socio'";
	}
	
	
	
	
	$link = Abrir_Conexao_BD();
		
		//executa a query e atribui a uma variavel
		$listar = @mysqli_query($link, $query) or die(mysqli_error());
		

		//cria uma tabela e imprime todas as linhas do banco
		echo "<table border=1>";
		
		echo "<tr>";
		echo "<th>"; echo "cpf"; echo "</th>";
		echo "<th>"; echo "nome"; echo "</th>";
		echo "<th>"; echo "email"; echo "</th>";
		echo "</tr>";
		
	while($row= mysqli_fetch_array($listar)){
		echo "<tr>";
		echo "<td>"; echo $row["cpf"]; echo "</td>";
		echo "<td>"; echo $row["nome"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "</tr>";
	}
		
		echo "</table>";
		
	Fechar_Conexao_BD($link);
	
?>
<!DOCTYPE html>

<a href="index.php">voltar</a>