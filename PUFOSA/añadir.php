<?php 
    require "conexionBDPufosa.php";

    if(isset($_POST['botonEnviarUbicacion'])){
        $ubi = $_POST['ubicacion'];
        $grupo = $_POST['grupo'];
    
        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //comprobar que el usuario no esta registrado 
            $sqlComprobar = "SELECT COUNT(*) AS 'cantidad' FROM ubicacion WHERE Ubicacion_ID='".$_REQUEST['ubicacion']."';";
            $resultado = $conecta->query($sqlComprobar);
            $num = $resultado->fetch();
            if($num['cantidad']>0) {
                echo "la ubicacion ya esta registrada en la base de datos";//quitarlo
            } else {
                //sentencia sql preparada
                $sqlP = $conecta->prepare("INSERT INTO ubicacion (Ubicacion_ID, GrupoRegional) VALUES (:ubi, :grupo)");


                //paso del valor
                $sqlP->bindParam(":ubi", $ubicacion);
                $sqlP->bindParam(":grupo", $grupoRegional);

                //asignamos valor a los valores
                $ubicacion = $ubi;
                $grupoRegional = $grupo;

                //ejecutamos la inserccion
                $sqlP->execute();

                echo "ubicacion registrado correctamente";
            }

        } catch (PDOException $e) {
            echo "error -> ". $e;
        }
    }


    if(isset($_POST['botonEnviarTrabajo'])){
        $trabajo = $_POST['trabajo'];
        $funcion = $_POST['funcion'];
    
        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //comprobar que el usuario no esta registrado 
            $sqlComprobar = "SELECT COUNT(*) AS 'cantidad' FROM trabajos WHERE Trabajo_ID='".$_REQUEST['trabajo']."';";
            $resultado = $conecta->query($sqlComprobar);
            $num = $resultado->fetch();
            if($num['cantidad']>0) {
                echo "la ubicacion ya esta registrada en la base de datos";//quitarlo
            } else {
                //sentencia sql preparada
                $sqlP = $conecta->prepare("INSERT INTO trabajos (Trabajo_ID, Funcion) VALUES (:trabajo, :funcion)");


                //paso del valor
                $sqlP->bindParam(":trabajo", $trabajoR);
                $sqlP->bindParam(":funcion", $funcionR);

                //asignamos valor a los valores
                $trabajoR = $trabajo;
                $funcionR = $funcion;

                //ejecutamos la inserccion
                $sqlP->execute();

                echo "ubicacion registrado correctamente";
            }

        } catch (PDOException $e) {
            echo "error -> ". $e;
        }
    }
?>