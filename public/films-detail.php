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

    <!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.ico?v=--><?php //= time() ?><!--">-->
    <!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.svg?v=--><?php //= time() ?><!--" type="image/svg+xml">-->
    <!--    <link rel="apple-touch-icon" href="--><?php //= BASEURL ?><!--favicon.png?v=--><?php //= time() ?><!--">-->

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/film-detail.css?v=<?= time() ?>">

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

    <div id="content">
        <div id="title">
            <h1>JURASSIC WORLD: FALLEN KINGDOM</h1>
        </div>
        
        <div id="info">
            <div id="poster">
                <img src="<?= BASEURL ?>public/assets/img/poster.png" alt="">
            </div>

            <div id="information">
                <div id="stars">
                    <div class="star">
                        <img src="<?= BASEURL ?>public/assets/img/icons/star-filled.png" alt="">
                    </div>
                    <div class="star">
                        <img src="<?= BASEURL ?>public/assets/img/icons/star-filled.png" alt="">
                    </div>
                    <div class="star">
                        <img src="<?= BASEURL ?>public/assets/img/icons/star-filled.png" alt="">
                    </div>
                    <div class="star">
                        <img src="<?= BASEURL ?>public/assets/img/icons/star-filled.png" alt="">
                    </div>
                    <div class="star">
                        <img src="<?= BASEURL ?>public/assets/img/icons/star-empty.png" alt="">
                    </div>
                </div>

                <div id="kijkwijzers">
                    <div class="wijzer">
                        <img src="<?= BASEURL ?>public/assets/img/icons/kijkwijzer/12.png" alt="">
                    </div>
                    <div class="wijzer">
                        <img src="<?= BASEURL ?>public/assets/img/icons/kijkwijzer/angst.png" alt="">
                    </div>
                    <div class="wijzer">
                        <img src="<?= BASEURL ?>public/assets/img/icons/kijkwijzer/geweld.png" alt="">
                    </div>
                </div>

                <div id="release">
                    <p>Release: 07-06-2018</p>
                </div>

                <div id="description">
                    <p>In het 3D actie-spektakel Jurassic World: Fallen Kingdom keren favoriete personages terug en worden er nieuwe soorten dinosaurussen geïntroduceerd die nog angstaanjagender zijn dan ooit tevoren. Welkom in Jurassic World: Fallen Kingdom! Drie jaar geleden werd het themapark en luxeresort Jurassic World verwoest door losgebarsten dinosaurussen. Isla Nublar is nu een onbewoond eiland geworden waar de overgebleven dinosaurussen in de jungle aan hun lot overgelaten zijn. Wanneer de slapende vulkaan op het eiland weer actief wordt, dreigen de dinosaurussen opnieuw uit te sterven. Claire (Bryce Dallas Howard) zet alles op alles om dit te voorkomen. Ze weet Owen (Chris Pratt) over te halen om samen met haar en een team van specialisten terug te gaan naar Isla Nublar om te proberen de dinosaurussen te redden. Owen is vastbesloten om de vermiste raptor Blue, die hij van jongs af aan heeft getraind, te vinden. Als ze op het eiland arriveren blijkt de vulkaan die op uitbarsten staat niet hun grootste probleem te zijn. In dit nieuwe deel van één van de meest populaire en succesvolle filmreeksen ooit zullen Jeff Goldblum en BD Wong weer te zien zijn als Ian Malcolm en Dr. Henry Wu. De cast bestaat verder uit James Cromwell, Ted Levine, Justice Smith, Geraldine Chaplin, Daniella Pineda, Toby Jones en Rafe Spall. De regie is in handen van J.A. Bayona (The Impossible), en het scenario is geschreven door Colin Trevorrow en Derek Connolly, de regisseur en co-scenarist van Jurassic World. Steven Spielberg en Colin Trevorrow treden op als uitvoerend producenten namens Universal Pictures en Amblin Entertainment. Productie is in handen van Frank Marshall, Pat Crowley en Belén Atienza.</p>
                </div>

                <div id="extraInfo">
                    <p><b>Genre:</b> Actie</p>
                    <p><b>Filmlengte:</b> 128 minuten</p>
                    <p><b>Land:</b> USA</p>
                    <p><b>Imdb score:</b> 8.3/10</p>
                    <p><b>Regisseur:</b> Juan Antonio Bayon</p>
                    <p><b>Acteurs:</b></p>
                    <div id="actors">
                        <?php for ($i = 0; $i < 7; $i++) { ?>
                        <div class="actor">
                            <img src="<?= BASEURL ?>public/assets/img/persoon.png" alt="">
                            <p>Bryce Dallas Howard</p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <a href="<?= BASEURL ?>bestellen" id="buyTickets">
            <p>KOOP JE TICKETS</p>
        </a>

        <div id="trailer">
            <iframe class="trailer" src="https://www.youtube.com/embed/1FJD7jZqZEk" title="Jurassic World: Fallen Kingdom - Final Trailer [HD]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</main>

<footer>
    <!--    Getting the footer document-->
    <?php include_once("core/footer.php"); ?>
</footer>

</body>

</html>