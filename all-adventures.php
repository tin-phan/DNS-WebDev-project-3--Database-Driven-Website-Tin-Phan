<?php

include_once('db-connect.php');

$sql = "SELECT * FROM trips";
$stmt = $pdo->query($sql);
$trips = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="/all-adventures.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>
	<div class="cover">
        <img src="/image/canoe.jpg" alt="Halifax Canoe and Kayak">
        <div><p class="exp"> Best experience on Nova Scotia</p></div>
    </div>
	<div>
	<h2 class="pkg">Adventure Packages</h2>
	</div>
	<div class="pkg-list">
		<?php foreach($trips as $trip): ?>
			<div class="pkg">
				<h3 class = "pkg-title"><?= $trip['heading'] ?></h3>
				<p><strong>Trip Date:</strong> <?= $trip['tripDate'] ?></p>
				<p><strong>Duration:</strong>  <?= $trip['duration'] ?></p>
				<p><strong>Summary:</strong> </p> 
				<p><?= $trip['summary'] ?></p>
			</div>
		<?php endforeach; ?>
	</div>
    <?php include('footer.php'); ?>
   
</body>
</html>