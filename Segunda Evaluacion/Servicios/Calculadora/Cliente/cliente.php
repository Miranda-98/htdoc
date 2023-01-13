<?php
    $options = array('uri'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/Calculadora/ServidorServicios',
    'location'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/Calculadora/ServidorServicios/serverSOAP.php');
    try{
        $cliente = new SoapClient(null, $options);
        $response = $cliente->sumar(1,100);
        echo "la suma es : ".$response."<br>";

        $response = $cliente->restar(2,2);
        echo "la resta es : ".$response;
    } catch (SoapFault $e) {
        echo 'ERROR '.$e->getMessage();
    }
?>