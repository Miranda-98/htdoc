<?php
    // articulos seleccionados
    if(isset($_POST['botonEnviar'])){
        foreach($_POST['producto'] as $productosSeleccionados) {
            echo $productosSeleccionados . " - ";
        }
    }
     
    
   
?>