<?php
if ($_POST) {
    $nombres = $_POST["formNombre"];
    $telefono = $_POST["formTelefono"];
    $direccion = $_POST["formDireccion"];
    $comboHamCla = $_POST["formCantComboHambClas"] ?? null;
    $comboHamDob = $_POST["formCantComboHambDobl"] ?? null;
    $comboHotDog = $_POST["formCantComboPerro"] ?? null;
    $comboPizza = $_POST["formPizza"] ?? null;
    $saborpizza = $_POST["SaborPizza"] ?? null;
    $comboMalteada = $_POST["formMalteada"] ?? null;
    $sabormalteada = $_POST["SaborMalteada"] ?? null;
    $comboGaseosa = $_POST["formGaseosas"] ?? null;
    $saborgaseosa = $_POST["SaborGaseosa"] ?? null;

    // Variables para precios
    +$preCla = "13000";
    +$preDob = "18000";
    +$preHD = "10000";
    +$prePiz = "8000";
    +$preMT = "8000";
    +$preGS = "3000";

    // Variable que servira como suma
    +$total = "0";
} ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logo45.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="estilosFact.css" rel="stylesheet">
    <title>Factura</title>
</head>
<body>

    <div class="container-fluid p-5">
        <div class="text-center">
            <h2>Factura #12345 Brasas Locas</h2>
        </div>

        <div class="row p-3 border">
            <div>
                <h4>Datos del Cliente</h4>
            </div>
            <div class="col-12 col-xxl-3 col-lg-4 col-md-6 col-sm-12 p-1">
                <h5>Cliente: <b><?php echo "$nombres" ?></b></h5>
            </div>
            <div class="col-12 col-xxl-3 col-lg-4 col-md-6 col-sm-12 p-1">
                <h5>Telefono: <b><?php echo "$telefono" ?></b></h5>
            </div>
            <div class="col-12 col-xxl-3 col-lg-4 col-md-6 col-sm-12 p-1">
                <h5>Dirección: <b><?php echo "$direccion" ?></b></h5>
            </div>
        </div>

        <div class="row border">
            <div class="col-12 p-3">
                <div class="row">
                    <div class="col-8 text-center">
                        <h5>Productos</h5>
                    </div>
                    <div class="col-4 text-center">
                        <h5>Totales</h5>
                    </div>
                </div>
            </div>

            <?php if ($comboHamCla) { ?>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-8">
                            <h6>Combo Hambg. Clasi. x <?php echo $comboHamCla ?> unidades</h6>
                        </div>
                        <div class="col-4">
                            <h6><?php echo ($comboHamCla * $preCla) ?></h6>
                        </div>
                    </div>
                </div>
            <?php $total = $comboHamCla * $preCla; } ?>

            <?php if ($comboHamDob) { ?>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-8">
                            <h6>Combo Hambg. Doble x <?php echo $comboHamDob ?> unidades</h6>
                        </div>
                        <div class="col-4">
                            <h6><?php echo ($comboHamDob * $preDob) ?></h6>
                        </div>
                    </div>
                </div>
            <?php $total = $comboHamDob * $preDob; } ?>

            <?php if ($comboHotDog) { ?>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-8">
                            <h6>Combo Hot Dog x <?php echo $comboHotDog ?> unidades</h6>
                        </div>
                        <div class="col-4">
                            <h6><?php echo ($comboHotDog * $preHD) ?></h6>
                        </div>
                    </div>
                </div>
            <?php $total += $comboHotDog * $preHD; } ?>

            <?php if ($comboPizza and $saborpizza) { ?>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-8">
                            <h6>Porción Pizza x <?php echo $comboPizza ?> unidades. Tipo: <?php echo $saborpizza; ?></h6>
                        </div>
                        <div class="col-4">
                            <h6><?php echo ($comboPizza * $prePiz) ?></h6>
                        </div>
                    </div>
                </div>
            <?php $total += $comboPizza * $prePiz; } ?>

            <?php if ($comboMalteada and $sabormalteada) { ?>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-8">
                            <h6>Malteada x <?php echo $comboMalteada ?> unidades. Tipo: <?php echo $sabormalteada; ?></h6>
                        </div>
                        <div class="col-4">
                            <h6><?php echo ($comboMalteada * $preMT) ?></h6>

                        </div>
                    </div>
                </div>
            <?php $total += $comboMalteada * $preMT; } ?>

            <?php if ($comboGaseosa and $saborgaseosa) { ?>
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-8">
                            <h6>Gaseosa x <?php echo $comboGaseosa ?> unidades. Tipo: <?php echo $saborgaseosa; ?></h6>
                        </div>
                        <div class="col-4">
                            <h6><?php echo ($comboGaseosa * $preGS) ?></h6>
                        </div>
                    </div>
                </div>
            <?php $total += $comboGaseosa * $preGS; } ?>

            <div class="col-12 p-2 pe-3">
                <div class="row">
                    <div class="col-8">

                    </div>
                    <div class="col-4">
                        <h6><?php echo $total; ?> COP</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>