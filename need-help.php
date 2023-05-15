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
    <link rel="stylesheet" href="/need-help.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>

    <div class="logout">
		<a href="log-out.php"><button>Log out</button></a>
	</div>
    <div class="help">
	    <h2>Need Help</h2>
        <table class ="it">
            <tr>
                <td><p class="call">For further assistant, please help to call IT Helpdesk number: 902-888-9999</p></td>
                <td> <img class="helpdesk" src="image/helpdesk.jpg" alt="Helpdesk"> </td>
            </tr>
        </table>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>