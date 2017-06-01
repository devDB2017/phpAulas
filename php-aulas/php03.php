<?php 
// ****** PRIMEIRA DEFINICAO DE ARRAYS INDEXADOS
$cores = array("azul","amarelo","verde","branco"); 
// 4 parametros string no array
print_r($cores); //imprimindo --->

#					Array ( 
#						[0] => azul (associaado a chave 0)
#						[1] => amarelo 
#						[2] => verde 
#						[3] => branco 
#						)
// ****** SEGUNDA DEFINICAO DE ARRAYS INDEXADOS
#	---NESTE CASO NÓS Q ESTAMOS VINCULANDO O VALOR A CHAVE
#	---obs: para executar transf em comentrio o bloco acima
$cores2[0] = "Azul"; // vinculando a string Azul ao indice = 0
$cores2[1] = "amarelo";
$cores2[2] = "verde";
$cores2[3] = "branco";				 
print_r($cores2);

// ****** TERCEIRA DEFINICAO DE ARRAYS INDEXADOS
$cores3[]="Azul"; //o php será responsavel por definir a chave
$cores3[]="amarelo";
$cores3[]= "verde";
$cores3[]="branco";
print_r($cores3);

// ****** QUARTA DEFINICAO DE ARRAYS INDEXADOS
$cores4 = ["Azul","Amarelo","Verde","branco"];
print_r($cores4);
?>

