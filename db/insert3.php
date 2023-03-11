<?php
    include 'connection.php';
    $roomtype = $_POST['roomtype'];
    $price = $_POST['price'];

    if(isset($_POST['update1'])){
        $insert = mysqli_query($connection, "UPDATE updateroom SET price='$price' where roomtype='$roomtype'");
        header("location: ../adminUpdate.php");
    }

?>