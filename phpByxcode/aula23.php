<?php 

// ARRAYS ASSOCIATIVOS

$pontos = ["Roger"=>11, "Bryan"=>4, "Rob"=>22];
// vinculando uma string a um elemento numerico => associando uma membro a esquerda ao elemnto a direita, a chave de cada elemento é m string

	// STRING    ARRAY   CHAVE
echo "Roger:" . $pontos["Roger"] ."<br>";
echo "Bryan:" . $pontos["Bryan"]."<br>";
echo "Rob:" . $pontos["Rob"] . "<br>";
$pontos ["Roger"] +=1;
echo "incremento na chave Roger :" . $pontos["Roger"];
 ?>