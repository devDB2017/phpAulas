<?php 

// INSTRUCAO SWITCH


$num = 2;

switch ($num) { 
// verifica se o valor contido variavel $num é igual a 1
 	case 1:
 		echo"o valor é igual a 1";
 		break; // finaliza o bloco de instrução abaixo
 		// caso exclua o break daqui ele desce e verifica o case 2 e depois para.
 	case 2: 
 		echo "o valor é igual a 2";
 		break;	
 	default: // quando o valor não for definido
 		echo "Estrutura default executada";
 		//nao é necessário colocar break pq nao tera mais nenhum bloco será executado após ele.
 } ?>