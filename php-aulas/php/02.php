<?php 
if(isset($_POST['n1'])){

$n1 = $_POST['n1'];
$resultado = $n1 % 2;

	if ($resultado == 0) {
		echo "o número é par";
	}else{
		echo "o número é impar";
	}//fecha if

} // fecha isset