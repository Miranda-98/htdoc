<?php 
    require "conexionClase.php";

    echo "<form action='' method='post'>
        <input type='text' name='nombre' placeholder='Nombre'>
        <input type='text' name='apellido' placeholder='Apellido'>
        <input type='text' name='telefono' placeholder='Telefono'>
        <input type='text' name='correo' placeholder='Correo'>
    </form>";
    try{
        $conecta = conectar();
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //sentencia sql preparada
        $sqlP = $conecta->prepare("INSERT INTO alumnos (NOMBRE, APELLIDOS, TELEFONO, CORREO) VALUES (:nombre, :apellidos, :telefono, :correo)");


        //paso del valor
        $sqlP->bindParam(":nombre", $nombre);
        $sqlP->bindParam(":apellidos", $apellidos);
        $sqlP->bindParam(":telefono", $telefono);
        $sqlP->bindParam(":correo", $correo);

        //asignamos valor a los valores



    } catch (PDOException $e){
        echo "error ".$e->getMessage();
    }
?>