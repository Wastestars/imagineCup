<?php
    $results_per_page = 3;
    $sql='SELECT * FROM pickup';
    $db = mysqli_connect("localhost","root","","allwaste");
    $result = mysqli_query($db, $sql);

    //$number_of_results = mysqli_num_rows($result);
    //     // determine number of total pages available
    //     $number_of_pages = ceil($number_of_results/$results_per_page);
    //     // determine which page number visitor is currently on
    //     if (!isset($_GET['page'])) {
    //     $page = 1;
    //     } else {
    //     $page = $_GET['page'];
    //     }
    //     // determine the sql LIMIT starting number for the results on the displaying page
    //     $this_page_first_result = ($page-1)*$results_per_page;
    //     $result = mysqli_query($db, $sql);
    //     // retrieve selected results from database and display them on page
    //     $sql = "SELECT * FROM tbl_product LIMIT ". $this_page_first_result. ",". $results_per_page;
    //     $result = mysqli_query($db, $sql);
    //     echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">



  <title>Recyclable Waste Products</title>
<style>
  table {
  font-family: arial, sans-serif;
  color: #4a4a4d;
   font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  width: 80%;
  border-collapse: separate;
border-spacing: 0;
margin-left: 120px;
box-shadow: 10px 10px 5px lightblue;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
button{
  background-color: #f2f2f2;
  color: black;
  padding: 10px 16px;
  margin: 2px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover{
  background-color: #8AC800;
}
  </style>

</head>
<body>
<h3 style="text-align:center;">View Pickup Times</h3>

<form action="" method="post" name="form1">
<table>
  <tr>
    <th>Pickup Location</th>
    <th>Pickup Date and Time</th>

  </tr>
  <?php
  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['pickupLocation'] . "</td>";
      echo "<td>" . $row['pickupDateTime'] . "</td>";
      ?>

    <?php
    echo "</td>";
    echo "</tr>";

  }
  ?>
</table>
    <style>
        #link{
            display: inline-block;
            border: 1px solid black;
            border-radius: 5px;
            text-decoration: none;
            margin: 17px -110px 10px 120px;
            padding: 6px 12px;
            transition: all 100ns ease;
        }
        #link:hover{
            background-color: #8AC800;;
            cursor: pointer;
        }

    </style>

</form>
</body>
</html>