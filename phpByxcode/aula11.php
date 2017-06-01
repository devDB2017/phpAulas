<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Teste</title>
 <style>
  *{
   font-size: 100%;
   font-family: Arial, sans-serif;
   color: #777;
  }
  table,td, th{
   border: 1px solid rgba(0,0,0,0.3);
   border-collapse: separate;
   border-spacing: 0;
  }
  th, td{
   padding: 5px 10px;
  }
  form{
   margin-top: 15px;
  }
  input{
   padding: 10px;
  }
  input:focus{
   outline: none;
  }
 </style>
</head>
<body>
 <?php
  if(isset($_POST["value"])){
   $num = $_POST["value"];
   if(!is_numeric($num)){
    echo "Não Númerico!";
   }else{
    $n = 0; 
   echo"<table>
    <tr>
     <th colspan='2'>Nome</th>
     <th>Nasc</th>
    </tr>";
    do{
    $n++;
   echo "<tr>
     <td>Dependente&nbsp;".$n."</td>
     <td><input type='text' name='nome'></td>
     <td><input type='text' name='nsc'></td>
      </tr>";
    }while($n<$num);
   echo "</table>";
   }  
  } 
 ?>
 <form method="POST">
  <p><label for="vl">Valor:&nbsp;</label>
  <input type="number" name="value" placeholder="Entre com o Valor" min="0">
  <input type="submit" value="Enviar">
  </p>
 </form>
</body>
</html>﻿