<!DOCTYPE html>
<body>
	<?php
	// database credentials
	$servername = "db";
	$username = "root";
	$password = "xpto";
	$dbname = "xpto";

	// create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// escape user inputs for security
	$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
	$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
	$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

	// attempt insert query execution
	$sql = "INSERT INTO messages (first_name, last_name, gender, address, email) 
		VALUES ('$first_name', '$last_name', '$gender', '$address', '$email')";
	if (mysqli_query($conn, $sql)) {
		echo "<h3>Dados guardados numa base de dados."
			. " Aceda à sua base de dados "
			. " para ver os dados atualizados.</h3>";
		echo nl2br("\n$first_name\n $last_name\n "
			. "$gender\n $address\n $email");
	} else {
		echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
	}

	// close connection
	mysqli_close($conn);
	?>
</body>

</html>