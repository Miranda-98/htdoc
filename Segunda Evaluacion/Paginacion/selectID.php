<?php
    require_once "conexion.php";
    //include_once "mostrar.php";
    function cantidadDatos(){
        $conexion = conectar();
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

        $sqlComprobar = "SELECT COUNT(*) AS 'cantidad' FROM empleados;";
        $resultado = $conexion->query($sqlComprobar);
        $num = $resultado->fetch();
        return $num['cantidad'];
    }
    cantidadDatos();

    try {
        $conexion = conectar();
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $limite = 5;

        $sql = "SELECT * FROM empleados LIMIT 5";


    
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

        for ($i=0; $i < cantidadDatos()/5; $i++) { 
            # code...
            echo "<a href='selectID.php ? '>$i</a> - ";
        }
    
    } catch (PDOException $e) {
        echo "conexion fallida: ".$e->getMessage();
    }      


    
?>