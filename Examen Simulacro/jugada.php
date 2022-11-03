<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numUser">Introduce un número</label>
        <input type="number" name="num" value="<?php $num ?>" required></br>
        <input type="text" disabled value="<?php echo $_GET['msg'] ?? ''?>"></br>
        <input type="text"  name="limINF" value="<?php echo $limInferior = $_POST['limiteInferior'] ?? '' ?>"><br/>
        <input type="text"  name="limSUP" value="<?php echo $limSuperior = $_POST['limiteSuperior'] ?? '' ?>"><br/>
        <input type="text"  name="rnd" value="<?php 
        echo $valorRanda = rand($_POST['limiteInferior'],$_POST['limiteSuperior']) ?? 'vacio' ?>">
        <input type="submit" name="botonEnviar2" value="OK!">
    </form>
</body>
</html>

<?PHP
    if ($_POST['limiteInferior'] > $_POST['limiteSuperior']) {
        header("location:limites.php ? msg='limites super ... inferior'");
        die();
    }   

    if (isset($_POST['botonEnviar2'])) {
        $num = $_POST['num'];
        $limInferior = $_POST['limINF'];
        $limSuperior = $_POST['limSUP'];
        $rnd = $_POST['rnd'];

        if($num == $rnd) {
            header("location: acierto.php ");
        } else if ($num < $rnd) {
            echo "buscas un numero mayor";
        } else {
            echo "buscas un numero menor";
        }

    } else {
        echo "erro en el fomrmulario";
    }
    
    
    
    
// } else {
//     echo "erro en el fomrmulario";
// }
    
    
?>