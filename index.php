<!DOCTYPE html>
<html>
	<head>

		<title>PhP</title>
	</head>
	<body>
		<fieldset>
			<h3>Cadastrar</h3>
			<form method="post" action="cadastrar.php">
				CPF: <input type="number" name="input_cpf" placeholder="Digite o CPF" />
				Nome: <input type="text" name="input_nome" placeholder="Digite o Nome" />
				Email: <input type="email" name="input_email" placeholder="Digite o Email" />
			
				<input type="submit" value="Cadastrar" />
			</form>
		</fieldset>
		<br />
		<fieldset>
			<h3>Buscar</h3>
			<form method="post" action="selecionar.php">
				Buscar por CPF: <input type="number" name="input_cpf" placeholder="Digite o CPF" />
			
				<input type="submit" value="Buscar" />
			</form>
		</fieldset>
		<br />
		<fieldset>
			<h3>Alterar</h3>
			<form method="post" action="alterar.php">
				<h4>Digite o cpf atual</h4>
				CPF: <input type="number" name="input_cpf" placeholder="Digite o CPF" />
				<h4>Digite os novos valores</h4>
				Nome: <input type="text" name="input_nome" placeholder="Digite o Nome" />
				Email: <input type="email" name="input_email" placeholder="Digite o Email" />
			
				<input type="submit" value="Alterar" />
			</form>
		</fieldset>
		<br />
		<fieldset>
			<h3>Deletar</h3>
			<form method="post" action="Deletar.php">
				CPF: <input type="number" name="input_cpf" placeholder="Digite o CPF" />
			
				<input type="submit" value="Deletar" />
			</form>
		</fieldset>
	</body>
</html>