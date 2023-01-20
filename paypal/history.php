<?php
include "../DBController.php";

session_start() ?? null;

$id = $_SESSION['id'];

$sql_select = "SELECT * FROM payments WHERE paid_by = '$id'";
?>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<style>
		h3{
			color:  green;
			padding-top: 15px;
		}
	</style>
</head>
<body>
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
		</tr>
		<?php
			if($row = getData($sql_select))
			{
				echo "<tr>";
				foreach ($row as $rows) {
					$timestamp = new DateTime($rows['updated_at']);
					$date = $timestamp->format('j/n/Y');
					$time = $timestamp->format('H:i');

					echo "<td>".$rows['id']."</td>";
					echo "<td>".$rows['payment_name']."</td>";
					echo "<td>".$rows["amount"]."</td>";
					echo "<td>".$rows["currency"]."</td>";
					echo "<td>".$date."</td>";
					echo "<td>".$time."</td>";
					
					echo "</tr>";
				}
				

			}
		?>
</table>
</body>