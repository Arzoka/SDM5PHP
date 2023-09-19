<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css" />

  <title>Music Library</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/App.js" defer"></script>
</head>

<body>
  <header class="container-fluid">
    <a href="index.php">
      <h2>Acoustix</h2>
    </a>
  </header>
  <main class="container">

    <input placeholder="Search" onkeyup="searchResult(this.value)" />
    <h1>Music Library</h1>
    <?php require 'music_cards.php' ?>
  </main>
</body>

</html>