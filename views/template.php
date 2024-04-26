<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="description" content="Aplicacion de reciclaje">
    <meta name="keywords" content="recoapp">
    <meta name="author" content="recoapp">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RecoApp</title>

    <link rel="shortcut icon" href="<?php echo TemplateController::path(); ?>views/assets/img/icono.png" type="image/x-icon">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?php echo TemplateController::path(); ?>views/dist/bootstrap/css/bootstrap.min.css">

    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?php echo TemplateController::path(); ?>views/css/style.css">
</head>

<body>

    <?php include "modules/menu.php"; ?>

    <main>

        <?php

        // Validamos si existe una variable get url
        if (isset($_GET["url"])) {

            // Dividimos esa variable get con un explode para obtener unicamente el valor de la url
            $url = explode("/", $_GET["url"])[0];

            // Incluimos segun el valor de la url
            include "pages/$url/$url.php";
        } else {

            // Si no se encuentra la variable get url que inlcuya directamente el home de la aplicacion
            include "pages/inicio/inicio.php";
        }

        ?>

    </main>

    <?php include "modules/footer.php"; ?>

    <!-- JS Bootstrap -->
    <script src="<?php echo TemplateController::path(); ?>views/dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo TemplateController::path(); ?>views/dist/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- JS Personalizado -->

    <script src="<?php echo TemplateController::path(); ?>views/js/main.mjs" type="module"></script>

</body>

</html>