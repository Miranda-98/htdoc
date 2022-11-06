<?php
    require_once "conexionBDPufosa.php";
    function modificarCliente() {

    }

    function modificarDepartamento() {

    }

    function modificarEmpleado() {

    }

    function modificarTrabajo() {
        $trabajo = $_POST['trabajo'];
        $funcion = $_POST['funcion'];

        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
            $sql = "UPDATE trabajos SET Funcion=:gre WHERE Trabajo_ID=$trabajo;";

            //sentencia sql preparada
            $sqlP = $conecta->prepare($sql);

            
            //paso del valor
            $sqlP->bindParam(":gre", $funcion);

            
            //ejecutamos la inserccion
            $sqlP->execute();

            echo "trabajo actualizado correctamente";
    

        } catch (PDOException $e){
            echo "error al ingresar usuario".$e->getMessage();
            
        } 
    }

    
    if(isset($_POST['botonModificarUbicacion'])) {
        $ubicacion = $_POST['ubicacion'];
        $grupo = $_POST['grupo'];

        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
            $sql = "UPDATE ubicacion SET GrupoRegional=:gre WHERE Ubicacion_ID=$ubicacion;";

            //sentencia sql preparada
            $sqlP = $conecta->prepare($sql);

            
            //paso del valor
            $sqlP->bindParam(":gre", $grupo);

            
            //ejecutamos la inserccion
            $sqlP->execute();

            echo "usuario actualizado correctamente";
    

        } catch (PDOException $e){
            echo "error al ingresar usuario".$e->getMessage();
        }
    }

    
?>