<?php
session_start();
include_once('db-connect.php');

if(isset($_POST['submit'])) {
    $heading = $_POST['heading'];
    $tripDate = $_POST['tripDate'];
    $duration = $_POST['duration'];
    $summary = $_POST['summary'];

    // Validation for required fields
    if(empty($heading) || empty($tripDate) || empty($duration) || empty($summary)) {
        $_SESSION['error_msg'] = "Please fill in all required fields";
        header("Location: admin-add.php");
        exit();
    }

    try {
        // Inserting data into the database
        $sql = "INSERT INTO trips (heading, tripDate, duration, summary) VALUES (:heading, :tripDate, :duration, :summary)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':heading' => $heading, ':tripDate' => $tripDate, ':duration' => $duration, ':summary' => $summary));

        $_SESSION['success_msg'] = "Data has been added successfully to the database!";
        header("Location: admin-confirm.php");
        exit();
    } catch(PDOException $e) {
        $_SESSION['error_msg'] = "Error adding trip: " . $e->getMessage();
        header("Location: admin-add.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="/admin-add.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/image/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>

    <div class="row">
        <h2 class="ad-ad">Admin - Add Adventure</h2>
        <?php
        if(isset($_SESSION['error_msg'])) {
            echo '<p class="error">' . $_SESSION['error_msg'] . '</p>';
            unset($_SESSION['error_msg']);
        }
        ?>
        <form class="add-adv" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div>
                <label for="heading">Heading:</label>
                <input type="text" id="heading" name="heading" required>
            </div>
            <div>
                <label for="tripDate">Trip Date:</label>
                <input type="date" id="tripDate" name="tripDate" required>
            </div>
            <div>
                <label for="duration">Duration:</label>
                <input type="text" id="duration" name="duration" required>
            </div>
            <div>
                <label for="summary">Summary:</label>
                <textarea id="summary" name="summary" required></textarea>
            </div>
            <input type="submit" name="submit" value="Add Trip">
        </form>
    </div>

	<div class="logout">
			<a href="logout.php"><button>Log out</button></a>
	</div>

    <?php include('footer.php'); ?>
   
</body>
</html>