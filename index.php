a<?php
// index.php

// Configuración básica
$title = "Mi primera página PHP";
$date = date("d/m/Y");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 40px;
        }
        .container {
            background: white;
            border-radius: 8px;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        small {
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= $title ?></h1>
        <p>¡Bienvenido a tu aplicación PHP!</p>
        <p><small>El dia de hoy es <?= $date ?></small></p>
    </div>
</body>
</html>
