<?php
session_start() ?? null;

include "../DBController.php";

$sql_select = "SELECT * FROM payments";

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
  <link rel="stylesheet" href="../styles.css">

  <title>Payments</title>
<!-- Favicons -->
<link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
	
  <style>
		h3{
			color:  #008374;
			padding-top: 15px;
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
      <li><a href="../login.php">Login</a></li>
    </ul>
  </nav><!-- .navbar -->

  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header><!-- End Header -->
<!-- End Header -->

	<h3 class = "text-center">My Transactions</h3>
	<br/>
	<table class = "table table-striped text-center">
		<tr>
			<th>Payment ID</th>
			<th>Payment Name</th>
			<th>Amount</th>
			<th>Currency</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
			<th>Paid By</th>
		</tr>
		<?php
			if($row = getData($sql_select))
			{
				echo "<tr>";
				foreach ($row as $rows) {
					$user_id = $rows['paid_by'];

					$sql = "SELECT first_name, last_name FROM users WHERE id = '$user_id'";

					if($rowname = getData($sql))
					{
						foreach ($rowname as $names) {
							$name = $names['first_name']. ' '.$names['last_name'];
						}
					}

					$timestamp = new DateTime($rows['updated_at']);
					$date = $timestamp->format('j/n/Y');
					$time = $timestamp->format('H:i');

					echo "<td>".$rows['id']."</td>";
					echo "<td>".$rows['payment_name']."</td>";
					echo "<td>".$rows["amount"]."</td>";
					echo "<td>".$rows["currency"]."</td>";
					echo "<td>".$date."</td>";
					echo "<td>".$time."</td>";
					echo "<td>".$rows['status']."</td>";
					echo "<td>".$name."</td>";
					
					echo "</tr>";
				}
				

			}
		?>
</table>