<?php
session_start() ?? null;

include "DBController.php";

$results_per_page = 3;
$sql='SELECT * FROM pickup';
$db = mysqli_connect("localhost","root","","allwaste");
$result = mysqli_query($db, $sql);

function getName($id, $db){
  $sql_name = "SELECT * FROM users WHERE id = $id";
  $result_sql = mysqli_query($db, $sql_name);

  while($row_sql = mysqli_fetch_assoc($result_sql)) {
    $name = $row_sql['first_name'].' '.$row_sql['last_name'];
  }
  return $name;
}

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
  <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">

    <title>Pickup Times</title>
<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
	
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
  
<header id="header" class="header d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <h1>All Waste<span>.</span></h1>
  </a>
  <nav id="navbar" class="navbar">
    <ul>
    <li><a href="../index.html">Home</a></li>
      <li><a href="#">All Payments</a></li>
	  <li><a href="../viewPickupTimes.php">Pickup Times</a></li>
      <li><a href="../login.php">Login</a></li>
    </ul>
  </nav><!-- .navbar -->

  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header><!-- End Header -->  

<h3 style="text-align:center;">View Pickup Times</h3>

<form action="" method="post" name="form1">
<table>
  <tr>
    <th>Pickup Location</th>
    <th>Pickup Date and Time</th>
    <th>Client</th>
  </tr>
  <?php
  while($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>" . $row['pickupLocation'] . "</td>";
    echo "<td>" . $row['pickupDateTime'] . "</td>";
    echo "<td>" . getName($row['userID'], $db). "</td>";
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