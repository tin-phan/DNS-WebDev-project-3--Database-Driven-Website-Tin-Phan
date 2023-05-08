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
    <!--<main>
        <div class="logout">   
            <a href="logout.php">Log out</a>
        </div>
        <div class="it">
         <h2>Welcome To Your IT Support System </h2>
        </div>
        <div id="form">
        <form method="post" action="problem.php">
        <table id="Support_form">
        <tr id="row1">
            <td><select name="Title">
                <option value="Blank">--Title--</Option>
                <option value="Mr">Mr</Option>
                <option value="Mrs">Mrs</Option>
                <option value="Ms">Ms</Option>
            </td>
            <td><input type="text" name="fName[]" placeholder="Enter First Name"></td>
            <td><input type="text" name="lName[]" placeholder="Enter Last Name"></td>
            <td><select type="text" name="role[]">
                <option value="Blank">--Role--</Option>
                <option value="CEO">CEO</Option>
                <option value="Manager">Manager</Option>
                <option value="Admin">Admin</Option>
            </td>
            <td><input type="submit" name="submit_row" value="SUBMIT"></td>
        </tr>
        </table>
        </form>
        </div>
    </main>-->
    <div class="container">
		<h1>Welcome to Support System</h1>
		<div class="form">
			<form action="problem.php" method="POST">
				<label for="title">Title:</label>
				<select id="title" name="title" required>
					<option value="Mr">Mr</option>
					<option value="Mrs">Mrs</option>
					<option value="Ms">Ms</option>
				</select>
				<label for="firstname">First Name:</label>
				<input type="text" id="firstname" name="firstname" required>
				<label for="lastname">Last Name:</label>
				<input type="text" id="lastname" name="lastname" required>
				<label for="role">Role:</label>
				<select id="role" name="role" required>
					<option value="CEO">CEO</option>
					<option value="Manager">Manager</option>
					<option value="Admin">Admin</option>
				</select>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="logout">
			<a href="logout.php"><button>Log out</button></a>
		</div>
	</div>
    <?php include('footer.php'); ?>
   
</body>
</html>