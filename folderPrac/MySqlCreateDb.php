<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);


    // DIE IF CONNECTION WAS NOT SUCCESSFUL
    if(!$conn){
        die("Sorry we failed to connect". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }


    // Check if the database already exists
    $db_name = "DB1";
    $check_db = mysqli_query($conn, "SHOW DATABASES LIKE '$db_name'");
    

    if(mysqli_num_rows($check_db) > 0){
        // If the database exists, inform the user
        echo "The database '$db_name' already exists. Skipping creation.<br>";
    } 
    else {
        // CREATING A NEW DATABASE
        $sql = "CREATE DATABASE $db_name";
        $res = mysqli_query($conn, $sql);

        if($res){
            echo "The db '$db_name' was created successfully<br>";
        }
        else{
            // If an error occurs, show the error message
            echo "The db was not created successfully because of this error: ".mysqli_error($conn)."<br>";
        }
    }
?>
