<?php

define('HOST', 'db');
define('DATABASE', 'MYSQL_DATABASE');
define('USER', 'MYSQL_USER');
define('PASS', 'MYSQL_PASSWORD');

$conn = new mysqli(HOST, USER, PASS, DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
