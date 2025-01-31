<?php
    echo "Hello We are trying to connect now <br>";
    /*WAYS TO CONNECT TO A MYSQL DATABASE
    1. MySQLi extension
    2. PDO
    */

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    if(!$conn){
        die("Sorry we failed to connect". mysqli_connect_error());
    }
    else{
        echo "Connection was successfull";
    }


?>



