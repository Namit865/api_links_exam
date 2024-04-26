
<?php

class Data{
public $USERNAME = "root";
public $HOSTNAME = "127.0.0.1";
public $PASSWORD = "";
public $DATABASE = "movies";
public $connection =false;

public function __construct()
{
    $this->connection = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DATABASE);
}



public function addMoviesData($title,$director,$release_year){

    $sql = "INSERT INTO movie (title,director,release_year) VALUES ('$title','$director','$release_year')";


    $res = mysqli_query($this->connection,$sql);

    return $res;

}


public function fetchSingleBookingData($id){

    $sql =  "SELECT * FROM movie WHERE id=$id";

    $res = mysqli_query($this->connection,$sql);


    return $res;

} 

public function deleteBookingData($id){

    $sql = 'DELETE * FROM movie WHERE id=$id';

    $res = mysqli_query($this->connection,$sql);
    
    return $res;

}

}

?>
