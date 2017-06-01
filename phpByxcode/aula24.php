<?php 

// VERIFICA SE A ESTRUTUTA É array()

echo "Função: is_array()" . "<br>";
echo "Valor = []" . is_array([]) . "<br>";
echo "Valor = array()" . is_array( array ()) . "<br>";
echo "Valor = [1, 2, 3]" . is_array( [1, 2, 3]) . "<br>";
echo "Valor = 1 ". is_array( 1) . "<br>";

// VERIFICA SE UM ELEMENO ESTA CONTIDO 
echo "Função: in_array(valor, array)" . "<br>";
echo "Valor = in_array (2[1,2,3, 4, 5])" . in_array (2, [1, 2, 3, 4, 5]) . "<br>";
echo "Valor = in_array (6[1,2,3, 4, 5])" . in_array (6, [1, 2, 3, 4, 5]) . "<br>";

// ORDENACAO

echo "Função : sort()";
$arr = ["c", "a", "b", "f"];
sort($arr);
print_r($arr);

// INVERSAO

echo "Função: array_reverse" . "<br>";
$arr = ["c", "a", "b", "f"];
$arr = array_reverse($arr);
print_r($arr);

// SOMA
echo "Função: array_sum()" . "<br>";
$arr = [1, 2, 3, 4];
echo "A soma de todos :" .  array_sum($arr);
echo "<br>";

// JUNÇÃO DE ARRAYS

echo "Função: array_merge()" . "<br>";
$arr1 = [1, 2];
$arr2 = ["a", "b"];
$x = array_merge ($arr1, $arr2);
print_r($x);
 ?>