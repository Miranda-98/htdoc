<?php 
    class Empleado {
        private $id_empleado, $apellido, $nombre, $inicial2Apellido, $id_trabajo, $id_jefe, $fecha_contrato, $salario, $comision, $id_departamento;

        function __construct($id_empleado, $apellido, $nombre, $inicial2Apellido, $id_trabajo, $id_jefe, $fecha_contrato, $salario, $comision, $id_departamento)
        {
            $this->id_empleado=$id_empleado;
            $this->apellido=$apellido;
            $this->nombre=$nombre;
            $this->inicial2Apellido=$inicial2Apellido;
            $this->id_trabajo=$id_trabajo;
            $this->id_jefe=$id_jefe;
            $this->fecha_contrato=$fecha_contrato;
            $this->salario=$salario;
            $this->comision=$comision;
            $this->id_departamento=$id_departamento;
        }
    }
?>