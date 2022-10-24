<?php 
    require "conexionClase.php";

    echo "<form action='' method='post'>
        <input type='text' name='codigo' placeholder='Codigo'>
        <p><input type='submit' name='botonEnviar' value='Enviar datos'></p>
        </form>";

        if(isset($_POST['botonEnviar'])){
            $codigoR = $_POST['codigo'];
        }

    try{
        $conecta = conectar();
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //sentencia sql preparada
        $sqlP = $conecta->prepare("DELETE FROM alumnos WHERE codigo =:codigo");


        //paso del valor
        $sqlP->bindParam(":codigo", $codigoR);

        //asignamos valor a los valores
        $codigo = $codigoR;

        //ejecutamos la inserccion
        $sqlP->execute();

        echo "usuario eliminado correctamente";


    } catch (PDOException $e){
        echo "error al eliminar usuario".$e->getMessage();
    }
?>