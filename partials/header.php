<?php

    session_start();

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title><?= APP_NAME ?></title>
</head>
<body>

<header>
    <h1 class="titulo"><?= APP_NAME ?></h1>
    <?php include "nav.php"; ?>
    <hr class="linea">
</header>