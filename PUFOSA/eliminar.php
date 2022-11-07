<?PHP 
    require_once "conexionBDPufosa.php";
    //estructura borrar generico
    function borrarElementoBorrar($borrar) {
        $borrar = $_POST['$borrar'];
        
        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM $borrar WHERE $borrar.'_ID' =:cod";

            //sentencia sql preparada
            $sqlP = $conecta->prepare($sql);

            
            //paso del valor
            $sqlP->bindParam(":cod", $cliente);

            
            //ejecutamos la inserccion
            $sqlP->execute();

            echo $borrar." eliminado correctamente";
    

        } catch (PDOException $e){
            echo "error al eliminar al ".$borrar, $e->getMessage();
        }
    }
    
    //eliminar cliente
    if(isset($_POST['botonEliminarCliente'])) {
        $cliente = $_POST['cliente'];
        
        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM cliente WHERE CLIENTE_ID =:cod";

            //sentencia sql preparada
            $sqlP = $conecta->prepare($sql);

            
            //paso del valor
            $sqlP->bindParam(":cod", $cliente);

            
            //ejecutamos la inserccion
            $sqlP->execute();

            echo "empleado eliminado correctamente";
    

        } catch (PDOException $e){
            echo "error al eliminar al cliente " . $e->getMessage();
        }
    }

    //eliminar departamento
    if(isset($_POST['botonEliminarDepartamento'])) {
        $departamento = $_POST['departamento'];

        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM departamento WHERE departamento_ID =:cod";

            //sentencia sql preparada
            $sqlP = $conecta->prepare($sql);

            
            //paso del valor
            $sqlP->bindParam(":cod", $departamento);

            
            //ejecutamos la inserccion
            $sqlP->execute();

            echo "departamento eliminado correctamente";
    

        } catch (PDOException $e){
            echo "no puedes eliminar un departamento en el que hay empleados";
        }
    }

    //eliminar empleado
    if(isset($_POST['botonEliminarEmpleado'])) {
        $empleado = $_POST['empleados'];

        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM empleados WHERE empleado_ID =:cod";

            //sentencia sql preparada
            $sqlP = $conecta->prepare($sql);

            
            //paso del valor
            $sqlP->bindParam(":cod", $empleado);

            
            //ejecutamos la inserccion
            $sqlP->execute();

            echo "empleado eliminado correctamente";
    

        } catch (PDOException $e){
            echo "error al eliminar el empleado " . $e->getMessage();   
        }
    }

    //eliminar trabajos
    if(isset($_POST['botonEliminarTrabajo'])) {
        $trabajo = $_POST['trabajos'];

        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM trabajos WHERE Trabajo_ID =:cod";

            //sentencia sql preparada
            $sqlP = $conecta->prepare($sql);

            
            //paso del valor
            $sqlP->bindParam(":cod", $trabajo);

            
            //ejecutamos la inserccion
            $sqlP->execute();

            echo "trabajo eliminado correctamente";
    

        } catch (PDOException $e){
            echo "No puedes eliminar un trabajo en el que hay empleados";
        }
    }

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
            echo "No puedes eliminar una ubicación en la que hay departamentos";
        }
    }
?>