<?php 
    require "conexionClase.php";
    $codigoR = '';
    $nombreR = '';
    $apellidoR = '';
    $telefonoR = '';
    $correoR = '';

    echo "<form action='' method='post'>
        <input type='text' name='codigo' placeholder='Codigo'>
        <input type='text' name='nombre' placeholder='Nombre'>
        <input type='text' name='apellido' placeholder='Apellido'>
        <input type='text' name='telefono' placeholder='Telefono'>
        <input type='text' name='correo' placeholder='Correo'>
        <p><input type='submit' name='botonEnviar' value='Enviar datos'></p>
        </form>";

        if(isset($_POST['botonEnviar'])){
            $codigoR = $_POST['codigo'];
            $nombreR = $_POST['nombre'];
            $apellidoR = $_POST['apellido'];
            $telefonoR = $_POST['telefono'];
            $correoR = $_POST['correo'];
        }

    try{
        $conecta = conectar();
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //sentencia sql preparada
        $sqlP = $conecta->prepare("INSERT INTO alumnos (CODIGO, NOMBRE, APELLIDOS, TELEFONO, CORREO) VALUES (:codigo, :nombre, :apellidos, :telefono, :correo)");


        //paso del valor
        $sqlP->bindParam(":codigo", $codigo);
        $sqlP->bindParam(":nombre", $nombre);
        $sqlP->bindParam(":apellidos", $apellidos);
        $sqlP->bindParam(":telefono", $telefono);
        $sqlP->bindParam(":correo", $correo);

        //asignamos valor a los valores
        $codigo = $codigoR;
        $nombre = $nombreR;
        $apellidos = $apellidoR;
        $telefono = $telefonoR;
        $correo = $correoR;

        //ejecutamos la inserccion
        $sqlP->execute();

        echo "usuario registrado correctamente";


    } catch (PDOException $e){
        echo "error al ingresar usuario".$e->getMessage();
    }
?>