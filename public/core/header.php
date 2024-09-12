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
        <a href="<?= $navItem["url"] ?>" class="menuItem">
            <p><?= strtoupper($navItem["name"]) ?></p>
        </a>
        <?php } ?>
    </nav>
</div>

<div id="bottom">
    <form action="/bestellen" id="headerSelectFilmForm" method="get">
        <p id="formTitle">KOOP JE TICKETS</p>

        <div class="select" id="headerSelect">
            <input type="hidden" name="film" id="headerSelectInput">

            <div class="placeholder" id="headerSelectPlaceholder">
                <p id="headerSelectText">Kies je film</p>
                <img id="headerSelectArrow" src="<?= BASEURL ?>public/assets/img/icons/angle-down.png" alt="">
            </div>

            <div class="options" id="headerSelectOptions">
                <div class="option headerSelectOption">
                    <p>Jurrassic World: Rebirth</p>
                </div>
                <div class="option headerSelectOption">
                    <p>Insidious: The Red Door</p>
                </div>
            </div>
        </div>

        <div id="headerFormSubmitBtn">
            <p>BESTEL TICKETS</p>
        </div>
    </form>
</div>