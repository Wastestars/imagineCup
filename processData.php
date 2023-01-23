<?php

require_once('DBController.php');
session_start();

if(isset($_POST['login']))
{
	$username = $_POST['email'];
	$password = $_POST['password'];

	if(empty($username) || empty($password))
	{
		header("location: login.php");
		exit();
	}
	else
	{
		$sql_select = "SELECT * FROM users WHERE email = '$username'";

		if($row = getData($sql_select))
		{
			foreach ($row as $rows) {
				$dbpassword = $rows['password'];
				$_SESSION['firstName'] = $rows["first_name"];
				$_SESSION['id'] = $rows["id"];
				$_SESSION['lastName'] = $rows["last_name"];
			}

		}
	
		if(password_verify($password, $dbpassword))
		{
			header("location: schedulePickup.php");
		}
		else{
			header("location: login.php");
		}
		

	}
}

if(isset($_POST['register']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNo'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$sql_insert = "INSERT INTO users(email, first_name, last_name, password, phone_number) VALUES ('$email', '$fname', '$lname', '$password', '$phoneNo')";

	if(setData($sql_insert)){
		header("location: login.php");
		echo "<script>alert('Registration successfull!')</script";
	}else{
		header("location: register.php");
	}
}
?>