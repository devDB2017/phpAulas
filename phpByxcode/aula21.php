<?php 

// ITERANDO ARRAYS COM FOR 

$lista = ["dom", "seg","ter","qua","qui","sex"];

$qnt = count($lista); // retornar qtde de itens
echo "Quantidade de elementos contido no Array--> " . $qnt;

for($x=0; $x<$qnt; $x++){
	echo "<br>" . $x . ": " . $lista[$x]. "<br>";
}

 ?>

