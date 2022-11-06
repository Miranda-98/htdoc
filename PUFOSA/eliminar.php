<?PHP 
    require_once "conexionBDPufosa.php";

    //eliminar cliente

    //eliminar departamento

    //eliminar empleado

    //eliminar trabajos
    
    //eliminar ubicacion
    if(isset($_POST['botonEliminarUbicacion'])) {
        $ubicacion = $_POST['ubicacion'];

        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM ubicacion WHERE Ubicacion_ID =:cod";

            //sentencia sql preparada
            $sqlP = $conecta->prepare($sql);

            
            //paso del valor
            $sqlP->bindParam(":cod", $ubicacion);

            
            //ejecutamos la inserccion
            $sqlP->execute();

            echo "ubicacion eliminada correctamente";
    

        } catch (PDOException $e){
            echo "error al ingresar usuario".$e->getMessage();
        }
    }
?>