<?php 
    function multiplicar($n1,$n2)
    {
        return  $n1 * $n2;
    }

    function esNumero($n1,$n2)
    {
        if(is_numeric($n1) && is_numeric($n2))
            return true;
        else
            return false;
    }

    function mostrarError()
    {
        echo  "<span class='error'>Ingres solo valores numericos</span>";
    }

    function validarCampos(&$n1,&$n2)
    {

        if(isset($_POST['numero1']) && isset($_POST['numero2']))
        {
            $n1 = $_POST['numero1'];
            $n2 = $_POST['numero2'];

            if(esNumero($n1,$n2))
               echo multiplicar($n1,$n2);
            else 
               mostrarError();
                
            
            
        }
    }


?>