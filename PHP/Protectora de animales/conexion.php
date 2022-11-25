<?php 
    class Conexion{
        private $bbdd;
        private $servidor;
        private $usuario;
        private $contraseña;

        function __construct($bbdd, $servidor, $usuario, $contraseña) 
        {
            $this->bbdd=$bbdd;
            $this->servidor=$servidor;
            $this->usuario=$usuario;
            $this->contraseña=$contraseña;
        }

        function get_bbdd(){
            return $this->bbdd;
        }

        function set_bbdd($bbdd){
            $this->bbdd=$bbdd;
        }

        function get_servidor(){
            return $this->servidor;
        }

        function set_servidor($servidor){
            $this->servidor=$servidor;
        }

        function get_usuario(){
            return $this->usuario;
        }

        function set_usuario($usuario){
            $this->usuario=$usuario;
        }

        function get_contraseña(){
            return $this->contraseña;
        }

        function set_contraseña($contraseña){
            $this->contraseña=$contraseña;
        }


         function conectar(){
            try {
                $conecta = new PDO("mysql:host=".$this->get_servidor().";dbname=".$this->get_bbdd()."",
                 $this->get_usuario(), $this->get_contraseña());
                $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "conexion exitosa";
                return $conecta;

            } catch (PDOException $e) {
                echo "conexion fallida: ".$e->getMessage();
            }
            
        }
        
    }

    // class main extends Conectar{
    //     public $con = new Conectar("animales", "localhost", "root", "");
    //     public $con->conectar();
    // }
   
    $con = new Conexion("animales", "localhost", "root", "");
    $con->conectar();
?>