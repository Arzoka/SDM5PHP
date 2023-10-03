<?php
if (!isset($_GET['artist'])) {
    return;
}

$link_artist = $_GET['artist'];
$link_artist = mysqli_real_escape_string($conn, $link_artist);

$sql = "SELECT * FROM artists WHERE artist_name = '$link_artist'";
$artist = $conn->query($sql)->fetch_assoc();
