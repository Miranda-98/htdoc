<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Formulario-->
    <form method="get" action="">
        <label for="cantidad"> Cantidad € </label>
        <input type="text" name="cantidad" required>

        <input type=checkbox name="moneda[]" value="0.00012">Bitcoin</input>
        <input type=checkbox name="moneda[]" value="1.12">Dolar Americano</input>
        <input type=checkbox name="moneda[]" value="0.86">LIbra</input>
        <input type=checkbox name="moneda[]" value="120.82">Yen Japones</input>
        <input type="submit" name="botonEnviar" value="Convertir">
    </form>

    <?php
     if (isset($_GET['botonEnviar'])) {
         foreach($_GET['moneda'] as $clave => $valor) {
             echo "el cambio a $clave es $valor";
         }
     }
    ?>

    <?php
        if (isset($_GET['botonEnviar'])) {
            echo "<ul>";
            foreach ( $_GET['moneda'] as $como ) { 
                    echo "<li>";
                    echo $como; 
                    echo "</li>"; 
            }
            echo "</ul>";
        }
        
    ?>
</body>
</html>