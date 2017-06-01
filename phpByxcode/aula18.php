<!DOCTYPE html>
<html>
<head>
	<title>Aula Switch</title>
</head>
<body>

<form method="POST">
	<select name="mes">
		<option value="1">Janeiro</option>
		<option value="2">Feveiro</option>
		<option value="3">Março</option>
		<option value="4">Abril</option>
		<option value="5">Maio</option>
		<option value="6">Junho</option>
		<option value="7">Julho</option>
		<option value="8">Agosto</option>
		<option value="9">Setembro</option>
		<option value="10">Outubro</option>
		<option value="11">Novembro</option>
		<option value="12">Dezembro</option>
	</select>
	<input type="submit">
</form>

<?php 

	if(isset($_POST["mes"])){
		$mes = $_POST["mes"];
		switch ($mes) {
			case 1:
				echo "Janeiro";
				break;
			case 2:
				echo "Feveiro";
				break;
			case 3:
				echo "Março";
				break;
			case 4:
				echo "Abril";
				break;
			case 5:
				echo "Maio";
				break;
			case 6:
				echo "Junho";
				break;
			case 7:
				echo "Julho";
				break;
			case 8:
				echo "Agosto";
				break;
			case 9:
				echo "Setembro";
				break;
			case 10:
				echo "Outubro";
				break;
			case 11:
				echo "Novembro";
				break;
			case 12:
				echo "Dezembro";
				break;
			default:
				# code...
				break;
		}
	}

 ?>
</body>
</html>