<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #contenedor{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -55%);
    }
</style>
<body>
    <div id="contenedor">
        <form method="POST" action="">
        <label>Introduce tu fecha de nacimiento</label>
        <input type="date" name="calendario"><br/>
        <input type="submit" value="ENVIAR" name="enviar">
    </form>
    </div>
    
</body>
</html>
<?php
    // if(isset($_POST['enviar'])){
    //     $fechaNacimiento = $_POST['calendario'];
    //     $aux = explode('-',$fechaNacimiento);
    //     $año = $aux[0] * 365;
    //     $mes = $aux[1] * 30;
    //     $dia = $aux[2];
    //     $valorFechaNacimiento = $año + $mes + $dia;
        
    //     $fechaActual = date('Y/m/d');
    //     $aux2 = explode('/', $fechaActual);
    //     $año2 = $aux2[0] * 365;
    //     $mes2 = $aux2[1] * 30;
    //     $dia2 = $aux2[2];
    //     $valorFechaActual = $año2 + $mes2 + $dia2;

    //     $diff = $valorFechaActual - $valorFechaNacimiento;
    //     if($diff > (18*365)){
    //         return "eres mayor de edad";
    //     } else {
    //         return "aun eres un bebe";
    //     }
        
    // }
    class DiferenciaEdad{
        function diferenciaEdad($fechaNacimiento){
            $aux = explode('-',$fechaNacimiento);
            $año = $aux[0] * 365;
            $mes = $aux[1] * 30;
            $dia = $aux[2];
            $valorFechaNacimiento = $año + $mes + $dia;
            
            $fechaActual = date('Y/m/d');
            $aux2 = explode('/', $fechaActual);
            $año2 = $aux2[0] * 365;
            $mes2 = $aux2[1] * 30;
            $dia2 = $aux2[2];
            $valorFechaActual = $año2 + $mes2 + $dia2;

            $diff = $valorFechaActual - $valorFechaNacimiento;
            if($diff > (18*365)){
                return "eres mayor de edad";
            } else {
                return "aun eres un bebe";
            }
        }
    }
?>