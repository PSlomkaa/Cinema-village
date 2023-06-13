<?php

class Dbh() {

    protected function connect() {
        try{

            $dbServerName = "localhost";
            $dbUsername = "Adam";
            $dbPassword ="";
            $dbName = "kino1";
            $dbh = new PDO('mysqli:host=localhost;dbname = kino1', $dbUsername, $dbPassword);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>"
            die();
        }
    }
}




$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);