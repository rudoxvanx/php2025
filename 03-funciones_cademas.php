<?php 
    $mensaje = "Hoy voy a aprender mucho";
    
    //longitud de cadenas
    echo strlen($mensaje);
    echo "<br>";

    //numero de palabras
    echo str_word_count($mensaje);
    echo "<br>";

    //reversa
    echo strrev($mensaje);
    echo "<br>";

    //Encontrar posicion de texto
    echo strpos($mensaje,"aprender");
    echo "<br>";

    //Reemplazar texto
    echo str_replace("aprender","nadar",$mensaje);
    echo "<br>";

    //Convertir a minuscular
    echo strtolower($mensaje);
    echo "<br>";

    //Comparar cadenas
    echo strcmp("alberto","rodolfo");
    echo "<br>";
    echo substr($mensaje,strpos("aprender",$mensaje));
    echo "<br>";

    //Obtener una subcadena
    echo substr($mensaje,10,7);
    echo "<br>";
    
    //Remover espacios en blanco
    echo trim("          Hola         soy   Rodolfo");
    
?>