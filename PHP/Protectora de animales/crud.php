<?php   
    require "conexion.php";

    abstract class Crud extends Conexion {
        private $tabla;
        private $conexion;

        function __construct($tabla)
        {   
            $this->tabla = $tabla;
            $this->conexion = conectar();
        }

        function get_tabla(){
            return $this->bbdd;
        }

        function set_tabla($tabla){
            $this->tabla=$tabla;
        }

        function get_conexion(){
            return $this->conexion;
        }

        // no lo quiero para que no me puedan cambiar la conexion a la bbdd
        // function set_conexion($conexion){
        //     $this->conexion=$conexion;
        // }

        function obtieneTodos(){
            $sql = ("SELECT * FROM ".$this->get_tabla().";");
            $stm = $this->get_conexion()->prepare($sql);
            $stm -> bind_param("?", $this->get_tabla());
            $stm -> execute();
            $result = $stm -> fetchObject();

            for ($i=0; $i < count($this->get_tabla()); $i++) { 
               echo " <tr>
                <td>".$result[0]."</td>" ;
            }

        }

        function Create(){

        }

        function Update(){
            
        }

        function Read(){
            
        }

        function Delete(){
            
        }
    }

    class Main extends Crud {

    }
    $x = new Main("animales");
    $x->obtieneTodos();
    echo $x;
?>