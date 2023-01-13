<?php
    require 'Adopcion.php';
    class getTablaAdopcion {
        function llamada(){
            $a = new Adopcion(2, 1, 1, '07-12-2022', 'le gustan los perros chuscos', 'adopcion');
            return $a->obtieneTodos();

        }
        

    }
?>