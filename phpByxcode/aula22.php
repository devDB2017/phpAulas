<?php 

// Estrutura Foreach com acesso a chaves

$lista = ["dom", "seg", "ter", "qua", "quin", "sex","sab"];
foreach ($lista as $chave => $valor) {
	echo "$chave: $valor <br>";
}
						// 0: dom 
						// 1: seg 
						// 2: ter 
						// 3: qua 
						// 4: quin 
						// 5: sex 
						// 6: sab 
 ?>