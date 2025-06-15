<?php 

// print_r($_GET);
$usuario = $_GET['tipo_usuario'];
$navegador = $_GET['navegador'];

echo "El usuario es: ". $usuario . " y el navegador es: ". $navegador ;


//El método get sirve para manejar datos menos sensibles
//El método post es usado para  para manejo de datos más sencibles
?>