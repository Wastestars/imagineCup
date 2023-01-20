<?php
 	include "../DBController.php";

 	session_start() ?? null;

 	$id = $_SESSION['id'];
	// $transaction_id = $_POST['id'];
	// $status = $_POST['status'];

	$status = "Approved";
	$amount = 1;
	$currency = "USD";

	$sql = "INSERT INTO payments(status, amount, currency, paid_by) VALUES ( '$status', '$amount', '$currency', '$id')";

	if (setData($sql)) {
	  ?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
			<script src="https://kit.fontawesome.com/090dc3fb10.js" crossorigin="anonymous"></script>
			<title>Payment Successful</title>
			<style>
				img{
					width: 30%;
					padding: 20px;
				}
				.success{
					margin-top: 5%;
				}
				.success button{
					padding: 10px;
					border-radius: 50px;
					border: solid 1px white;
					margin: 30px 10px 0px;
					background-color: green;
					color: white;
				}
				.success button:hover{
					background-color: grey;
					color: white;
				}
				span{
					color: green;
				}
				.fa-solid{
					font-size: 150px;
					margin-bottom: 20px;
					color:  green;
				}
			</style>
		</head>
		<body>
			<div class = "success text-center">
				<i class="fa-sharp fa-solid fa-circle-check"></i>
				<h2>Payment Successful!</h2>
				<h6>Hurray! Your payment of <span>1.00 USD</span> has been made successfully</h6>
				<div class = "text-center">
					<a href = "history.php"><button class = "btn home">View my Transactions</button></a>
					<a href = "payments.php"><button class = "btn pay">Make another payment</button></a>
				</div>
			</div>
		</body>
	</html>
	<?php
	}
?>