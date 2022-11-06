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
    require "eliminar.php";
    require "selectID.php";

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
                        <legend>Añadir Cliente:</legend>
                        <input type='text' name='cliente' placeholder='Cliente' required>
                        <input type='text' name='nombre' placeholder='Nombre' required>
                        <input type='text' name='direccion' placeholder='Direccion' required>
                        <input type='text' name='ciudad' placeholder='Ciudad' required>
                        <input type='text' name='estado' placeholder='Estado' required>
                        <input type='text' name='codigoPostal' placeholder='Codigo Postal' required>
                        <input type='text' name='codigoArea' placeholder='Codigo de Area' required>
                        <input type='text' name='telefono' placeholder='Telefono' required>";
                        vendedor();
                        
                        //<input type='text' name='vendedorID' placeholder='vendedor' required>
                        echo "<input type='text' name='limite' placeholder='Limite de Credito' required>
                        <input type='text' name='comentario' placeholder='Comentarios' required>
                        <p><input type='submit' name='botonEnviarCliente' value='Enviar Datos'></p>
                    </fieldset>
                </form>";
            
        } else if ($_POST['tabla'] == 'Departamento') {
            
            echo "<form method='post' action='añadir.php'>
                    <fieldset>
                        <legend>Añadir Departamento:</legend>
                        <input type='text' name='departamento' placeholder='Departamento ID' required>
                        <input type='text' name='nombre' placeholder='Nombre' required>";
                        ubicacion();
                        echo "<p><input type='submit' name='botonEnviarDepartamento' value='Enviar datos'></p>
                    </fieldset>
                </form>";

        }else if ($_POST['tabla'] == 'Empleados') {
            
            echo "<form method='post' action='añadir.php'>
                            <fieldset>
                            <legend>Añadir Empleados:</legend>
                            <input type='text' name='empleado' placeholder='Empleado_ID' >
                            <input type='text' name='apellido' placeholder='Apellido' >
                            <input type='text' name='nombre' placeholder='Nombre' >
                            <input type='text' name='inicial' placeholder='Inicial Segundo Apellido' >";
                            trabajos();
                            echo "<input type='text' name='jefe' placeholder='Jefe ID' >
                            <input type='date' name='fechaContrato' placeholder='Fecha Contrato' >
                            <input type='text' name='salario' placeholder='Salario' >
                            <input type='text' name='comision' placeholder='Comision' >";
                            departamento();
                            echo "<p><input type='submit' name='botonEnviarEmpleado' value='Enviar datos'></p>
                        </fieldset>
                    </form>";

        }else if ($_POST['tabla'] == 'Trabajos') {
           
        echo "<form method='post' action='añadir.php'>
                    <fieldset>
                        <legend>Añadir Trabajo:</legend>
                        <input type='text' name='trabajo' placeholder='Trabajo' required>
                        <input type='text' name='funcion' placeholder='Funcion' required>
                        <p><input type='submit' name='botonEnviarTrabajo' value='Enviar datos'></p>
                    </fieldset>
                </form>";

        }else if ($_POST['tabla'] == 'Ubicacion') {

        echo "<form method='post' action='añadir.php'>
                    <fieldset>
                        <legend>Añadir Ubicacion:</legend>
                        <input type='text' name='ubicacion' placeholder='Ubicacion ID' required>
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
                echo "<form method='post' action='modificar.php'>
                        <fieldset>
                            <legend>Modificar Trabajo:</legend>
                            <input type='text' name='trabajo' placeholder='Trabajo' required>
                            <input type='text' name='funcion' placeholder='Funcion' required>
                            <p><input type='submit' name='botonModificarTrabajo' value='Enviar datos'></p>
                        </fieldset>
                    </form>";
                break;
        
            case 'Ubicacion';
                echo "<form method='post' action='modificar.php'>
                        <fieldset>
                            <legend>Modificar Ubicacion:</legend>";
                            ubicacion();
                            echo "<input type='text' name='grupo' placeholder='Grupo Regional' required>
                            <p><input type='submit' name='botonModificarUbicacion' value='Enviar datos'></p>
                        </fieldset>
                    </form>";
                break;
        
        }
    }

    if(isset($_POST['botonTablaEliminar'])) {
        switch($_POST['tabla']){
            case 'Cliente';
                echo "<form method='post' action='eliminar.php'>
                        <fieldset>
                            <legend>Eliminar Cliente:</legend>
                            <input type='text' name='cliente' placeholder='Cliente' required>
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
                            <p><input type='submit' name='botonEliminarCliente' value='Enviar Datos'></p>
                        </fieldset>
                    </form>";
                break;
            
            case 'Departamento';
                echo "<form method='post' action='eliminar.php'>
                        <fieldset>
                            <legend>Eliminar Departamento:</legend>
                            <input type='text' name='departamento' placeholder='Departamento ID' required>
                            <input type='text' name='nombre' placeholder='Nombre' required>";
                            ubicacion();
                            echo "<p><input type='submit' name='botonEliminarDepartamento' value='Enviar datos'></p>
                        </fieldset>
                    </form>";
                break;
        
            case 'Empleados';
                echo "<form method='post' action='eliminar.php'>
                                <fieldset>
                                <legend>Eliminar Empleado:</legend>";
                                empleados();
                                echo "<p><input type='submit' name='botonEliminarEmpleado' value='Enviar datos'></p>
                            </fieldset>
                        </form>";
                break;
        
            case 'Trabajos';
            echo "<form method='post' action='eliminar.php'>
                        <fieldset>
                            <legend>Eliminar Trabajo:</legend>";
                            trabajos();
                             echo "<p><input type='submit' name='botonEliminarTrabajo' value='Enviar datos'></p>
                        </fieldset>
                    </form>";
                break;
        
            case 'Ubicacion';
                echo "<form method='post' action='eliminar.php'>
                        <fieldset>
                            <legend>Eliminar Ubicacion:</legend>";
                            ubicacion();
                            echo "<p><input type='submit' name='botonEliminarUbicacion' value='Enviar datos'></p>
                        </fieldset>
                    </form>";
                break;
        
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
        <input type="submit" id="borrarTabla" name="botonTablaEliminar" value="Borrar Tabla!">
    </form>
</body>
</html>
