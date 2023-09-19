<?php
$host = 'db';
$database = 'MYSQL_DATABASE';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';

$current_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$needle = "?item_id=";
$link_id = substr($current_link, strpos($current_link, $needle) + 9);

// Check the MySQL connection status
$conn = new mysqli($host, $user, $pass, $database);
$sql = "SELECT * FROM data WHERE ID =" . $link_id;
$result = $conn->query($sql);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    while ($row = $result->fetch_assoc()) {
        echo $row["release_date"];
    }
}
