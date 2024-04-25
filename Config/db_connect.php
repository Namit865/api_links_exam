<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "localhost";
$connection =false;

 function construct{
    $this->connection = mysqli_connect($servername, $username, $password, $dbname);
}

 function addMoviesData($title,$director,$release_year){

    $sql = "INSERT INTO movie (title,director,release_year) VALUES ('$title','$director','$release_year')";


    $res = mysqli_query($this->connection,$sql);

    return res;

}

?>