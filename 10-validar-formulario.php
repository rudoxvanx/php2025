<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario</title>
	<style>
		body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 400px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 380px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="10-validar-formulario.php" method="POST">
		<?php
            $nombre = "";
            $password = "";
            $email = "";
            $pais = "";
            $nivel = "";
            
            $lenguajes = array();
            
            if(isset($_POST['nombre']))
            {
                $nombre = $_POST['nombre'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $pais = $_POST['pais'];
               
                if(isset($_POST['lenguajes']))
                   $lenguajes = $_POST['lenguajes'];
                else 
                   $lenguajes= [];

                $campos = array();

                if(isset($_POST['nivel']))
                    $nivel = $_POST['nivel'];

                if($nombre == "")
                 array_push($campos,"El campo nombre no puede estar vacio");

                if($password == "" || strlen($password) < 6)
                   array_push($campos,"El campo password no pueede estar vacio, ni tener menos de 6 caracteres");

                if($pais == "")
                   array_push($campos,"Selecciona un país de origen");
                
                if($email == "" || strpos($email, "@") === false)
                   array_push($campos,"El correo electronico no puede estar vacio");

                if($nivel=="")
                   array_push($campos,"Seleccionada un nivel de desarrollo");
                
                if($lenguajes == "" || count($lenguajes) < 2)
                 array_push($campos,"Selecciona al menos dos lenguajes de programación");

                if(count($campos) > 0)
                {
                    echo "<div class='error'>";
                    for($i = 0; $i<count($campos); $i++)
                    {
                        echo "<li>{$campos[$i]}</li>";
                    }
                }else{
                    echo "<div class='correcto'>
                           Datos correctos";     
                }
                echo "</div>"; 
            }
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value=<?php echo $nombre?>>
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password" value=<?php echo $password?>>
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email" value=<?php echo $email?>>
		</p>

        <p>
		pais:<br/>
		<select name="pais">
            <option value="">Selecciona una país</option>
            <option value="mx" <?php echo $pais == 'mx'?  'selected':' '?>>México</option>
            <option value="ar" <?php echo $pais == 'ar'?  'selected':' '?>>Argentina</option>
            <option value="ch" <?php echo $pais == 'ch'?  'selected':' '?>>Chile</option>
        </select>
		</p>
        <p>
            Nivel de desarrollo
            <input type="radio" name="nivel" value="principiante" <?php echo $nivel == 'principiante'?  'checked':' '?>> Principiante
            <input type="radio" name="nivel" value="intermedio" <?php echo $nivel == 'intermedio'?  'checked':' '?>>Intermedio
            <input type="radio" name="nivel" value="avanzado" <?php echo $nivel == 'avanzado'?  'checked':' '?>>Avanzado
        </p>

        <p>
            Lenguajes de programación <br>
            <input type="checkbox" name="lenguajes[]" value="PHP" <?php  if(in_array("PHP",$lenguajes)) echo 'checked' ?> >PHP
            <input type="checkbox" name="lenguajes[]" value="Javascript" <?php  if(in_array("Javascript",$lenguajes)) echo 'checked' ?>>Javascript
            <input type="checkbox" name="lenguajes[]" value="Java" <?php  if(in_array("Java",$lenguajes)) echo 'checked' ?>>Java
            <input type="checkbox" name="lenguajes[]" value="Swift" <?php  if(in_array("Swift",$lenguajes)) echo 'checked' ?>>Swift
            <input type="checkbox" name="lenguajes[]" value="Python" <?php  if(in_array("Python",$lenguajes)) echo 'checked' ?>>Python
        </p>

		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>