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
    <link rel="stylesheet" href="/problem.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>
     <div class="logout">
		<a href="log-out.php"><button>Log out</button></a>
	</div>
	<div class ="problem">
	<?php
		$role = $_POST['role'];
		
		echo "<h2>Hello $role.</h2>";
		
		echo "<h3>How can we help?</h3>";
		
		if ($role == "Admin") {
			echo "<ul>";
			echo "<li><a href='new-account.php'>Create new account</a></li>";
			echo "<li><a href='isnt-working.php'>PC not working</a></li>";
			echo "</ul>";
		} else if ($role == "Manager") {
			echo "<ul>";
			echo "<li><a href='lost-password.php'>Lost password</a></li>";
			echo "<li><a href='isnt-working.php'>PC not working</a></li>";
			echo "</ul>";
		} else if ($role == "CEO") {
			echo "<ul>";
			echo "<li><a href='need-help.php'>Need help</a></li>";
			echo "<li><a href='isnt-working.php'>PC not working</a></li>";
			echo "</ul>";
		}
	?>
	</div>
	
    <?php include('footer.php'); ?>
</body>
</html>