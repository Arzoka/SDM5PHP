<?php

$conn = new mysqli(HOST, USER, PASS, DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
