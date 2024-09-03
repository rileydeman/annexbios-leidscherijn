<?php
//Including config file
include_once("app/config/config.php");
?>

<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | AnnexBios Leidscherijn</title>

    <link rel="icon" href="<?= BASEURL ?>favicon.ico">
    <link rel="icon" href="<?= BASEURL ?>/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?= BASEURL ?>/favicon.png">

<!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/home.css">

<!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="<?= BASEURL ?>public/assets/js/app.js"></script>
</head>

<body>

<header>
<!--    Getting the header document-->
    <?php include_once("public/core/header.php"); ?>
</header>

<main>
    <p>Main</p>
    <div class="block1">
        <p class="welcome-text">Welkom bij AnnexBios Leidscherijn</p>
        <p class="introductie-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
        <div class="draaiende-films-knop"><p class="draaiende-films-knop-text">BEKIJK DE DRAAIENDE FILMS</p></div>
    </div>
    <div class="block2">
        <div class="left">
            <img class="locatie-view" src="https://placehold.co/500x150">
            <div class="info">
                <div class="locatie">
                    <!-- <img class="pin" src="https://placehold.co/30x30"> -->
                    <!-- <div class="text">Berlijnplein 101 <br> 3541 CM Utrecht</div> -->
                </div>
            </div>
        </div>
        <div class="right">
            <!-- <img> -->
        </div>
    </div>
</main>

<footer>
<!--    Getting the footer document-->
    <?php include_once("public/core/footer.php"); ?>
</footer>

</body>

</html>