ENVIANDO DADOS PREENCHIDOS NO FORM PARA BANCO DE DADOS VIA PDO


<?php

// 1) pegar os dados obtidos pelo formulário e guardar em variáveis
//CRIAR VARIAVEL CONECTA COM DADOS DO HOST

$conecta = new PDO ("mysql:host=localhost;dbname=banco;","root","");
$nome 	 = $_POST['nome'];
$email 	 = trim($_POST['email']);
$senha1  = $_POST['senha1'];

// CRIAR VAR PRA GUARDAR DADOS INSERIDOS DA TABELA “cadastro”
$sql='insert into cadastro (id,nome,email,senha) values (null,"'.$nome.'","'.$email.'","'.$senha1.'")';

//VAR INSERE E CONECTA PRA EXECUTAR O A VAR SQL
$insere = $conecta->prepare($sql);
$insere->execute();

//IMPRIMINDO MENSAGEM DE SUCESSO
echo("Cadastro efetuado!");

?>