<?php
    include('library.php');
    $options = array('uri'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/ServidorServicios');
    $server = new SoapServer(null, $options);
    $server->setClass('Library');
    $server->handle();
?>