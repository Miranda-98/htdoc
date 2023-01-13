<?php
    // include('library.php');
    // $options = array('uri'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/Calculadora/ServidorServicios');
    // $server = new SoapServer(null, $options);
    // $server->setClass('Library');
    // $server->handle();
    include('../serverAdopcion.php');
    $options = array('uri'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/Ejercicios%20Servicios%20Web/Protectora%20de%20animales/Servicio/');
    $server = new SoapServer(null, $options);
    $server->setClass('getTablaAdopcion');
    $server->handle();
    
?>