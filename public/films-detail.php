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
    <p>Main films detail</p>
</main>

<footer>
    <!--    Getting the footer document-->
    <?php include_once("core/footer.php"); ?>
</footer>

</body>

</html>