<!DOCTYPE html>
<html>
<head>
	<title>Do While</title>
</head>
<body>


<?php 
	//verificando se a chave dependetes está contida no array POST pela função
	if(isset($_POST["dependentes"])){
		$dependentes = $_POST["dependentes"]; // valor na chave dependentes seja add na variavel $dependentes
			if(! is_numeric($dependentes)){
				$dependentes = 1;
				echo "não númerico";
			}

		$conta = 0;

			echo"
			<table border='1'>
			<tr>
				<th></th>
				<th>Nome:</th>
				<th>Nascimento:</th>
			</tr>
			";

		do{
			$conta = $conta +1;
			//tda vez q esse laço de repetição for executado será enviado para saída padrão e logo para o navegador do usuario o bloco abaixo-->
			echo " 
			<tr>
				<td>Dependente $conta </td>
				<td><input type='text' name='name'></td>
				<td><input type='text' name='born'></td>
			</tr> ";

		}while($conta<$dependentes); 
		echo "</table>";
	}
 ?>

		<table border="1">
		<!-- ******PARTE ESTATICA DO SITE -->
			<tr>
				<th></th>
				<th>Nome:</th>
				<th>Nascimento:</th>
			</tr>
		<!-- *******PARTE DINAMICA GERADA PELO PHP -->
			<tr>
				<td>Dependente</td>
				<td><input type="text" name="name"></td>
				<td><input type="text" name="born"></td>
			</tr>
		</table>
		<!-- ******* ENVIO PARA O PHP -->
		<form method="POST">
			<input type="text" name="dependentes">
			<input type="submit">
		</form> 
</body>
</html>