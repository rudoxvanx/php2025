<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar datos</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="main-container">
        <form id="nuevo-pendiente-container" action="index.php" method="POST">
            <input type="text" name="texto" id="texto">
            <input type="submit" value="Añadir pendiente">
        </form>

        <div id="mostrar-todo-container">
            <form id="formMostrarTodo" action="index.php" method="POST">
                <input type="checkbox" name="mostrar-todo" <?php if(isset($_POST['mostrar-todo']) && $_POST['mostrar-todo'] == 'on' ) echo 'checked'; ?> onchange="mostrarTodo(this)">
                <label for="" style="padding-left:9px;"> Mostrar todo</label>
            </form>
        </div>
        <div id="todolist">
            <?php 
                include("db.php");

                if(isset($_POST['texto']) && $_POST['texto'] != '')
                {   $texto = $_POST['texto'];
                    
                    $query = "INSERT INTO todotable(texto,completado)values('$texto',false)";

                    if($conexion->query($query) === true)
                    {
                        // echo "<div>
                        // <form action=''>
                        // <input type='checkbox'/>$texto
                        // </form>
                        // </div>";
                    }else {
                        die("Error al insertar los datos: ". $conexion->error);
                    }
                }
                else if(isset($_POST['completar'])) 
                {
                    $id = $_POST['completar'];
                    $query = "UPDATE todoTable set completado = 1 WHERE id = $id";

                        if($conexion->query($query) === true)
                    {
                        // echo "<div>
                        // <form action=''>
                        // <input type='checkbox'/>$texto
                        // </form>
                        // </div>";
                    }else {
                        die("Error al actualizar los datos: ". $conexion->error);
                    }
                }else if(isset($_POST['eliminar']))
                {
                    $id = $_POST['eliminar'];
                    $query = "DELETE FROM todoTable WHERE id=$id";

                        if($conexion->query($query) === true)
                    {
                        // echo "<div>
                        // <form action=''>
                        // <input type='checkbox'/>$texto
                        // </form>
                        // </div>";
                    }else {
                        die("Error al eliminar los datos: ". $conexion->error);
                    }
                }
                
                $query="";
                if(isset($_POST['mostrar-todo']))
                {
                    $ordenar = $_POST['mostrar-todo'];
                    if($ordenar == "on")
                        $query = "SELECT * FROM todoTable ORDER BY completado DESC";
                    

                    //  if($conexion->query($query) === true)
                    // {
                    //     // echo "<div>
                    //     // <form action=''>
                    //     // <input type='checkbox'/>$texto
                    //     // </form>
                    //     // </div>";
                    // }else {
                    //     die("Error al eliminar los datos: ". $conexion->error);
                    // }
                }else 
                    $query = "SELECT * FROM todoTable WHERE completado=0";

                //$query = "SELECT * FROM todoTable where completado=0";
                $resultado = $conexion->query($query);

                if($resultado->num_rows > 0)
                {
                    //echo $resultado->num_rows;
                    while($row = $resultado->fetch_assoc())
                    {?>
                        <div class="pendiente">
                            <form id="form<?php echo $row['id']; ?>" action='' method="POST" class="form_actualizar">
                                <input name="completar" id="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>" type='checkbox' onchange="completarPendiente(this)" <?php if($row['completado']== 1) echo "checked disabled"; ?>/>
                               <div class="texto <?php if($row['completado'] == 1) echo " deshabilitado"; ?>"><?php echo $row['texto'];?></div>
                            </form>
                            <form id="form_delete<?php echo $row['id'];?>" method="POST" action='' class="form_eliminar">
                                <input type="text" value="<?php echo $row['id']; ?>" name="eliminar" hidden>
                                <input type="button" value="Eliminar" onclick="eliminarPendiente(this)" id="<?php echo $row['id']; ?>">
                            </form>
                        </div>
                        
                    <?php
                    }
                }

                $conexion->close();

            ?>
        </div>
    </div>
    <script>
        function completarPendiente(e)
        {
            let id ="form" + e.id;
            let form = document.getElementById(id);
            console.log(id);

            form.submit();
        }

          function eliminarPendiente(e)
        {
            let id ="form_delete" + e.id;
            console.log(id);
            let form = document.getElementById(id);


            form.submit();
        }
        function mostrarTodo(e)
        {
            let form = document.getElementById("formMostrarTodo");
            form.submit();
        }
    </script>
</body>
</html>