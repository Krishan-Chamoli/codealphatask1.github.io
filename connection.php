<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "codealpha";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if($connection){
        // echo "connection okay";
    }
    else{
        echo "connection fail";
    }
?>