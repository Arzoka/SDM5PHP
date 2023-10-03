<!DOCTYPE html>
<html lang="en">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/app/conf/config.php' ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/app/views/songs/all_songs.php' ?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Acoustix | The music library for everyone">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css" />
  <title>Acoustix | Music Library</title>
  <link rel="icon" type="image/svg" href="img/acoustix-logo.svg" />
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/App.js" defer"></script>
</head>

<body>
  <header class="container-fluid">
    <img src="img/acoustix-logo.svg" alt="Acoustix logo" />
    <a href="index.php">
      Acoustix
    </a>
  </header>
  <main class="container">

    <input placeholder="Search" onkeyup="searchResult(this.value)" />
    <h1>Music Library</h1>
    <div class="music-card-grid" id="music-grid">
      <?php foreach ($songs as $song) {
        $keywords = $song['title'] . $song['artist'] . $song['genre'];
      ?>
        <article style="background-image: url(' <?php echo $song["image"]; ?>')" data-keywords="<? echo $keywords ?>" class="music-card">
          <a href="songs.php?id=<?php echo $song["ID"]; ?>" class="container-fluid">
            <p class="music-title"><?php echo $song['title']; ?></p>
            <p class="music-artist"><?php echo $song['artist']; ?></p>
            <p class="music-genre"><?php echo $song['genre']; ?></p>
          </a>
        </article>
      <?php } ?>
    </div>
  </main>
</body>

</html>