<?php
require_once("connect.php");

if (isset($_POST["uploadWasteProduct"])) {

    $folder = "recyclableproducts/";

    $original_file_name = $_FILES['wasteImage']['name'];
    $tempname = $_FILES['wasteImage']['tmp_name'];


    $date = date('Y-m-d H:i:s');

    $sql_insert = "INSERT INTO recyclable(wasteName, wasteDescription, wasteImage, postedAt, updatedAt) VALUES ('".$_POST[ 'wasteName']."','".$_POST[ 'wasteDescription']."','$original_file_name', '$date', '$date')";
//     mysqli_query($conn, $sql_insert);

      if (move_uploaded_file($tempname, $folder.$original_file_name)) {
          echo "Posted Successfully!";
            header('Location: http://localhost/ImagineCup/displayWasteProducts.php');

      }
    if($conn->query($sql_insert)===TRUE){

    }else{
        "Error in inserting data".$conn->error;
    }


    }

?>