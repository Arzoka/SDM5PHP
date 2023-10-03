<!DOCTYPE html>
<html lang="en">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/app/conf/config.php' ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/app/views/songs/id_song.php' ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css" />

    <title>Acoustix | <?php echo $song["title"]; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/svg" href="img/acoustix-logo.svg" />
    <meta name="description" content="Acoustix | The music library for everyone">
    <script src="js/SongPage.js" defer"></script>
</head>

<body>
    <header class="container-fluid card-page-header">
        <div style="background-image: url('<?php echo $song["image"]; ?> ');" class="background-image"></div>
        <img src="img/acoustix-logo.svg" alt="Acoustix logo" />
        <a href="index.php">
            Acoustix
        </a>

    </header>
    <main class="container-fluid card-page">
        <div class="background-gradient">
            <img src=<?php echo $song["image"]; ?> alt=<?php echo $song["title"]; ?> />
        </div>
        <div class="background-playing-animation">
            <div id="playing-div"></div>
        </div>
        <hgroup>
            <h1> <?php echo $song["title"]; ?> </h1>
            <a href="artists.php?artist=<?php echo $song["artist"]; ?>"><?php echo $song["artist"]; ?></a>
        </hgroup>

        <section class="grid">
            <div>
                <div>
                    <img class="music-img" src=<?php echo $song["image"]; ?> alt=<?php echo $song["title"]; ?>>
                    <img id="vinyl" src="img/Vinyl_White.webp">
                </div>

            </div>
            <div>
                <p>Title: <?php echo $song["title"]; ?></p>
                <p>Artist: <?php echo $song["artist"]; ?></p>
                <p>Genre: <?php echo $song["genre"]; ?></p>
                <p id="duration">Duration:</p>
                <p>Released: <?php echo $song["release_date"]; ?></p>
                <audio id="duration-audio" controls>
                    <source src=<?php echo $song["mp3"]; ?>>
                </audio>
            </div>
        </section>
    </main>
</body>

</html>