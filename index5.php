<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>Include y require</title>
	<style>
		#container{width: 500px; margin: 150px auto;}
		#footer{background-color: #222; padding: 10px; color: white;}
		#menu{background-color: #eee; padding: 10px;}
	</style>
</head>
<body>
    <div id="container">
        <?php 
            include("menu.php");
        ?>
        <h3>Conetenido principal</h3>
        <?php
            include("footer.php")
        ?>
    </div>
</body>
</html>