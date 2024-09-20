<div id="head">
    <div id="left">
        <a href="<?= BASEURL ?>" id="logo">
            <img src="<?= BASEURL ?>public/assets/img/AnnexBios-leidscherijn-logo.png" alt="">
        </a>
    </div>
    <nav>
        <?php
        $nav = file_get_contents(BASEURL . "public/assets/json/nav.json");
        $nav = json_decode($nav, true);

        foreach ($nav as $navItem) {
        ?>
        <a href="<?=BASEURL?><?= $navItem["url"] ?>" class="menuItem">
            <p><?= strtoupper($navItem["name"]) ?></p>
        </a>
        <?php } ?>
    </nav>
</div>

<div id="bottom">
    <form action="/bestellen" id="headerSelectFilmForm" method="get">
        <p id="formTitle">KOOP JE TICKETS</p>

        <?php
        $token = $secrets["api"]["annexbios"];

        function fetchMovieData($movieId) {
            global $token;
            $fetch_url = "https://annexbios.nickvz.nl/api/v1/movieData/{$movieId}";

            $ch = curl_init($fetch_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Authorization: Bearer {$token}",
                "Content-Type: application/json"
            ]);

            $response = curl_exec($ch);
            curl_close($ch);

            return json_decode($response, true);
        }

        ?>

        <div class="select" id="headerSelect">
            <input type="hidden" name="film" id="headerSelectInput">

            <div class="placeholder" id="headerSelectPlaceholder">
                <p id="headerSelectText">Kies je film</p>
                <img id="headerSelectArrow" src="<?= BASEURL ?>public/assets/img/icons/angle-down.png" alt="">
            </div>

            <div class="options" id="headerSelectOptions">

                <?php for ($i = 83; $i < 150; $i++) {
                    $movieData = fetchMovieData($i);

                    if (!empty($movieData["data"][0])) {
                        $movie = $movieData["data"][0]; ?>

                        <div class="option headerSelectOption">
                            <p><?= $movie["title"] ?></p>
                        </div>

                    <?php }
                } ?>

<!--                <div class="option headerSelectOption">-->
<!--                    <p>Jurrassic World: Rebirth</p>-->
<!--                </div>-->
<!--                <div class="option headerSelectOption">-->
<!--                    <p>Insidious: The Red Door</p>-->
<!--                </div>-->
            </div>
        </div>

        <div id="headerFormSubmitBtn">
            <p>BESTEL TICKETS</p>
        </div>
    </form>
</div>