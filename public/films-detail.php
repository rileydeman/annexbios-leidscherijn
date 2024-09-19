<?php
//Including config file
include_once("../app/config/config.php");

//including db conn
include_once("../app/db/db-conn.php")
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
    <script defer src="<?= BASEURL ?>public/assets/js/fetch-movie.js">
        // let id = 83;
    </script>

</head>

<body>

    <header>
        <!--    Getting the header document-->
        <?php include_once("core/header.php"); ?>
    </header>

    <main>

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

$urlParts = explode('/', $_SERVER['REQUEST_URI']);
$movieId = end($urlParts);

// Ensure the movie ID is a number and within the valid range (83-99)
$movieId = is_numeric($movieId) ? intval($movieId) : 83;
$movieId = max(83, min(99, $movieId));

$movieData = fetchMovieData($movieId);
$movie = $movieData['data'][0];
?>

<div id="content">
    <div id="result"></div>
    <div id="title">
        <h1 id="title-text"><?= $movie['title'] ?></h1>
    </div>

    <div id="info">
        <div id="poster">
            <img src="<?= $movie['image'] ?>" alt="<?= $movie['title'] ?>">
        </div>

        <div id="information">
            <div id="stars">
                <?php
                $rating = round($movie['rating'] / 2); // Assuming rating is out of 10
                for ($i = 1; $i <= 5; $i++) {
                    $starType = $i <= $rating ? 'filled' : 'empty';
                    echo "<div class='star'><img src='" . BASEURL . "public/assets/img/icons/star-{$starType}.png' alt=''></div>";
                }
                ?>
            </div>

            <div id="kijkwijzers">
                <?php foreach ($movie['viewing_guides'][0]['symbols'] as $symbol): ?>
                    <div class="wijzer">
                        <img src="<?= $symbol['image'] ?>" title="<?= $symbol['name'] ?>" alt="<?= $symbol['name'] ?>">
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="release">
                <p>Release: <?= date('d-m-Y', strtotime($movie['release_date'])) ?></p>
            </div>

            <div id="description">
                <p><?= $movie['description'] ?></p>
            </div>

            <div id="extraInfo">
                <p><b>Genre:</b>
                    <?php foreach ($movie['genres'] as $genre){
                    // var_dump($genre);
                    echo $genre['name'].'&nbsp;';
                    }?>
                </p>
                <p><b>Filmlengte:</b> <?= $movie['length'] ?> minuten</p>
                <p><b>Land:</b> USA</p>
                <p><b>Imdb score:</b> <?= $movie['rating'] ?>/10</p>
                <p><b>Regisseur:</b> <?= $movie['directors'][0]['name'] ?></p>
                <p><b>Acteurs:</b></p>
                <div id="actors">
                    <?php foreach (array_slice($movie['actors'], 0, 7) as $actor): ?>
                        <div class="actor">
                            <img src="<?= $actor['image'] ?: BASEURL . 'public/assets/img/persoon.png' ?>" alt="<?= $actor['name'] ?>">
                            <p><?= $actor['name'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <a href="<?= BASEURL ?>bestellen?film=<?= $movie['api_id'] ?>" id="buyTickets">
        <p>KOOP JE TICKETS</p>
    </a>

    <div id="trailer">
        <?php
        function generateYoutubeEmbedLink($link) {
            $videoId = explode("?v=", $link)[1];
            return "https://www.youtube.com/embed/" . $videoId;
        }
        ?>
        <iframe class="trailer" src="<?= generateYoutubeEmbedLink($movie['trailer_link']) ?>" title="<?= $movie['title'] ?> - Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
    </main>

    <footer>
        <!--    Getting the footer document-->
        <?php include_once("core/footer.php"); ?>
    </footer>

</body>

</html>