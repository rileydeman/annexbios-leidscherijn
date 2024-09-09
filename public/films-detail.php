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
    <!-- <p>Main films detail</p> -->
    <p class="film-title"><!-- <?=$title ?> -->JURASSIC WORLD: FALLEN KINGDOM</p>
    <div class="info">
        <div class="left">
            <img class="poster" src="../public/assets/img/poster.png">
        </div>
        <div class="right">
            <div class="beoordeling">
                <?php // if ($beoordeling => 1) {?>
                        <img class="sterren" src="https://placehold.co/40x40">
                    <?php //  if ($beoordeling => 2) {?>
                        <img class="sterren" src="https://placehold.co/40x40">
                    <?php // }
                //}?>
            </div>
            <div class="kijkwijzers">
                <div class="kijkwijzers-leefdtijd">
                    <?php // if($kijkwijzer_leeftijd_al == true){ ?>
                    <!-- <img class="kijkwijzer" title="Alle leeftijden" src="../public/assets/img/icons/kijkwijzer/al.png"> -->
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_6 == true){ ?>
                    <!-- <img class="kijkwijzer" title="6 jaar" src="../public/assets/img/icons/kijkwijzer/6.png"> -->
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_9 == true){ ?>
                    <!-- <img class="kijkwijzer" title="9 jaar" src="../public/assets/img/icons/kijkwijzer/9.png"> -->
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_12 == true){ ?>
                    <img class="kijkwijzer" title="12 jaar" src="../public/assets/img/icons/kijkwijzer/12.png">
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_14 == true){ ?>
                    <!-- <img class="kijkwijzer" title="14 jaar" src="../public/assets/img/icons/kijkwijzer/14.png"> -->
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_16 == true){ ?>
                    <!-- <img class="kijkwijzer" title="16 jaar" src="../public/assets/img/icons/kijkwijzer/16.png"> -->
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_18 == true){ ?>
                    <!-- <img class="kijkwijzer" title="18 jaar" src="../public/assets/img/icons/kijkwijzer/18.png"> -->
                    <?php // } ?>
                </div>
                <div class="kijkwijzers-inhoud">
                <?php // if($kijkwijzer_leeftijd_al == true){ ?>
                    <img class="kijkwijzer" title="Geweld" src="../public/assets/img/icons/kijkwijzer/geweld.png">
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_6 == true){ ?>
                    <img class="kijkwijzer" title="Angst" src="../public/assets/img/icons/kijkwijzer/angst.png">
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_9 == true){ ?>
                    <!-- <img class="kijkwijzer" title="Seks" src="../public/assets/img/icons/kijkwijzer/seks.png"> -->
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_12 == true){ ?>
                    <!-- <img class="kijkwijzer" title="Discriminatie" src="../public/assets/img/icons/kijkwijzer/discriminatie.png"> -->
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_14 == true){ ?>
                    <!-- <img class="kijkwijzer" title="Roken, alcohol en drugs" src="../public/assets/img/icons/kijkwijzer/drugs-en-alcohol.png"> -->
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_16 == true){ ?>
                    <!-- <img class="kijkwijzer" title="Grof taalgebruik" src="../public/assets/img/icons/kijkwijzer/taal.png"> -->
                    <?php // } ?>
                    <?php // if($kijkwijzer_leeftijd_18 == true){ ?>
                    <!-- <img class="kijkwijzer" title="Gevaarlijk gedrag" src="../public/assets/img/icons/kijkwijzer/gevaarlijk-gedrag-4x.png"> -->
                    <?php // } ?>
                </div>          
            </div>
            <p class="release">Release: <!-- <?=$release ?> --></p>
            <p class="beschrijfing">In het 3D actie-spektakel Jurassic World: Fallen Kingdom keren favoriete personages terug en worden er nieuwe soorten dinosaurussen geïntroduceerd die nog angstaanjagender zijn dan ooit tevoren. Welkom in Jurassic World: Fallen Kingdom! Drie jaar geleden werd het themapark en luxeresort Jurassic World verwoest door losgebarsten dinosaurussen. Isla Nublar is nu een onbewoond eiland geworden waar de overgebleven dinosaurussen in de jungle aan hun lot overgelaten zijn. Wanneer de slapende vulkaan op het eiland weer actief wordt, dreigen de dinosaurussen opnieuw uit te sterven. Claire (Bryce Dallas Howard) zet alles op alles om dit te voorkomen. Ze weet Owen (Chris Pratt) over te halen om samen met haar en een team van specialisten terug te gaan naar Isla Nublar om te proberen de dinosaurussen te redden. Owen is vastbesloten om de vermiste raptor Blue, die hij van jongs af aan heeft getraind, te vinden. Als ze op het eiland arriveren blijkt de vulkaan die op uitbarsten staat niet hun grootste probleem te zijn. In dit nieuwe deel van één van de meest populaire en succesvolle filmreeksen ooit zullen Jeff Goldblum en BD Wong weer te zien zijn als Ian Malcolm en Dr. Henry Wu. De cast bestaat verder uit James Cromwell, Ted Levine, Justice Smith, Geraldine Chaplin, Daniella Pineda, Toby Jones en Rafe Spall. De regie is in handen van J.A. Bayona (The Impossible), en het scenario is geschreven door Colin Trevorrow en Derek Connolly, de regisseur en co-scenarist van Jurassic World. Steven Spielberg en Colin Trevorrow treden op als uitvoerend producenten namens Universal Pictures en Amblin Entertainment. Productie is in handen van Frank Marshall, Pat Crowley en Belén Atienza.<!-- <?=$Beschrijfing ?> --></p>
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
    <p class="koop-je-tickets">KOOP JE TICKETS</p>
    <iframe class="trailer" src="https://www.youtube.com/embed/1FJD7jZqZEk" title="Jurassic World: Fallen Kingdom - Final Trailer [HD]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</main>

<footer>
    <!--    Getting the footer document-->
    <?php include_once("core/footer.php"); ?>
</footer>

</body>

</html>