<?php
require_once 'lib/nusoap.php';

$cliente = new nusoap_client("http://app-bcd660bd-865d-4508-8e37-c2476881c8d1.cleverapps.io/index.php?wsdl", true);
$id= $_POST['id'];

    $param = array('id' => $id);
    $respuesta = $cliente->call("constructor.eliminar", $param);
    print_r($respuesta);
    require_once 'home.php';


?>