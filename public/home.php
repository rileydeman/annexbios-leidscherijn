<?php
//Including config file
include_once("app/config/config.php");

//including db conn
include_once("app/db/db-conn.php")
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
                        <?php if (isMobileDevice()) {?>
                            <a id="address-text" href="https://www.google.nl/maps/dir//Path%C3%A9+Utrecht+Leidsche+Rijn,+Berlijnplein+100,+3541+CM+Utrecht/@52.0966297,4.9977874,13z/data=!4m18!1m8!3m7!1s0x47c66f90fa96b45d:0x780d45f7e5b3ac34!2sPath%C3%A9+Utrecht+Leidsche+Rijn!8m2!3d52.0966297!4d5.0698852!15sCgZQYXRow6kiA4gBAVoIIgZwYXRow6mSAQ1tb3ZpZV90aGVhdGVy4AEA!16s%2Fg%2F11bvvy9nsj!4m8!1m0!1m5!1m1!1s0x47c66f90fa96b45d:0x780d45f7e5b3ac34!2m2!1d5.0698852!2d52.0966297!3e3?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D">Berlijnplein 101 <br> 3541 CM Utrecht</a>
                        <?php
                            } else { ?>
                            <p>Berlijnplein 101 <br> 3541 CM Utrecht</p>
                        <?php 
                            }
                        ?>
                        
                    </div>
                    <div id="phone" class="locInfoItem">
                        <img src="<?= BASEURL ?>public/assets/img/icons/phone-call.png" alt="">
                        <a id="phone-num" href="callto:0885152050">088 - 5152050</a>
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
                <a class="poster" href="<?= BASEURL ?>film/filmnaam">
                    <img class="poster-foto" src="../public/assets/img/poster.png">
                </a>
                <a class="info-rect" href="<?= BASEURL ?>film/filmnaam">
                    <h3>JURASSIC WORLD: FALLEN KINGDOM </h3>
                </a>
                <div class="info-rect">
                <h3>*****</h3>
                </div>
                <div class="info-rect">
                 <h3>Release: 7-06-2018</h3>
                </div>
                <div class="info-rect ">
                <h3>Welkom in Jurassic World: Fallen Kingdom! Favoriete personages keren terug in dit 3D actie-spektakel.</h3>
                </div>
                <a class="info-rect" href="<?= BASEURL ?>film/filmnaam">
                    <h3 class="goto-film-knop">MEER INFO & TICKETS</h3>
                </a>
                <div class="info-rect">
                <a id="filmsButton2" href="<?= BASEURL ?>film/<?= $i ?>">
                <div id="innerButton2">
                    <p>MEER INFO & TICKETS</p>
                </div>
            </a>
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