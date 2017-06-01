<!DOCTYPE html>
<html>
<head>
	<title>Boirplate1</title>
</head>
<body>


<?php
	if(isset ($_POST['idade'])){ // pergntando se essa chave esta difinidade no array de nome post pela primeira vez
		$idade = $_POST['idade']; //capturando valor do campo idade do html
		if($idade <18){
			echo "A idade é de uma criança ou adolescente";
		}elseif ($idade>=18 and $idade <60) {
			echo "A idade é de um Adulto";
		}else{ // neste caso nao entra condicao como elseif
			echo "A idade é de uma pessoa da Terceira idade";
		}
	}

?>
</body>
	<h3>Digite sua idade:</h3>
	<!-- O valor é digitado é levado para o PHP e impresso acima do campo input -->
	<form method="POST">
		<input type="text" name="idade">
		<input type="submit">
	</form>
</html>