<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA ADMIN</title>
</head>
<?php 
    require "conexionBDPufosa.php";
    $nombre = "SELECIONA UNA TABLA";


    if(isset($_POST['botonTablaMostrar'])){
        $nombre = $_POST['tabla'];
        
        if($_POST['tabla'] == 'Cliente') {
            mostrarCliente();

        } else if ($_POST['tabla'] == 'Departamento') {
            mostrarDepartamento();

        }else if ($_POST['tabla'] == 'Empleados') {
            mostrarEmpleados();
            
        }else if ($_POST['tabla'] == 'Trabajos') {
            mostrarTrabajos();

        }else if ($_POST['tabla'] == 'Ubicacion') {
            mostrarUbicacion();

        }
    }

    if(isset($_POST['botonTablaAñadir'])) {
        if($_POST['tabla'] == 'Cliente') {/*
            echo "<div id='insertaUsuario'><form action='' method='post'>
            <fieldset>
                <legend>Completa los campos:</legend>
                <input type='text' name='cliente' placeholder='Cliente ID'>
                <input type='text' name='nombre' placeholder='Nombre'>
                <input type='text' name='direccion' placeholder='Direccion'>
                <input type='text' name='ciudad' placeholder='Ciudad'>
                <input type='text' name='estado' placeholder='Estado'>
                <input type='text' name='cp' placeholder='Codigo Postal'>
                <input type='text' name='codigoArea' placeholder='Codigo Area'>
                <input type='text' name='telefono' placeholder='Telefono'>
                <input type='text' name='vendedor' placeholder='Vendedor'>
                <input type='text' name='limiteCredito' placeholder='Limite de Credito'>
                <input type='text' name='comentarios' placeholder='Comentarios'>
                <p><input type='submit' id='botonEnviar' name='botonEnviar' value='Enviar datos'></p>
                </fieldset></form></div>";

            if(isset($_POST['botonEnviar'])){
                
                $clienteR = $_POST['cliente'];
                $nombreR = $_POST['nombre'];
                $direccionR = $_POST['direccion'];
                $ciudadR = $_POST['ciudad'];
                $estadoR = $_POST['estado'];
                $cpR = $_POST['cp'];
                $codigoAreaR = $_POST['codigoArea'];
                $telefonoR = $_POST['telefono'];
                $vendedorR = $_POST['vendedor'];
                $limiteCreditoR = $_POST['limiteCredito'];
                $comentariosR = $_POST['comentarios'];

                echo '<script language="javascript">alert('+$clienteR+');</script>';
            }
            //añadirCliente($clienteR, $nombreR, $direccionR, $ciudadR, $estadoR, $cpR, $codigoAreaR, $telefonoR, $vendedorR, $limiteCreditoR, $comentariosR);
            */
        } else if ($_POST['tabla'] == 'Departamento') {
            

        }else if ($_POST['tabla'] == 'Empleados') {
            
            
        }else if ($_POST['tabla'] == 'Trabajos') {
           
        echo "<form method='post' action='añadir.php'>
            <fieldset>
                <legend>Completa los campos:</legend>
                <input type='text' name='trabajo' placeholder='Trabajo_ID' required>
                <input type='text' name='funcion' placeholder='Funcion' required>
                <p><input type='submit' name='botonEnviarTrabajo' value='Enviar datos'></p>
            </fieldset>
        </form>";

        }else if ($_POST['tabla'] == 'Ubicacion') {

        echo "<form method='post' action='añadir.php'>
                    <fieldset>
                        <legend>Completa los campos:</legend>
                        <input type='text' name='ubicacion' placeholder='Ubicacion_ID' required>
                        <input type='text' name='grupo' placeholder='Grupo Regional' required>
                        <p><input type='submit' name='botonEnviarUbicacion' value='Enviar datos'></p>
                    </fieldset>
                </form>";

        }
    }

    /*function añadirCliente($clienteR, $nombreR, $direccionR, $ciudadR, $estadoR, $cpR, $codigoAreaR, $telefonoR, $vendedorR, $limiteCreditoR, $comentariosR){
        try{
            $conecta = conectar();
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            //comprobar que el usuario no esta registrado 
            $sqlComprobar = "SELECT COUNT(*) AS 'cantidad' FROM cliente WHERE CLIENTE_ID='".$_REQUEST['tabla']."';";
            $resultado = $conecta->query($sqlComprobar);
            $num = $resultado->fetch();
            if($num['cantidad']>0) {
                echo "el alumno ya esta registrado en la base de datos";//quitarlo
            } else {
                //sentencia sql preparada
                $sqlP = $conecta->prepare("INSERT INTO cliente (CLIENTE_ID, nombre, Direccion, Ciudad, Estado, CodigoPostal, CodigoDeArea, Telefono, Vendedor_ID, Limite_De_Credito, Comentarios) 
                VALUES (:cliente, :nombre, :direccion, :ciudad, :estado, :codigoPostal, :codigoArea, :telefono, :vendedor, :limiteCredito, :comentarios)");
    
    
                //paso del valor
                $sqlP->bindParam(":cliente", $cliente);
                $sqlP->bindParam(":nombre", $nombre);
                $sqlP->bindParam(":direccion", $direccion);
                $sqlP->bindParam(":ciudad", $ciudad);
                $sqlP->bindParam(":estado", $estado);
                $sqlP->bindParam(":codigoPostal", $cp);
                $sqlP->bindParam(":codigoArea", $codigoArea);
                $sqlP->bindParam(":telefono", $telefono);
                $sqlP->bindParam(":vendedor", $vendedor);
                $sqlP->bindParam(":limiteCredito", $limiteCredito);
                $sqlP->bindParam(":comentarios", $comentarios);

    
                //asignamos valor a los valores
                $cliente = $clienteR;
                $nombre = $nombreR;
                $direccion = $direccionR;
                $ciudad = $ciudadR;
                $estado = $estadoR;
                $cp = $cpR;
                $codigoArea = $codigoAreaR;
                $telefono = $telefonoR;
                $vendedor = $vendedorR;
                $limiteCredito = $limiteCreditoR;
                $comentarios = $comentariosR;
    
                //ejecutamos la inserccion
                $sqlP->execute();
    
                echo "usuario registrado correctamente";
            }
    
        } catch (PDOException $e){
            echo "error al ingresar usuario".$e->getMessage();
        }
    }*/

    function añadirDepartamento(){

    }

    function añadirEmpleados(){

    }

    function añadirTrabajos(){

    }

    function añadirUbicacion(){
        
    }

    function mostrarCliente(){
        try{
            $conexion = conectar();
            $sql = "SELECT * FROM cliente;";
            $result = $conexion->query($sql);
    
        echo "<table border=solid black 1px>
        <th colspan=11>TABLA CLIENTE</th>
                    <tr>
                        <td>CLIENTE_ID</td>
                        <td>nombre</td>
                        <td>Direccion</td>
                        <td>Ciudad</td>
                        <td>Estado</td>
                        <td>CodigoPostal</td>
                        <td>CodigoDeArea</td>
                        <td>Telefono</td>
                        <td>Vendedor_ID</td>
                        <td>Limite_De_Credito</td>
                        <td>Comentarios</td>
                    </tr>"; 
        
        
        
        foreach($result as $fila){
            echo " <tr>
            <td>".$fila['CLIENTE_ID']."</td>", 
            "<td>".$fila['nombre']."</td>", 
            "<td>".$fila['Direccion']."</td>", 
            "<td>".$fila['Ciudad']."</td>", 
            "<td>".$fila['Estado']."</td>", 
            "<td>".$fila['CodigoPostal']."</td>", 
            "<td>".$fila['CodigoDeArea']."</td>", 
            "<td>".$fila['Telefono']."</td>", 
            "<td>".$fila['Vendedor_ID']."</td>", 
            "<td>".$fila['Limite_De_Credito']."</td>",
            "<td>".$fila['Comentarios']."</td></tr>";


        }

        } catch (PDOException $e) {
            echo "error " . $e;
        }
    }

    function mostrarDepartamento(){
        try{
            $conexion = conectar();
            $sql = "SELECT * FROM departamento;";
            $result = $conexion->query($sql);
    
        echo "<table border=solid black 1px>
        <th colspan=11>TABLA DEPARTAMENTO</th>
                    <tr>
                        <td>Departamento_ID</td>
                        <td>Nombre</td>
                        <td>Ubicacion_ID</td>
                    </tr>"; 
        
        
        
        foreach($result as $fila){
            echo " <tr>
            <td>".$fila['departamento_ID']."</td>", 
            "<td>".$fila['Nombre']."</td>", 
            "<td>".$fila['Ubicacion_ID']."</td></tr>";


        }

        } catch (PDOException $e) {
            echo "error " . $e;
        }
    }

    function mostrarEmpleados(){
        try{
            $conexion = conectar();
            $sql = "SELECT * FROM empleados;";
            $result = $conexion->query($sql);
    
        echo "<table border=solid black 1px>
        <th colspan=11>TABLA EMPLEADOS</th>
                    <tr>
                        <td>empleado_ID</td>
                        <td>Apellido</td>
                        <td>Nombre</td>
                        <td>Inicial_del_segundo_apellido</td>
                        <td>Trbajo_ID</td>
                        <td>Jefe_ID</td>
                        <td>Fecha_contrato</td>
                        <td>Salario</td>
                        <td>Comision</td>
                        <td>Departamento_ID</td>
                    </tr>"; 
        
        
        
        foreach($result as $fila){
            echo " <tr>
            <td>".$fila['empleado_ID']."</td>", 
            "<td>".$fila['Apellido']."</td>", 
            "<td>".$fila['Nombre']."</td>", 
            "<td>".$fila['Inicial_del_segundo_apellido']."</td>", 
            "<td>".$fila['Trabajo_ID']."</td>", 
            "<td>".$fila['Jefe_ID']."</td>", 
            "<td>".$fila['Fecha_contrato']."</td>", 
            "<td>".$fila['Salario']."</td>", 
            "<td>".$fila['Comision']."</td>", 
            "<td>".$fila['Departamento_ID']."</td></tr>";


        }

        } catch (PDOException $e) {
            echo "error " . $e;
        }
    }

    function mostrarTrabajos(){
        try{
            $conexion = conectar();
            $sql = "SELECT * FROM trabajos;";
            $result = $conexion->query($sql);
    
        echo "<table border=solid black 1px>
        <th colspan=11>TABLA TRABAJOS</th>
                    <tr>
                        <td>Trabajo_ID</td>
                        <td>Funcion</td>
                    </tr>"; 
        
        
        
        foreach($result as $fila){
            echo " <tr>
            <td>".$fila['Trabajo_ID']."</td>", 
            "<td>".$fila['Funcion']."</td></tr>";


        }

        } catch (PDOException $e) {
            echo "error " . $e;
        }
    }

    function mostrarUbicacion(){
        try{
            $conexion = conectar();
            $sql = "SELECT * FROM ubicacion;";
            $result = $conexion->query($sql);
    
        echo "<table border=solid black 1px>
        <th colspan=11>TABLA UBICACION</th>
                    <tr>
                        <td>Ubicacion_ID</td>
                        <td>GrupoRegional</td>
                    </tr>"; 
        
        
        
        foreach($result as $fila){
            echo " <tr>
            <td>".$fila['Ubicacion_ID']."</td>", 
            "<td>".$fila['GrupoRegional']."</td></tr>";


        }

        } catch (PDOException $e) {
            echo "error " . $e;
        }
    }
?>

<body>
    <h2>ADMIN</h2>
    <form method="POST" action="">
        <select name="tabla" id="selectorTabla">
            <option ><?php echo $nombre ?></option>
            <option value="Cliente">Cliente</option>
            <option value="Departamento">Departamento</option>
            <option value="Empleados">Empleados</option>
            <option value="Trabajos">Trabajos</option>
            <option value="Ubicacion">Ubicacion</option>
        </select>
        <input type="submit" id="botonTabla" name="botonTablaMostrar" value="Mostrar Tabla!">
        <input type="submit" id="añadirTabla" name="botonTablaAñadir" value="Añadir Tabla!">
        <input type="submit" id="modificarTabla" name="botonTablaModificar" value="Modificar Tabla!">
        <input type="submit" id="borrarTabla" name="botonTablaBorrar" value="Borrar Tabla!">
    </form>
</body>
</html>
