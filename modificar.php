<?php
require_once 'lib/nusoap.php';
$cliente = new nusoap_client("http://app-bcd660bd-865d-4508-8e37-c2476881c8d1.cleverapps.io/index.php?wsdl", true);

$id= $_POST['id'];
$marca =  $_POST['marca'];
$modelo =  $_POST['modelo'];
$almacenamiento =  $_POST['almacenamiento'] ;
$ram =  $_POST['ram'];

    $param = array(array('id' => $id,'marca' => $marca, 'modelo' => $modelo, 'almacenamiento' => $almacenamiento, 'ram' => $ram));
    $respuesta = $cliente->call("constructor.actualizar", $param);

    include_once 'home.php';


?>