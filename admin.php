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
    <link rel="stylesheet" href="/admin.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
		<h2 class="welad">Welcome to Admin System!</h2>
		<div class="admin">
			<ul>
				<li><a href='admin-add.php'>Add New Adventures</a></li>
				<li><a href='tech-support.php'>Technical Issues</a></li>
			</ul>
		</div>
		<div class="logout">
			<a href="logout.php"><button>Log out</button></a>
		</div>
	</div>
    <?php include('footer.php'); ?>
   
</body>
</html>