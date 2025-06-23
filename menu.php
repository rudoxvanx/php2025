<div id="menu">
    <?php 
        $lista = array('Inicio','Servicios','Contacto');
        for($i = 0; $i<count($lista);$i++)
        {
            echo $lista[$i] . ' ';
        }
    ?>
</div>