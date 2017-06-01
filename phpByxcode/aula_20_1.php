<?php 
// DEFININDO ELEMENTO
$arr = ["zero", "um", "dois", "trÊs", "quatro"];
// ADICIONANDO ELEMENTO
$arr[] = "cinco"; 
//ou $arr[6] = "seis" - vinculando a chave, sendo nossa responsabilidade saber o ultimo elemento da lista

// ALTERANDO ELEMENTO
$arr[1]="ummm"; // alterando o texto associado a chave númerica 1

// EXCLUINDO ELEMENTO
unset($arr[3]); // funcao do php q remove qqr variavel passada como parametro

print_r($arr);

 ?>