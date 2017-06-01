<!DOCTYPE html>
<html>
<head>
	<title>Tela de Login e Senha</title>
</head>
<body>

<?php 

	$login = "drilify";
	$senha = "123";
	if(isset($_POST["login"])){
		// echo $_POST["login"];
		// echo $_POST["password"];
		if ($_POST["login"] == $login and $_POST["password"] == $senha) {
			echo "Login efetuado com sucesso";
		}else{
			echo "Login ou senha errado";
		}
	}
 ?>
<form method="POST">
	<input type="text" name="login"> <br><br>
	<input type="password" name="password">
	<input type="submit">
</form>
</body>
</html>