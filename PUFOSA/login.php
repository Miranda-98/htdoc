<?php
    require "conexionBDPufosa.php";
    if(isset($_POST['botonRegistro'])){
        $nombreR = $_POST['user'];
        $contraseñaR = $_POST['password'];

        echo $nombreR.' - '.$contraseñaR.'</br>';
    }


    try{
        $usuario = "root";
        $contraseña = "";

        $conexion = conectar();

        //sentencia sql
        $sql = "SELECT * FROM empleados WHERE empleado_ID LIKE $nombreR;";
        $pass = "";
        $id;

        $result = $conexion->query($sql);//almaceno en result lo que devuelve la query 
    
        echo "<table border=solid black 1px>
        <th colspan=10>TABLA EMPLEADOS</th>
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

            $pass = $fila['Inicial_del_segundo_apellido']."".$fila['empleado_ID'];
            $id = $fila['Trabajo_ID'];
        }

        if ($pass == $contraseñaR) {
            echo "usuario valido";

            if ($id == 671 || $id == 672) {
                $url = "paginaAdmin.php";
                echo "<SCRIPT>window.location='$url';</SCRIPT>";
            } else {
                $url = "user.html";
                echo "<SCRIPT>window.location='$url';</SCRIPT>";
            }
        } else {
            echo '<script language="javascript">alert("los datos introducidos no son correctos");</script>';
            $url = "index-login.html";
            echo "<SCRIPT>window.location='$url';</SCRIPT>";
        }


    } catch (PDOException $e){
        echo "error ".$e->getMessage();
    }
?>