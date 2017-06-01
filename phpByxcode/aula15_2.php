<?php 
//	 imprimir n. PAR e usar Continue

for ($i=0 ; $i<100; $i++){

	//verifcando de o resto da divisao (modulo) é = a 1
	if($i % 2 == 1){
		continue;
	}
	echo $i . "<br>";
}

 ?>
