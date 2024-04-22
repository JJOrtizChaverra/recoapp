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
</head>

<body>

    <?php include "modules/header.php"; ?>

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
            include "pages/home/home.php";
        }

        ?>

    </main>

</body>

</html>