<?php
session_start();
include_once('db-connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="/admin-confirm.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>
	<div class="confirm">
	<div>
		<h2>Admin Confirm</h2>
	</div>
	<div class="msg">
		<?php
			if(isset($_SESSION['success_msg']) && !empty($_SESSION['success_msg'])) {
				echo "<h3>" . $_SESSION['success_msg'] . "</h3>";
			//unset($_SESSION['success_msg']);
		}
		?>
	</div>
	<div class="discover">
		<a href="all-adventures.php" class="discover-link">>>> Discover all adventures</a>
	</div>

	<div class="logout">
			<a href="logout.php"><button>Log out</button></a>
	</div>
	</div>
    <?php include('footer.php'); ?>
   
</body>
</html>