<?php
require_once 'lib/nusoap.php';
$cliente = new nusoap_client("http://app-bcd660bd-865d-4508-8e37-c2476881c8d1.cleverapps.io/index.php?wsdl", true);

    $marca= $_POST['marca'];
    $modelo= $_POST['modelo'];
    $almacenamiento= $_POST['almacenamiento'];
    $ram= $_POST['ram'];

    $param = array($marca, $modelo, $almacenamiento, $ram);
    $param2= array('marca' => $param[0]);
    $respuesta = $cliente->call("constructor.crear", $param2);
    include_once 'home.php';
    echo $id . $marca . $modelo .$almacenamiento . $ram;
?>