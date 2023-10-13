<?php
if (!isset($_GET['id'])) {
    return;
}
$song_id = $_GET['id'];

$sql = "SELECT * FROM songs WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $song_id);
$stmt->execute();
$song = $stmt->get_result()->fetch_assoc();
