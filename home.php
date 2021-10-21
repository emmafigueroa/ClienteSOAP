<?php
require_once 'lib/nusoap.php';
$cliente = new nusoap_client("http://app-bcd660bd-865d-4508-8e37-c2476881c8d1.cleverapps.io/index.php?wsdl", true);
$id = "";
$marca = "";
$modelo = "";
$almacenamiento = "";
$ram = "";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <div class="seccion">
        <div class="contenidos">
            <div class="titulo">
                <h1>CRUD CELULARES</h1>
            </div>
            <div class="contenido">

                <table>
                    <tr>
                        <td>ID</td>
                        <td>MARCA</td>
                        <td>MODELO</td>
                        <td>ALMACENAMIENTO</td>
                        <td>RAM</td>
                    </tr>
                    <tr>
                        <?php
                        $param = array('id' => $id, 'marca' => $marca, 'modelo' => $modelo, 'almacenamiento' => $almacenamiento, 'ram' => $ram);
                        $respuesta = $cliente->call("constructor.listar", $param);
                        print_r($respuesta);
                        ?>
                        <br>
                    </tr>
                </table>

            </div>
            <div class="formulario">
                <form class="form crear" action="crear.php" method="post">
                    <input type="text" name="marca" placeholder="Marca">
                    <input type="text" name="modelo" placeholder="Modelo">
                    <input type="text" name="almacenamiento" placeholder="Almacenamiento">
                    <input type="text" name="ram" placeholder="Ram">
                    <button type="submit"><i class='bx bx-add-to-queue'></i></button>
                </form>
                <form class="form eliminar" action="eliminar.php" method="post">
                    <input class="id" type="text" name="id" placeholder="Id">
                    <button type="submit"><i class='bx bx-trash'></i></button>
                </form>
                <form class="form modificar" action="modificar.php" method="post">
                    <input class="id" type="text" name="id" placeholder="Id">
                    <input type="text" name="marca" placeholder="Marca">
                    <input type="text" name="modelo" placeholder="Modelo">
                    <input type="text" name="almacenamiento" placeholder="Almacenamiento">
                    <input type="text" name="ram" placeholder="Ram">
                    <button type="submit"><i class='bx bx-edit-alt'></i></button>
                </form>
            </div>
            <div class="botones">
                <i class='bx bx-add-to-queue create'></i>
                <i class='bx bx-trash delete'></i>
                <i class='bx bx-edit-alt update'></i>
            </div>
        </div>
    </div>
    <script src="scripts/form.js"></script>
</body>

</html>