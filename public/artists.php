<!DOCTYPE html>
<html lang="en">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/app/conf/config.php' ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/app/views/artists/artist.php' ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/app/views/artists/artist_songs.php' ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css" />
    <title>Acoustix | <?php echo $artist["artist_name"]; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/svg" href="img/acoustix-logo.svg" />
    <script src="js/ArtistPage.js" defer></script>
    <meta name="description" content="Acoustix | The music library for everyone">
</head>

<body>
    <header class="container-fluid card-page-header">
        <div style="background-image: url('<?php echo $artist["image"]; ?> ');" class="background-image"></div>
        <img src="img/acoustix-logo.svg" alt="Acoustix logo" />
        <a href="index.php">
            Acoustix
        </a>

    </header>
    <main class="container-fluid artist-card-page">
        <div class="background-gradient">
            <img src=<?php echo $artist["image"]; ?> alt=<?php echo $artist["artist_name"]; ?> />
        </div>
        <div class="background-playing-animation">
            <div id="playing-div"></div>
        </div>
        <section class="grid">
            <h1> <?php echo $artist["artist_name"]; ?> </h1>
            <h2>Songs</h2>
        </section>


        <section class="grid">
            <div>
                <div class="artist-img-wrap">
                    <img class="artist-img" src=<?php echo $artist["image"]; ?> alt=<?php echo $artist["artist_name"]; ?>>
                </div>
                <h4 id="artist-song-count">Songs: ?</h4>

            </div>
            <h3>Songs</h3>
            <div class="artist-music-card-grid" id="music-grid">
                <?php foreach ($artist_songs as $artist_song) { ?>
                    <article style="background-image: url('<?php echo $artist_song["image"]; ?>')" class="music-card">
                        <a href="songs.php?id=<?php echo $artist_song["ID"]; ?>" class="container-fluid">
                            <p class="music-title"><?php echo $artist_song['title']; ?></p>
                            <p class="music-genre"><?php echo $artist_song['release_date']; ?></p>
                            <p class="music-genre"><?php echo $artist_song['genre']; ?></p>
                        </a>
                    </article>
                <?php } ?>
            </div>

        </section>
    </main>
</body>

</html>