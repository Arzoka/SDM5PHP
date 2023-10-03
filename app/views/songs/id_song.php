<?php
if (!isset($_GET['id'])) {
    return;
}
$song_id = $_GET['id'];

$sql = "SELECT * FROM songs WHERE ID = '$song_id'";
$song = $conn->query($sql)->fetch_assoc();
