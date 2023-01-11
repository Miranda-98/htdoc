<?php
    $options = array('uri'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/ServidorServicios',
    'location'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/ServidorServicios/serverSOAP.php');
    try{
        $cliente = new SoapClient(null, $options);
        $response = $cliente->sumar(2,2);
        echo "la suma es : ".$response;

        $response = $cliente->restar(2,2);
        echo "la resta es : ".$response;
    } catch (SoapFault $e) {
        echo 'ERROR '.$e->getMessage();
    }
?>