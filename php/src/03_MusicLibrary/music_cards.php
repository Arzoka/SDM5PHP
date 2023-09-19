<?php
$host = 'db';
$database = 'MYSQL_DATABASE';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';

// Check the MySQL connection status
$conn = new mysqli($host, $user, $pass, $database);
$sql = "SELECT * FROM data";
$result = $conn->query($sql);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo '<div class="music-card-grid" id="music-grid">';

    //content

    while ($row = $result->fetch_assoc()) {
        $rowJSON = json_encode($row);
        $keywords = $row['title'] . $row['artist'] . $row['genre'];
        echo '<article style="background-image: url(' . htmlspecialchars($row["image"], ENT_QUOTES, 'UTF-8') . ');" data-keywords="' . $keywords . '" class="music-card" onclick="clickMusicCard(' . htmlspecialchars($rowJSON, ENT_QUOTES, 'UTF-8') . ')">' . '<a href="card_page.php?item_id=' . $row["ID"] . '" class="container-fluid"> <p class="music-title">' . $row['title'] . '</p> <p class="music-artist">' . $row['artist'] . '</p> <p class="music-genre">' . $row['genre'] . '' . '</p> </a> </article>';
    }

    echo '</div>';
}
