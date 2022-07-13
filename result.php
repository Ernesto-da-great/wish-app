<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>WishApp | All wishes</title>
</head>

<body>
	<div id="form">
		<?php
			//form values
			define("message", "Please complete form details");
			if ($_POST['name'] && $_POST['f-name'] && $_POST['wish'] !== '') {
				$val1 = $_POST['name'];
				$val2 = $_POST['f-name'];
				$val3 = $_POST['wish'];

				//Writes your message
				echo "<div>Hi $val1, your wish to $val2</div>";
				echo "<hr>";
				echo "<div class='msg'> $val3 </div>";

				//create connection
				$servername = "localhost";
				$username = "root";
				$password = "";
				$db = "mydb";
				$conn = new mysqli($servername, $username, $password, $db);

				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				//insert query
				$sql = "INSERT INTO MyWishers (name, f_name, wish) VALUES ('$val1', '$val2', '$val3')";
				if ($conn->query($sql) === TRUE) {
					$last_id = $conn->insert_id;
					echo "New record created successfully. Your wish number is : " . $last_id;
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
			} else {
				echo message;
			}
		?>
		<a href="index.php"> -- <i class="fa fa-sign-out"> </i> -- </a>
	</div>

	<!--?php
	//create connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "mydb";
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} echo "Successful";
	
	// create DB
	$sql = "CREATE DATABASE myDB";
	if ($conn->query($sql) === TRUE) {
  		echo "Database created successfully";
	} else {
  		echo "Error creating database: " . $conn->error;
	}

	// create table
	$sql = "CREATE TABLE MyWishers (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		f_name VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		wish_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
 		echo "Table MyWishers created successfully";
	} else {
  		echo "Error creating table: " . $conn->error;
	}

	//insert data
	$sql = "INSERT INTO MyWishers (name, f_name, wish) VALUES ('$val1', '$val2', '$val3')";

	if ($conn->query($sql) === TRUE) {
  		echo "New record created successfully";
	} else {
  		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>-->
</body>

</html>