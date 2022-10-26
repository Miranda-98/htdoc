<?php 
    echo "<link rel='stylesheet' type='text/css' href='estilosBotonera.css' />";
    require_once 'conexionClase.php';
    $datosCorrectos = 0;
   

    if(isset($_POST['botonEnviar'])){
        $codigoR = $_POST['codigo'];
    }



    try{    

        $conecta = conectar();
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sqlP = $conecta->prepare("SELECT * FROM alumnos WHERE CODIGO = :codigo");
        $sqlP->bindParam(':codigo',$codigoR);
        $sqlP->execute();


        $resultado = $sqlP->fetch(PDO::FETCH_ASSOC);
        if($resultado <= 0){
            echo "el alumno no esta en la base de datos, no lo puedes modificar";
            
        } else {
            $datosCorrectos = 1;
            
        }


        
    } catch (PDOException $e) {
        echo 'error: '.$e->getMessage;
    }

    
if($datosCorrectos == 0 ){
            echo "<div id='buscaUsuario'><form action='' method='post'><fieldset>
                <legend>Completa los campos:</legend>
                <input type='text' name='codigo' placeholder='Codigo'>
                <p><input id='botonEnviar' type='submit' name='botonEnviar' value='Enviar datos'></p>
                </fieldset></form></div>";
        } else if($datosCorrectos == 1){
            echo "<div id='insertaUsuario'><form action='modificarUsuarios2.php' method='post'>
                <fieldset>
                <legend>Completa los campos:</legend>
                <input type='text' name='codigo' value=".$resultado['CODIGO'].">
                <input type='text' name='nombre' value=".$resultado['NOMBRE'].">
                <input type='text' name='apellido' value=".$resultado['APELLIDOS'].">
                <input type='text' name='telefono' value=".$resultado['TELEFONO'].">
                <input type='text' name='correo' value=".$resultado['CORREO'].">
                <p><input type='submit' id='botonEnviar2' name='botonEnviar' value='Enviar datos'></p>
                </fieldset></form></div>";
        }
    
?>