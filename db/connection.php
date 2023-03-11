<?php

    $servername = "localhost";
    $username  = "root";
    $password = "";
    $database = "roomreservation";

    $connection = mysqli_connect($servername, $username, $password, $database);

    if(!$connection){
        die("Connection Failed" .mysqli_connect_error());
    }
        // echo "Connected Successfully";

?>