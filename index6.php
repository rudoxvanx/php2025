<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones</title>
	<style>
		body{background-color: #5492D1; font-family: Arial;}
		#container{background: white; padding: 10px; width: 400px; margin: 150px auto;}
		.error{color: red;}
	</style>
</head>
<body>
	<div id="container">
		<h2>Multiplicaciones</h2>
        <?php
            $n1=''; $n2='';
            include("operaciones.php");
            validarCampos($n1,$n2);	
        ?>
		<form action="index6.php" method="POST">
			<input type="text" name="numero1" value=<?php echo $n1 ?>>
			<input type="text" name="numero2" value=<?php echo $n2 ?>>

			<input type="submit" value="Calcular">
		</form>
        <?php 
            
            
        ?>
	</div>
</body>
</html>