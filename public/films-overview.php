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
    <title>Films Overview | AnnexBios Leidscherijn</title>

    <!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.ico?v=--><?php //= time() ?><!--">-->
    <!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.svg?v=--><?php //= time() ?><!--" type="image/svg+xml">-->
    <!--    <link rel="apple-touch-icon" href="--><?php //= BASEURL ?><!--favicon.png?v=--><?php //= time() ?><!--">-->

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/film-overview.css?v=<?= time() ?>">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="<?= BASEURL ?>public/assets/js/app.js?v=<?= time() ?>"></script>
    <script defer src="<?= BASEURL ?>public/assets/js/header.js?v=<?= time() ?>"></script>
</head>

<body>

<header>
    <!--    Getting the header document-->
    <?php include_once("core/header.php"); ?>
</header>

<main>
 <div class="blackb">
   <div class="cropb">
     <div class="titleb">
        <div class="catt">
        <h2>FILM AGENDA</h2>
        </div>
     </div>
     <div class="filterb">
     </div>
     <div class="moviesb">
    <div class="parent">
        <?php for ($i = 1; $i <= 18; $i++): ?>
            <div class="mobox<?= $i ?>">
                <div class="poster">
                    <img class="poster-foto" src="../public/assets/img/poster.png">
                </div>
                <div class="info-rect">
                    <h3>JURASSIC WORLD: FALLEN KINGDOM </h3>
                </div>
                <div class="info-rect">
                <h3>*****</h3>
                </div>
                <div class="info-rect">
                 <h3>Release: 7-06-2018</h3>
                </div>
                <div class="info-rect ">
                <h3>Welkom in Jurassic World: Fallen Kingdom! Favoriete personages keren terug in dit 3D actie-spektakel.</h3>
                </div>
                <div class="info-rect">
                <a id="filmsButton" href="<?= BASEURL ?>film/<?= $i ?>">
                <div id="innerButton">
                    <p>MEER INFO & TICKETS</p>
                </div>
            </a>
                </div>
            </div>
        <?php endfor; ?>
    </div>
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