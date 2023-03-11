<?php
require_once('DBController.php');
session_start() ?? null;

$date = date('Y-m-d H:i:s', strtotime($_POST['pickupDateTime']));
$id = $_SESSION['id'] ?? null;
$location = $_POST['pickupLocation'];

$sql_insert = "INSERT INTO pickup(pickupLocation, pickupDateTime, userID) VALUES ('$location','$date', $id)";

if(setData($sql_insert)){
    echo "Sucessfully inserted!";
    header("location: paypal/payments.php");
}else {
    echo "Error in inserting data";
}

?>