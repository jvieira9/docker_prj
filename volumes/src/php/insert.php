<!DOCTYPE html>
<html>

<head>
	<title>Insert</title>
</head>

<body>
		<?php
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("db", "root", "xpto", "xpto");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO messages (first_name, last_name, gender, address, email) VALUES ('$first_name',
        '$last_name','$gender','$address','$email')";

		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Dados guardados numa base de dados."
				. " Aceda à sua base de dados "
				. " para ver os dados atualizados.</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>