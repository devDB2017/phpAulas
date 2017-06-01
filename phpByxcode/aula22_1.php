<?php 

// ITERANDO E ALTERANDO VALORES

$nums = range(0, 10); //array de sequencia numerica funçao range
foreach ($nums as $key => &$value) {
	// a letra & esta passando referencia de enedereço do valor armazenado na variavel $value e sua chave recebe o valor da conta do bloco abaixo
	$value *= 10;
	echo $value . "<br>";
}
print_r($nums);

// VALORES ABAIXO DA CHAVE 

// Array ( [0] => 0 [1] => 10 [2] => 20 [3] => 30 [4] => 40 [5] => 50 [6] => 60 [7] => 70 [8] => 80 [9] => 90 [10] => 100 )
 ?>