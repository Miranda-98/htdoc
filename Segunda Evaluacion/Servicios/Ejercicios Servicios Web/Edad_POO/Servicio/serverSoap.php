<?php
    include('edad.php');
    $options = array('uri'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/Ejercicios%20Servicios%20Web/Edad_POO/Servicio');
    $server = new SoapServer(null, $options);
    $server->setClass('DiferenciaEdad');
    $server->handle();
?>