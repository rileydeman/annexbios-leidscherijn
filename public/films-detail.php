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
    <script defer src="<?= BASEURL ?>public/assets/js/header.js"></script>

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
            <img class="poster" src="../public/assets/img/poster.png">
        </div>
        <div class="right">
            <div class="beoordeling">
                <img class="kijkwijzer" src="https://placehold.co/40x40">
                <img class="kijkwijzer" src="https://placehold.co/40x40">
                <img class="kijkwijzer" src="https://placehold.co/40x40">
                <img class="kijkwijzer" src="https://placehold.co/40x40">
                <img class="kijkwijzer" src="https://placehold.co/40x40">
            </div>
            <div class="kijkwijzers">
                <img class="kijkwijzer" src="https://placehold.co/40x40">
                <img class="kijkwijzer" src="https://placehold.co/40x40">
                <img class="kijkwijzer" src="https://placehold.co/40x40">
            </div>
            <p class="release">Release: <!-- <?=$release ?> --></p>
            <p class="beschrijfing">BLAH BLAH BLAH BLAAHA BLAH<!-- <?=$Beschrijfing ?> --></p>
            <div class="film-info">
                <p class="genre"><b>Genre:</b> Actie<!-- <?=$genre ?> --></p>
                <p class="duur"><b>Duur:</b> 100m<!-- <?= $Duur ?> --></p>
                <p class="land"><b>Land:</b> USA<!-- <?= $Land ?> --></p>
                <p class="score"><b>Score:</b> 8.9<!-- <?= $imdbScore ?> -->/10</p>
                <p class="regiseur"><b>Regiseur:</b> persoon<!-- <?= $regiseur?> --></p>
                <p class="acteurs-text"><b>Acteurs:</b></p>
                <div class="acteurs">
                    <div class="persoon">
                        <img class="person-foto" src="../public/assets/img/persoon.png">
                        <p class="persoon-naam">Bryce Dallas Howard</p>
                    </div>
                    <div class="persoon">
                        <img class="person-foto" src="../public/assets/img/persoon.png">
                        <p class="persoon-naam">Bryce Dallas Howard</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="koop-je-tickets"><!-- <?=$title ?> -->JURASSIC WORLD: FALLEN KINGDOM</p>
    <div class="trailer"></div>
</main>

<footer>
    <!--    Getting the footer document-->
    <?php include_once("core/footer.php"); ?>
</footer>

</body>

</html>