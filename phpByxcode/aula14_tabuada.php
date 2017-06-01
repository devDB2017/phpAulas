<!DOCTYPE html>
<html>
<head>
	<title>TABUADA</title>
</head>
<body>

	<h3>DIGITE O VALOR PARA TABUADA</h3>
	<form method="POST">
			<input type="text" name="tabuada">
			<input type="submit">
	</form>

	<?php 
	$tab = 0;
	if(isset($_POST["tabuada"])){
		$tab = $_POST ["tabuada"];
		if(! is_numeric($tab)){
			echo "não é um valor númerico";
		}else{

				//$num x $tab = 
				// 0 x 5 = 0 ($tab é o valor digitado pelo usuario)
				// 1 x 5 = 5 (1 é o incremento ++ no laço de repetição)

			for ($num = 0; $num <=10 ; $num++) { 
				echo $num . "x" . $tab . "=" . ($num * $tab) . "<br>";
			} // feachamento do fOR
		} // fecahamento do ELSE
	} // fechamento do IF is_numeric


			// estrutura While
			// $num =0
			// while ($num<= 10) {
			// 	echo $num . "x" . $tab . "=" . ($num * $tab) . "<br>"$num++;
			// }

	 ?>

</body>
</html>