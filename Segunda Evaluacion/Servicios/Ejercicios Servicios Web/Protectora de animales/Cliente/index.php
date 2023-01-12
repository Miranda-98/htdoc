<?php
    $options = array('uri'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/Ejercicios%20Servicios%20Web/Protectora%20de%20animales/Servicio/',
    'location'=>'http://localhost/practicas_clase/htdoc/Segunda%20Evaluacion/Servicios/Ejercicios%20Servicios%20Web/Protectora%20de%20animales/Servicio/serverSoap.php');
    
    try{
        $adopcionControlador = new SoapClient(null, $options);
        $response = $adopcionControlador->datosTablaAdopcion();
        echo $response;
        
    } catch (SoapFault $e) {
        echo 'ERROR '.$e->getMessage();
    }
?>