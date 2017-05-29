<?php
	
	require 'dados.php';
	require 'conexao.php';
	require 'crud.php';
	
	
	$cpf_socio= $_POST['input_cpf'];
	//$nome_socio= $_POST['input_nome'];
	//$email_socio= $_POST['input_email'];
	//echo ("$cpf_socio, $nome_socio, $email_socio");
	
	//verifica se qualquer valor passado é vazio
	if($cpf_socio==null){
		echo ("Digite um campo valido");
	}
	else{
	
		//Deletar
		$query= "DELETE FROM socio where cpf='$cpf_socio'";
	
		//Chama função de abrir conexão, executar a query e fechar a conexão (crud.php)
		if(var_dump(Executar_query($query))){
			echo ("Operação não realizada");
		}else
		{
			echo ("Operação realizada com sucesso");
		}
	}
?>
<!DOCTYPE html>

<a href="index.php">voltar</a>