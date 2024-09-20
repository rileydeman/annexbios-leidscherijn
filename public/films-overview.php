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
    <title>Films Overview | AnnexBios Leidscherijn</title>

    <!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.ico?v=--><?php //= time() ?><!--">-->
    <!--    <link rel="icon" href="--><?php //= BASEURL ?><!--favicon.svg?v=--><?php //= time() ?><!--" type="image/svg+xml">-->
    <!--    <link rel="apple-touch-icon" href="--><?php //= BASEURL ?><!--favicon.png?v=--><?php //= time() ?><!--">-->

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/fonts.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/footer.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/film-overview.css?v=<?= time() ?>">

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
        <div class="blackb">
            <div class="cropb">
                <div class="titleb">
                    <div class="catt">
                        <h2>FILM AGENDA</h2>
                    </div>
                </div>
                <div class="filterb">
                </div>

<div class="moviesb">
    <div class="parent">
        <?php for ($i = 83; $i <= 150; $i++):
            $movieData = fetchMovieData($i);
            if (!empty($movieData['data'][0])):
                $movie = $movieData['data'][0];
        ?>
            <div class="mobox">
                <div class="poster">
                    <img class="poster-foto" src="<?= $movie['image'] ?>">
                </div>
                <div class="info-rect">
                    <h3><?= $movie['title'] ?></h3>
                </div>
                <div class="info-rect">
                    <p>
                        <!-- <?= str_repeat('*', round($movie['rating'] / 2)) ?> -->
                        IMDB Rating: <?= $movie['rating']?>
                    </p>
                </div>
                <div class="info-rect">
                    <h3>Release: <?= date('d-m-Y', strtotime($movie['release_date'])) ?></h3>
                </div>
                <div class="info-rect">
                    <h3><?= substr($movie['description'], 0, 100) . '...' ?></h3>
                </div>
                <div class="info-rect">
                    <a id="filmsButton" href="<?= BASEURL ?>film/<?= $movie['api_id'] ?>">
                        <div id="innerButton">
                            <p>MEER INFO & TICKETS</p>
                        </div>
                    </a>
                </div>
            </div>
        <?php 
            endif;
        endfor; 
        ?>
    </div>
</div>

            </div>
        </div>
    </main>

    <footer>
        <!--    Getting the footer document-->
        <?php include_once("core/footer.php"); ?>
    </footer>

</body>

</html>