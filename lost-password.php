<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="/lost-password.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="logout">
		<a href="log-out.php"><button>Log out</button></a>
	</div>
	<h2>Lost Password</h2>
    <div class = "lostpassword">
	<form action="send-email.php" method="POST">
		<label for="email">Email:</label>
		<input type="email" name="email" required><br><br>
		<input type="hidden" name="emailType" value="lostPassword">
		<input type="submit" value="Submit">
	</form>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>