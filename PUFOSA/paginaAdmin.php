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
        if($_POST['tabla'] == 'Cliente') {
            
            
        } else if ($_POST['tabla'] == 'Departamento') {
            
            echo "<form method='post' action='añadir.php'>
                    <fieldset>
                        <legend>Completa los campos:</legend>
                        <input type='text' name='departamento' placeholder='Departamento ID' required>
                        <input type='text' name='nombre' placeholder='Nombre' required>
                        <input type='text' name='ubicacion' placeholder='Ubicacion ID' required>
                        <p><input type='submit' name='botonEnviarDepartamento' value='Enviar datos'></p>
                    </fieldset>
                </form>";

        }else if ($_POST['tabla'] == 'Empleados') {
            
            echo "<form method='post' action='añadir.php'>
                            <fieldset>
                            <legend>Completa los campos:</legend>
                            <input type='text' name='empleado' placeholder='Empleado_ID' >
                            <input type='text' name='apellido' placeholder='Apellido' >
                            <input type='text' name='nombre' placeholder='Nombre' >
                            <input type='text' name='inicial' placeholder='Inicial Segundo Apellido' >
                            <select name='trabajo'>
                                <option value='667'>667</option>
                                <option value='668'>668</option>
                                <option value='669'>669</option>
                                <option value='670'>670</option>
                                <option value='671'>671</option>
                                <option value='672'>672</option>
                            </select>
                            <input type='text' name='jefe' placeholder='Jefe ID' >
                            <input type='date' name='fechaContrato' placeholder='Fecha Contrato' >
                            <input type='text' name='salario' placeholder='Salario' >
                            <input type='text' name='comision' placeholder='Comision' >
                            <select name='departamento'>
                                <option value='10'>10</option>
                                <option value='12'>12</option>
                                <option value='13'>13</option>
                                <option value='14'>14</option>
                                <option value='20'>20</option>
                                <option value='23'>23</option>
                                <option value='24'>24</option>
                                <option value='30'>30</option>
                                <option value='34'>34</option>
                                <option value='40'>40</option>
                                <option value='43'>43</option>
                            </select>
                            <p><input type='submit' name='botonEnviarEmpleado' value='Enviar datos'></p>
                        </fieldset>
                    </form>";

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
