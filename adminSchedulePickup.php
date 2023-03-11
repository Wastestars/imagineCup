<?php
require_once('DBController.php');

$date = date('Y-m-d H:i:s', strtotime($_POST['pickupDateTime']));
$id = $_SESSION['id'] ?? null;

$sql_insert = "INSERT INTO pickup(pickupLocation, pickupDateTime, userID) VALUES ('".$_POST['pickupLocation']."','$date', $id)";

if(setData($sql_insert)){
    echo "Sucessfully inserted!";
    header("location: paypal/payments.php");
}else {
    "Error in inserting data".$conn->error;
}

?>