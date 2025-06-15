<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <style>
        body{
            background-color: #E85F79;
            font-family:Arial;
            font-size:4em;
            padding:50px;
        }
    </style>
</head>
<body>
    <?php
        $frutas = array("Pera","Manzana","Fresa");
        print_r($frutas);

        echo "<br><br>";

        echo $frutas[2];
        echo "<br><br>";
        echo count($frutas) . " elementos";
        
        echo "<br><br>";
        
        for($i=0;$i<count($frutas);$i++)
        {
            echo $frutas[$i] . "<br/>";
        }
        
        echo "<br>";
        $edades = array("Marcos" => 34,"Tania" => 23,"Omar" => 27);
        
        print_r($edades);

        echo "<br>";
        echo $edades["Tania"];
        echo "<br>";

        echo "<br>";
        echo "<br>";
        foreach($edades as $edad =>$value)
        {
            echo $edad . " tiene el valor de " . $value. "<br/>";
        }

    ?>
</body>
</html>