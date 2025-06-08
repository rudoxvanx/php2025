<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
    <style>
        body{
            background-color: #E85F79;
            text-align:center;
        }
    </style>
</head>
<body>
    <?php 
        for($i=0; $i < 10; $i++)
        {
    ?>
        <img src="pikachu.JFIF" alt=""  width="50" height="50">
    <?php
        }
        
    echo "<br><br>"
    ?>
    
    <?php 
        while(rand(1,10) !=5)
        {
    ?>
         <img src="pikachu.JFIF" alt=""  width="50" height="50">
    <?php
        } 
    ?>
</body>
</html>