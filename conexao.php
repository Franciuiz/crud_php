<?php
	
	//fecha conexao com o banco
	function Fechar_Conexao_BD($conexao){
		@mysqli_close($conexao) or die(mysqli_connect_error($conexao));
	}
	
	//estabelecer conexao com o banco
	function Abrir_Conexao_BD(){
		$conexao= @mysqli_connect(DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_NOME) or die(mysqli_connect_error());
		mysqli_set_charset($conexao, DB_CHARSET) or die(mysqli_connect_error($conexao));
	
	return $conexao;
	}
	
?>