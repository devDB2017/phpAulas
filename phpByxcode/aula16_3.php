<?php 

//incialmente verificando (isset) se a chave texto1 existe no URL, se existir será impresso senão aparecerar a frase

$txt = isset($_GET["texto1"]) ? $_GET["texto1"] : "A chave não existe";
echo $txt;

//	O MESMO PROCEDIMENTO USANDO IF/ELSE // 

# 				if (isset($_GET["texto"])){
#					$txt = $_GET["texto"];
#				}else{
#					$txt = "a chave não existe"
#				}
#				echo $txt;

 ?>