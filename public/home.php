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

<!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.ico?v=--><?php //= time() ?><!--">-->
<!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.svg?v=--><?php //= time() ?><!--" type="image/svg+xml">-->
<!--    <link rel="apple-touch-icon" href="--><?php //= BASEURL ?><!--favicon.png?v=--><?php //= time() ?><!--">-->

<!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/home.css">

<!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="<?= BASEURL ?>public/assets/js/app.js"></script>
    <script defer src="<?= BASEURL ?>public/assets/js/header.js"></script>
</head>

<body>

<header>
<!--    Getting the header document-->
    <?php include_once("public/core/header.php"); ?>
</header>

<main>
    <div class="block1">
        <p class="welcome-text">Welkom bij AnnexBios Leidscherijn</p>
        <p class="introductie-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
        <a href="/films"><div class="draaiende-films-knop"><p class="draaiende-films-knop-text">BEKIJK DE DRAAIENDE FILMS</p></div></a>
    </div>
    <div class="block2">
        <div class="left">
            <!-- <iframe class="locatie-view" src="https://placehold.co/400x200"></iframe> -->
            <img class="locatie-view" src="https://placehold.co/450x200">
            <div class="info">
                <div class="locatie">
                    <img class="info-icon pin" src="./public/assets/img/icons/location.png">
                    <p>Berlijnplein 101 <br> 3541 CM Utrecht</p>
                </div>
                <div class="telefoon">
                    <img class="info-icon phone" src="./public/assets/img/icons/phone.png">
                    <p>088 - 5152050</p>
                </div>
                <div class="bereikbaarheid">
                    <p class="bereikbaarheid-hoofd"><b>BEREIKBAARHEID</b></p>
                    <p class="bereikbaarheid-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                </div>
            </div>
        </div>
        <div class="right">
            <img class="bios-foto" src="./public/assets/img/LRC-bios-2.png">
        </div>
    </div>
    <div class="block3">
        <a href="/films"><div class="alle-films-knop" src="./public/film-overview.php"><p>BEKIJK ALLE FILMS</p></div></a>
    </div>
</main>

<footer>
<!--    Getting the footer document-->
    <?php include_once("public/core/footer.php"); ?>
</footer>

</body>

</html>