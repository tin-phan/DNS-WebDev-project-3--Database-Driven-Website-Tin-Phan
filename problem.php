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
    <!--
        <div class="logout">   
            <a href="logout.php">Log out</a>
        </div>

    -->
    <div class="logout">
		<a href="logout.php"><button>Log out</button></a>
	</div>
	<?php
		// Retrieve the role value from the form submission
		$role = $_POST['role'];
		
		// Display a greeting with the user's role
		echo "<h1>Hello $role.</h1>";
		
		// Display the "How can we help?" message
		echo "<h2>How can we help?</h2>";
		
		// Display the appropriate options based on the user's role
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
    <?php include('footer.php'); ?>
</body>
</html>