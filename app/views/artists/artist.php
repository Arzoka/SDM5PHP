<?php
if (!isset($_GET['artist'])) {
    return;
}

$link_artist = $_GET['artist'];
$link_artist = mysqli_real_escape_string($conn, $link_artist);

$sql = "SELECT * FROM artists WHERE artist_name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $link_artist);
$stmt->execute();
$artist = $stmt->get_result()->fetch_assoc();
