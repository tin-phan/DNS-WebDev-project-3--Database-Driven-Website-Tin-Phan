<?php
session_start();
$_SESSION['title'] = '';
$_SESSION['first_name'] = '';
$_SESSION['last_name'] = '';
$_SESSION['role'] = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="/tech-support.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>

    <div class="container">
		<h2 class="welcome">Welcome To Your IT Support System</h2>
		<div class="form">
			<form action="problem.php" method="POST">
				<select id="title" name="title" required>
					<option value="Mr">Mr</option>
					<option value="Mrs">Mrs</option>
					<option value="Ms">Ms</option>
				</select>
				<input type="text" id="first_name" name="first_name" placeholder="Enter Fisrt Name" required>
				<input type="text" id="last_name" name="last_name" placeholder="Enter Last Name" required>
				<select id="role" name="role" required>
					<option value="CEO">CEO</option>
					<option value="Manager">Manager</option>
					<option value="Admin">Admin</option>
				</select>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="logout">
			<a href="log-out.php"><button>Log out</button></a>
		</div>
	</div>

    <?php include('footer.php'); ?>
</body>
</html>