<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myportfolio";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error . $conn ->   connect_errno);
    }
    
?>