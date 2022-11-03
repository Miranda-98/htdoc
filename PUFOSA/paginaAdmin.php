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
    require "mostrar.php";
    require "modificar.php";
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
            
            echo "<form method='post' action='añadir.php'>
                    <fieldset>
                        <legend>Completa los campos:</legend>
                        <input type='text' name='cliente' placeholder='Cliente ID' required>
                        <input type='text' name='nombre' placeholder='Nombre' required>
                        <input type='text' name='direccion' placeholder='Direccion' required>
                        <input type='text' name='ciudad' placeholder='Ciudad' required>
                        <input type='text' name='estado' placeholder='Estado' required>
                        <input type='text' name='codigoPostal' placeholder='Codigo Postal' required>
                        <input type='text' name='codigoArea' placeholder='Codigo de Area' required>
                        <input type='text' name='telefono' placeholder='Telefono' required>";
                        empleados();
                        echo "<input type='text' name='limite' placeholder='Limite de Credito' required>
                        <input type='text' name='comentario' placeholder='Comentarios' required>
                        <p><input type='submit' name='botonEnviarCliente' value='Enviar Datos'></p>
                    </fieldset>
                </form>";
            
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

    

    if(isset($_POST['botonTablaModificar'])) {
        switch($_POST['tabla']){
            case 'Cliente';
                echo "clieeeeeeeee";
                break;
            
            case 'Departamento';
                echo "depa";
                break;
        
            case 'Empleados';
                echo "emplee";
                break;
        
            case 'Trabajos';
                echo "traba";
                break;
        
            case 'Ubicacion';
                modificarUbicacion();
                break;
        
        }
    }






    function empleados(){
        $bbdd = "PUFOSA";
        $servidor = "localhost";
        $usuario = "root";
        $contraseña = "";
    
        try {
            $conexion = new PDO ("mysql:host=$servidor;dbname=$bbdd", $usuario, $contraseña);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "SELECT * FROM empleados ;";
      
            $result = $conexion->query($sql);//almaceno en result lo que devuelve la query 
           
            echo "<select name='vendedorID'>";
            
            foreach($result as $fila){
              
              echo "<option value=".$fila['empleado_ID'].">".$fila['empleado_ID']."</option>";
              
           }
           echo "</select>";
      
        } catch (PDOException $e) {
            echo "conexion fallida: ".$e->getMessage();
        }
    
      }
    
      empleados();
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
