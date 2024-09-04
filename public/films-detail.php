<?php
//Including config file
include_once("../app/config/config.php");
?>

<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Films Detail | AnnexBios Leidscherijn</title>

    <link rel="icon" href="<?= BASEURL ?>favicon.ico">
    <link rel="icon" href="<?= BASEURL ?>/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?= BASEURL ?>/favicon.png">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/film-detail.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="<?= BASEURL ?>public/assets/js/app.js"></script>
</head>

<body>

<header>
    <!--    Getting the header document-->
    <?php include_once("core/header.php"); ?>
</header>

<main>
    <!-- <p>Main films detail</p> -->
    <p class="film-title"><!-- <?=$title ?> -->JURASSIC WORLD: FALLEN KINGDOM</p>
    <div class="info">
        <div class="left">
            <!-- <img src=film-poster> -->
        </div>
        <div class="right">
            <div class="beoordeling"></div>
            <div class="kijkwijzers"></div>
            <p class="release">Release: <!-- <?=$release ?> --></p>
            <p class="beschrijfing"><!-- <?=$Beschrijfing ?> --></p>
            <div class="film-info">
                <p class="genre">Genre: <!-- <?=$genre ?> --></p>
                <div class="duur">Duur: <!-- <?= $Duur ?> --></div>
                <div class="land">Land: <!-- <?= $Land ?> --></div>
                <div class="score">Score:<!-- <?= $imdbScore ?> --></div>
                <div class="regiseur"></div>
                <div class="acteurs"></div>
            </div>
        </div>
    </div>
</main>

<footer>
    <!--    Getting the footer document-->
    <?php include_once("core/footer.php"); ?>
</footer>

</body>

</html>