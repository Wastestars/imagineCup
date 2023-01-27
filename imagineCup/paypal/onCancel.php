<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<title>Payment Cancelled</title>
	<style>
		img{
			width: 30%;
			padding: 20px;
		}
		.cancelled{
			margin-top: 3%;
		}
		.cancelled button{
			padding: 10px;
			border-radius: 50px;
			border: solid 1px white;
			margin: 30px 10px 0px;
			background-color: #008374;
			color: white;
		}
		.cancelled button:hover{
			background-color: green;
			color: white;
		}
	</style>
</head>
<body>
	<div class = "cancelled text-center">
		<image src = "cancelled.png"/>
		<h4>Your payment has been cancelled</h4>
		<div class = "text-center">
			<button class = "btn home"> <a href="index.html">Go to home</a>  </button>
			<a href = "payments.php"><button class = "btn pay">Try Again</button></a>
		</div>
	</div>
</body>
</html>