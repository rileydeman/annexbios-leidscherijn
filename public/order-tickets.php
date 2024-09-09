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
    <title>Order Tickets | AnnexBios Leidscherijn</title>

    <!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.ico?v=--><?php //= time() ?><!--">-->
    <!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.svg?v=--><?php //= time() ?><!--" type="image/svg+xml">-->
    <!--    <link rel="apple-touch-icon" href="--><?php //= BASEURL ?><!--favicon.png?v=--><?php //= time() ?><!--">-->

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/order-tickets.css">

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
    <!-- <p>Main order tickets</p> -->
    <h1 class="tickets-bestellen">TICKETS BESTELLEN</h1>
    <div class="filter">
        <p class="film-naam">JURASSIC WORLD</p>
        <p class="datum">DATUM ▽</p>
        <p class="tijdstip">TIJDSTIP ▽</p>
    </div>
    <div class="content">
        <div class="left">
            <div class="stap-1">
                <div><p class="stap-1-title">STAP 1: KIES JE TICKET</p></div>
                <table>
                    <tr class="row-1"><td class="space-right"><p>TYPE</p></td><td><p>PRIJS</p></td><td><p>AANTAL</p></td></tr>
                    <tr><td class="space-right"><p>Normaal</p></td><td><p>€9,00</p></td><td><select><option>0</option><option>1</option></select></td></tr>
                    <tr><td class="space-right"><p>Kind t/m 11 jaar</p></td><td><p>€5,00</p></td><td><select><option>0</option><option>1</option></select></td></tr>
                    <tr><td class="space-right"><p>65 +</p></td><td><p>€7,00</p></td><td><select><option>0</option><option>1</option></select></td></tr>
                </table>
                <div class="voucher"><p class="voucher-text">VOUCHERCODE</p><input class="voucher-input" type="text"><P class="voucher-redeem">TOEVOEGEN</P></div>
            </div>
            <div class="stap-2">
                <div><p class="stap-2-title">STAP 2: KIES JE STOEL</p></div>
                <div class="indeling"><img class="indeling-img" src="../public/assets/img/indeling.png"></div>
                <div class="kleur-index"><p class="vrij">VRIJ</p><p class="bezet">BEZET</p><p class="jouw-selectie">JOUW SECTIE</p></div>
            </div>
            <div class="stap-3">
                <div><p class="stap-3-title">STAP 3: CONTROLEER JE BESTELLING</p></div>
                <div class="bestelling-box">
                    <div class="bestelling-box-left">
                        <img class="film-poster" src="../public/assets/img/poster.png">
                    </div>
                    <div class="bestelling-box-right">
                        <p class="film-title">JURASSIC WORLD: FALLEN KINGDOM</p>
                        <div class="film-kijkwijzers">
                            <img class="kijkwijzer" title="12 jaar" src="../public/assets/img/icons/kijkwijzer/12.png">
                            <img class="kijkwijzer" title="Geweld" src="../public/assets/img/icons/kijkwijzer/geweld.png">
                            <img class="kijkwijzer" title="Angst" src="../public/assets/img/icons/kijkwijzer/angst.png">
                        </div>
                        <div class="bestelling-info">
                            <p><b>Bioscoop:</b></p>
                            <p><b>Wanneer:</b></p>
                            <p><b>Stoelen:</b></p>
                            <p><b>Tickets:</b></p>
                            <br>
                            <p><b>Totaal # ticket:</b></p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="stap-4">
                <div><p class="stap-4-title">STAP 4: VUL JE GEGEVENS IN</p></div>
                <div class="gegevens-invullen">
                    <input class="gegevens-input vn-input" type="text" placeholder="Voornaam">
                    <input class="gegevens-input an-input" type="text" placeholder="Achternaam*" required>
                    <br>
                    <input class="gegevens-input email-input" type="email" placeholder="E-mailadres*" required>
                    <br>
                    <input class="gegevens-input email-input" type="email" placeholder="E-mailadres*" required>
                </div>
            </div>
            <div class="stap-5">
                <div><p class="stap-5-title">STAP 5: KIES JE BETAALWIJZE</p></div>
                <div class="betaalwijzes">
                    <div class="betaalwijze"><input class="betaalwijze-checkbox" type="checkbox"><img class="betaalwijze-img nbb" src="../public/assets/img/nbb.png"></div>
                    <div class="betaalwijze"><input class="betaalwijze-checkbox" type="checkbox"><img class="betaalwijze-img maestro" src="../public/assets/img/maestro.png"></div>
                    <div class="betaalwijze"><input class="betaalwijze-checkbox" type="checkbox"><img class="betaalwijze-img ideal" src="../public/assets/img/ideal.png"></div>
                </div>
                <div class="avv"><input class="avv-checkbox" type="checkbox"><p class="avv-text">Ja, ik ga akkoord met de <a class="avv-link" href="/avv">algemene voorwaarden</a>.</p></div>
            </div>

        </div>
        <div class="film-card">
            <div class="poster"><img class="poster" src="../public/assets/img/poster.png"></div>
            <p class="title">JURASSIC WORLD: FALLEN KINGDOM </p>
            <div class="beoordeling"></div>
            <p class="release"></p>
            <p class="summary"></p>
        </div>
    </div>
    <div class="afrekenen"><p>AFREKENEN</p></div>
</main>

<footer>
    <!--    Getting the footer document-->
    <?php include_once("core/footer.php"); ?>
</footer>

</body>

</html>