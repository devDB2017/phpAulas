<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP02</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<form class="form-horizontal" name="form1" id="form1" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend class="text-center">PHP02</legend>
<p class="text-center text-uppercase">Programa: Impar/Par</p>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="n1"> Digite um número:</label>  
  <div class="col-md-4">
  <input id="n1" name="num" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button id="enviar" name="enviar" class="btn btn-warning">Enviar</button>
  </div>
</div>

</fieldset>
</form>
<?php 
	if(isset($_POST['num'])){
		
		$num = $_POST['num'];

		if($num % 2 == 0){
			echo "O número informado é par";
		}else{
			echo "O número informado é impar";
		}

	} //fecha isset
?>
</body>
</html>