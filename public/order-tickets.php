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
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/order-tickets.css?v=<?= time() ?>">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="<?= BASEURL ?>public/assets/js/app.js?v=<?= time() ?>"></script>
    <script defer src="<?= BASEURL ?>public/assets/js/header.js?v=<?= time() ?>"></script>
    <script defer src="<?= BASEURL ?>public/assets/js/order-tickets.js?v=<?= time() ?>"></script>
</head>

<body>

<header>
    <!--    Getting the header document-->
    <?php include_once("core/header.php"); ?>
</header>

<main>
    <div id="content">
        <div id="title">
            <h1>TICKETS BESTELLEN</h1>
        </div>

        <div id="filters">
            <div id="moviename">
                <p>JURASSIC WORLD</p>
            </div>
            <div id="date">
                <select name="" id="">
                    <option value="">DATUM</option>

                    <?php for ($i = 0; $i < 10; $i++) {
                        $date = (Date("j") + ($i * 1)) . "-" . Date("m") . "-" . Date("Y");
                        ?>
                    <option value="<?= $date ?>"><?= $date ?></option>
                    <?php } ?>
                </select>
            </div>
            <div id="time">
                <select name="" id="">
                    <option value="">TIJD</option>

                    <option value="10:50">10:50</option>
                    <option value="15:35">15:35</option>
                    <option value="22:10">22:10</option>
                </select>
            </div>
        </div>

        <div id="innerContent">
            <form action="" method="post">
                <h2>STAP 1: KIES JE STOEL(EN)</h2>

                <div id="outerRoom">
                    <div id="innerRoom">
                        <div id="movieCloth">
                            <p>FILMDOEK</p>
                        </div>

                        <div id="chairs">
                            <?php
                            $rows = 10;
                            $cpr = 12;

                            for ($i = 1; $i < ($rows + 1); $i++) { ?>
                            <div class="row">
                                <?php for ($j = 1; $j < ($cpr + 1); $j++) { ?>
                                <div class="chair" row="<?= $i ?>" chair="<?= $j ?>" coordinate="<?= $i ?>.<?= $j ?>">
                                    <div class="innerChair">
                                        <div class="seat"></div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>

                            <div id="legenda">
                                <h3>LEGENDA</h3>
                            </div>
                        </div>

<!--                        <div id="legenda">-->
<!--                            <h3>LEGENDA</h3>-->
<!--                        </div>-->
                    </div>
                </div>
            </form>

            <div id="movie">
                <p>movie</p>
            </div>
        </div>
    </div>

    <!-- <p>Main order tickets</p> -->

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
            <div class="poster"><img class="card-poster" src="../public/assets/img/poster.png"></div>
            <p class="card-title">JURASSIC WORLD: FALLEN KINGDOM </p>
            <div class="card-beoordeling"><img class="sterren" src="https://placehold.co/30x30"><img class="sterren" src="https://placehold.co/30x30"></div>
            <p class="card-release">Release: 7-06-2018</p>
            <p class="card-summary">Welkom in Jurassic World: Fallen Kingdom! Favoriete personages keren terug in dit 3D actie-spektakel.</p>
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