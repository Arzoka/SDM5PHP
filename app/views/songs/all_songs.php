<?php

$sql = "SELECT * FROM songs";
$result = $conn->query($sql);
$songs = array();

while ($row = $result->fetch_assoc()) {
    $songs[] = $row;
}
