<?php
    $options = array('uri'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/Ejercicios%20Servicios%20Web/Edad_POO/Servicio',
    'location'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/Ejercicios%20Servicios%20Web/Edad_POO/Servicio/serverSoap.php');
    try{
        $cliente = new SoapClient(null, $options);
        $response = $cliente->diferenciaEdad('1998-08-24');
        echo $response;

    } catch (SoapFault $e) {
        echo 'ERROR '.$e->getMessage();
    }
?>