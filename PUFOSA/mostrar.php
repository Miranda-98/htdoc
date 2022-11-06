<?php
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

    function mostrarEmpleadosSimple() {
        try{
            $conexion = conectar();
            $sql = "SELECT empleado_ID, Apellido, empleados.Nombre AS NombreEmpleado, departamento.Nombre FROM empleados
            INNER JOIN departamento ON
            empleados.Departamento_ID = departamento.departamento_ID
            ORDER BY departamento.Nombre DESC;;";
            $result = $conexion->query($sql);
    
        echo "<table border=solid black 1px>
        <th colspan=11>TABLA EMPLEADOS</th>
                    <tr>
                        <td>Empleado_ID</td>
                        <td>Apellido</td>
                        <td>Nombre</td>
                        <td>Departamento_ID</td>
                    </tr>"; 
        
        
        
        foreach($result as $fila){
            echo " <tr>
            <td>".$fila['empleado_ID']."</td>", 
            "<td>".$fila['Apellido']."</td>", 
            "<td>".$fila['NombreEmpleado']."</td>", 
            "<td>".$fila['Nombre']."</td></tr>";


        }

        } catch (PDOException $e) {
            echo "error " . $e;
        }
    }
?>