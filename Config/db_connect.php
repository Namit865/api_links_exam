<?php

class Data{
public $username = "root";
public $server = "127.0.0.1";
public $password = "";
public $dbname = "localhost";
public $connection =false;

public function __construct()
{
    $this->connection = mysqli_connect($this->server,$this->username,$this->password,$this->dbname);
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