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
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/home.css?v=<?= time() ?>">

<!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="<?= BASEURL ?>public/assets/js/app.js?v=<?= time() ?>"></script>
    <script defer src="<?= BASEURL ?>public/assets/js/header.js?v=<?= time() ?>"></script>
    <script defer src="<?= BASEURL ?>public/assets/js/movie-filters.js?v=<?= time() ?>"></script>
</head>

<body>

<header>
<!--    Getting the header document-->
    <?php include_once("public/core/header.php"); ?>
</header>

<main>
    <div id="content">
        <div id="welcome">
            <h1>Welkom bij AnnexBios Leidscherijn</h1>
            <p id="introduction">AnnexBios Leidsche Rijn is gevestigd op Berlijnplein 101, 3541 CM Utrecht. Bekijk de locatie op de kaart en ontdek de handige parkeermogelijkheden. De bioscoop is goed bereikbaar met zowel de auto als het openbaar vervoer. Kaartjes koop je op deze website of aan de kassa.</p>
            <a id="filmsButton" href="<?= BASEURL ?>films">
                <div id="innerButton">
                    <p>BEKIJK DE DRAAIENDE FILMS</p>
                </div>
            </a>
        </div>

        <div id="location">
            <div id="locLeft">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.087836981029!2d5.067164277188931!3d52.09633297195333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c66f909248f195%3A0x932a461dcd459ab9!2sBerlijnplein%20101%2C%20Utrecht!5e0!3m2!1sen!2snl!4v1725608716675!5m2!1sen!2snl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div id="locationInfo">
                    <div id="address" class="locInfoItem">
                        <img src="<?= BASEURL ?>public/assets/img/icons/location-marker.png" alt="">
                        <p>Berlijnplein 101 <br> 3541 CM Utrecht</p>
                    </div>
                    <div id="phone" class="locInfoItem">
                        <img src="<?= BASEURL ?>public/assets/img/icons/phone-call.png" alt="">
                        <p>020-12345678</p>
                    </div>
                    <div id="accessibility">
                        <p id="title">BEREIKBAARHEID</p>
                        <p>AnnexBios Leidsche Rijn is telefonisch bereikbaar tijdens openingstijden, meestal vanaf een half uur voor de eerste film tot een half uur na de laatste voorstelling. Voor actuele tijden en vragen kun je het beste de website raadplegen of direct contact opnemen.</p>
                    </div>
                </div>
            </div>
            <div id="locRight">
                <img src="<?= BASEURL ?>public/assets/img/LRC-bios-2.png" alt="">
            </div>
        </div>

        <div id="films">
            <div id="head">
                <div id="title">
                    <h2>FILM AGENDA</h2>
                </div>
                <div id="filters">
                    <img id="filtersIcon" src="<?= BASEURL ?>public/assets/img/icons/settings-sliders.png" alt="">
                    <form action="">
                        <div class="input">
                            <input type="radio" name="filter" id="movies" checked>
                            <label for="movies">FILMS</label>
                        </div>
                        <div class="input">
                            <input type="radio" name="filter" id="thisWeek">
                            <label for="thisWeek">DEZE WEEK</label>
                        </div>
                        <div class="input">
                            <input type="radio" name="filter" id="today">
                            <label for="today">VANDAAG</label>
                        </div>
                        <div id="movieFilterSelect">
                            <div id="categoryInput">
                                <input type="radio" name="filter" id="category">
                                <label for="category">CATEGORIE</label>
                            </div>

                            <div id="movieFilterSelectArrowBox">
                                <img src="<?= BASEURL ?>public/assets/img/icons/angle-down-primary.png" id="movieFilterSelectArrow" alt="">
                            </div>

                            <div id="movieCatOptions">
                                <input type="checkbox" name="movieCat" id="horror" value="horror">
                                <label for="horror">HORROR</label>
                                <br>
                                <input type="checkbox" name="movieCat" id="actie" value="actie">
                                <label for="actie">ACTIE</label>
                                <br>
                                <input type="checkbox" name="movieCat" id="kids" value="kids">
                                <label for="kids">KIDS</label>
                                <br>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="moviesb">
    <div class="parent">
        <?php for ($i = 1; $i <= 12; $i++): ?>
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
                <h3>KNOP</h3>
                </div>
            </div>
        <?php endfor; ?>
    </div>
            </div>
            <div id="repeater"></div>
            <div id="foot">
                <a href="<?= BASEURL ?>films" id="viewMoreFilmsBtn">
                    <div id="innerBtn">
                        <p>BEKIJK ALLE FILMS</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

<footer>
<!--    Getting the footer document-->
    <?php include_once("public/core/footer.php"); ?>
</footer>

</body>

</html>