<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Num Impar e Par</title>
</head>
<body>
    <?php
       if(isset ($_POST ["num"])) {
           //verifica se a chave num esta contida na estrutura post
           echo $_POST["num"];
           $num = $_POST["num"];

           if($num % 2 == 0){
               echo "O n. informado é par";
           }else{
               echo "o numero é impar";
           }

       }
    ?>


    <form method="POST">
        <input type="text" name="num"/>
        <input type="submit"/>
    </form>
</body>
</html>