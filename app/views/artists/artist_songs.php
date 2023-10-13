<?php

if (!isset($_GET['artist'])) {
    return;
}
$link_artist = $_GET['artist'];
$link_artist = mysqli_real_escape_string($conn, $link_artist);

$sql = "SELECT * FROM songs WHERE artist = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $link_artist);
$stmt->execute();
$result = $stmt->get_result();
$artist_songs = array();

while ($row = $result->fetch_assoc()) {
    $artist_songs[] = $row;
}
