<?php 

// ARRAYS MULTIDIMENSINAL
// vinculado outro array, elemento que esta associaodo determibado a cave é outro array, varias dimensões 


#		--- array bidimensional --- 

#		| ID | NOME | PONTOS |
#		| 1  | Roger| 11     |
#		| 2  | John | 4		 |
#		| 3  | Jack | 22     |


$jogo = array(
	array("ID"=>1, "nome"=>"Roger", "pontos"=>11),
	//associando os nomes acima //
	array(2, "John", 4),
	array(3, "Jack", 22),
	);
print_r($jogo);
// pedindp pra acessar array de chave 1 e a linha 1
echo $jogo[1][1];


// OUTRA NOTACAO PARA ARRAYS

// $jogo = [
		//		[1, "Roger", 11],
			//	[2, "John", 4],
			//	[3, "Jack", 22],

	//	];

 ?>