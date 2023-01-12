<?php
    include('library.php');
    $lib = new Library();
    $response = $lib->sumar(2,2);
    echo $response;
?>