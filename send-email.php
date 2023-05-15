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
    <link rel="stylesheet" href="/send-email.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="logout">
		<a href="log-out.php"><button>Log out</button></a>
	</div>
    <h2>Send Email</h2>
	<div class = "message">
		<?php
			$emailType = $_POST['emailType'];

			if ($emailType == "newAccount") {
				$email = $_POST['email'];
				echo "Thank you for submitting a request for a new account. Our IT team will process your request and send your new account details to $email.";
			} else if ($emailType == "lostPassword") {
				$email = $_POST['email'];
				echo "Thank you for submitting a request to reset your password. Our IT team will process your request and send instructions to $email.";
			} else if ($emailType == "isntWorking") {
				echo " Thank you for submitting your issue. Our IT team has received your request and will contact you shortly to fix the issue.";
				}
		?>
	</div>
    <?php include('footer.php'); ?>
</body>
</html>