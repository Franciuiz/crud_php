<?php
	
	
	
	//executa query
	function Executar_query($query){
		$link = Abrir_Conexao_BD();
		
		$result = @mysqli_query($link, $query) or die(mysqli_error());
		
		Fechar_Conexao_BD($link);
		return $result;
	}

?>