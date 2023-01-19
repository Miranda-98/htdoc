<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
</head>
<style>
    form{
        position: absolute;
        top: 30%;
        left: 30%;
        font-size: 35px;
    }
</style>
<body>
    <form method="post" action="">

        <input type=checkbox name="producto[]" value="Raton">Raton</input><br/>
        <input type=checkbox name="producto[]" value="Teclado">Teclado</input><br/>
        <input type=checkbox name="producto[]" value="Monitor">Monitor</input><br/>
        <input type="submit" name="botonEnviar" value="Añadir al carrito">
    </form>
</body>
</html>

<?php
    // se crea la sesion
    if(session_status() == PHP_SESSION_NONE)
        session_start();

    
    // comprobar los valores previos del array
    echo 'valores previos: ' . $_SESSION['productos'];
    
    // guardamos en una sesion los productos seleccionados del carrito
    if(isset($_POST['botonEnviar'])){
        foreach($_POST['producto'] as $productosSeleccionados) {
            $_SESSION['productos'] = $productosSeleccionados;
            echo "<ul>";
                echo "<li>".$_SESSION['productos']."</li>";
            echo "</ul>";
        }
    }
    
    
?>