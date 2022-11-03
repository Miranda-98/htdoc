<?php 
    require "conexionBDPufosa.php";

    
    if(isset($_POST['botonEnviarEmpleado'])){
        $empleado_ID = $_POST['empleado'];
        $Apellido = $_POST['apellido'];
        $Nombre = $_POST['nombre'];
        $Inicial_del_segundo_apellido = $_POST['inicial'];
        $Trabajo_ID = $_POST['trabajo'];
        $Jefe_ID = $_POST['jefe'];
        $Fecha_contrato = $_POST['fechaContrato'];
        $Salario = $_POST['salario'];
        $Comision = $_POST['comision'];
        $Departamento_ID = $_POST['departamento'];

        try {
            echo "paaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            //comprobar que el usuario no esta registrado 
            $sqlComprobar = "SELECT COUNT(*) AS 'cantidad' FROM empleados WHERE Trabajo_ID='".$_REQUEST['empleado']."';";
            $resultado = $conecta->query($sqlComprobar);
            $num = $resultado->fetch();
            if($num['cantidad']>0) {
                echo "el empleado ya esta registrada en la base de datos";//quitarlo
            } else {
                //sentencia sql preparada
                $sqlP = $conecta->prepare("INSERT INTO empleados (empleado_ID, Apellido, Nombre, Inicial_del_segundo_apellido,
                 Trabajo_ID, Jefe_ID, Fecha_contrato, Salario, Comision, Departamento_ID) VALUES (:emp, :ape, :nom, :ini, :tra, :jefe, :fech, :sal, :com, :dep);");
            
                //paso del valor
                $sqlP->bindParam(":emp", $empleadoR);
                $sqlP->bindParam(":ape", $apellidoR);
                $sqlP->bindParam(":nom", $nombreR);
                $sqlP->bindParam(":ini", $inicialR);
                $sqlP->bindParam(":tra", $trabajoR);
                $sqlP->bindParam(":jefe", $jefeR);
                $sqlP->bindParam(":fech", $fechR);
                $sqlP->bindParam(":sal", $salR);
                $sqlP->bindParam(":com", $comR);
                $sqlP->bindParam(":dep", $depR);
        

                //asignamos valor a los valores
                $empleadoR = $empleado_ID;
                $apellidoR = $Apellido;
                $nombreR = $Nombre;
                $inicialR = $Inicial_del_segundo_apellido;
                $trabajoR = $Trabajo_ID;
                $jefeR = $Jefe_ID;
                $fechR = $Fecha_contrato;
                $salR = $Salario;
                $comR = $Comision;
                $depR = $Departamento_ID;


                //ejecutamos la inserccion
                $sqlP->execute();

                echo "ubicacion registrado correctamente";
        }


        } catch (PDOException $e) {
            echo "error " . $e;
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
                echo "ya esta registrada en la base de datos";//quitarlo
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
?>