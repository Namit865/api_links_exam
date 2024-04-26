
<?php
include 'config.php';

header('Access-Control-Allow-Method: POST');
header('Content-Type: application/json');

$data = new Data();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $director = $_POST['director'];
    $release_year = $_POST['release_year'];

   
    $conn = $data->__construct();

    if ($data->addMoviesData($title, $director, $release_year)) {
        echo "Movie Added successfully";
    } else {
        echo "Error adding movie";
    }
} else {
    echo "Only Post methods are Allowed in this Api";
}
?>
