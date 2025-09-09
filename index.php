<?php
include "connect.php";
include "./model/cuaca.model.php";
include "./controller/cuaca.controller.php";
include "./view/cuaca/cuaca.view.php";
$cuaca = new CuacaView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "./view/utils/navbar.utils.php"   ?>
        <?php $cuaca ->find(); ?>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>kota</th>
                <th>tanggal</th>
                <th>suhu</th>
            </tr>
            <?php $cuaca->show(); ?>
</body>
</html>
