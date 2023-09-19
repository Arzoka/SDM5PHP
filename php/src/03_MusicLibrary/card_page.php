<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css" />

    <title>Music Library</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/Duration.js" defer"></script>
</head>

<body>
    <header class="container-fluid card-page-header">
        <div style="background-image: url('<?php require 'components/music_card_image.php' ?> ');" class="background-image"></div>
        <a href="index.php">
            <h2>Acoustix</h2>
        </a>

    </header>
    <main class="container-fluid card-page">
        <div class="background-gradient">
            <img src=<?php require 'components/music_card_image.php' ?> />
        </div>
        <hgroup>
            <h1> <?php require 'components/music_card_title.php' ?> </h1>
            <h2><?php require 'components/music_card_artist.php' ?></h2>
        </hgroup>

        <section class="grid">
            <div>
                <img src=<?php require 'components/music_card_image.php' ?>>
                <audio src=<?php require 'components/music_card_mp3.php' ?>> </audio>
            </div>
            <div>
                <p>Title: <?php require 'components/music_card_title.php' ?></p>
                <p>Artist: <?php require 'components/music_card_artist.php' ?></p>
                <p>Genre: <?php require 'components/music_card_genre.php' ?></p>
                <p id="duration">Duration:</p>
                <p>Released: <?php require 'components/music_card_release_date.php' ?></p>
                <audio id="duration-audio" controls>
                    <source src=<?php require 'components/music_card_mp3.php' ?>>
                </audio>
            </div>

        </section>
    </main>
</body>

</html>