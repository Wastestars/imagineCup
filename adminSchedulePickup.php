<?php
require_once("connect.php");

if (isset($_POST["pickup"])) {

    $date = date('Y-m-d H:i:s', strtotime($_POST['pickupDateTime']));

    $sql_insert = "INSERT INTO pickup(pickupLocation, pickupDateTime) VALUES ('".$_POST['pickupLocation']."','$date')";

    if($conn->query($sql_insert)===TRUE){
        echo "Sucessfully inserted!";
        header(location:"http://localhost/viewPickupTimes.php")
    }else {
        "Error in inserting data".$conn->error;
    }


    }

?>