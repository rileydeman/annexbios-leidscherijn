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
    <form action="">
        <p id="formTitle">KOOP JE TICKETS</p>
        <select name="film" id="">
            <option value="hideOption">Kies je film</option>
            <option value="">Jurrassic World: Rebirth</option>
            <option value="">Insidious: The Red Door</option>
        </select>
    </form>
</div>