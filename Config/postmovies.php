<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $director = isset($_POST['director']) ? $_POST['director'] : '';
    $releaseYear = isset($_POST['release_year']) ? $_POST['release_year'] : 0;

    $data = new Data();
    $conn = $data->checkConnection();

    if ($data->addMovie($title, $director, $releaseYear)) {
        echo "New record created successfully";
    } else {
        echo "Error adding movie";
    }

    $conn->close();
} else {
    echo "Invalid request method";
}
?>