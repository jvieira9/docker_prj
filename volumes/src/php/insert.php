<!DOCTYPE html>
<body>
	<?php
	// credentiais da base de dados
	$servername = "db"; // nome do serviço
	$username = "root"; // root
	$password = "xpto"; // variavel de ambiente - root password
	$dbname = "xpto"; // nome da base de dados criada

	// criar ligação
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// verificar a conexão
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// input na tabela
	$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
	$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
	$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

	// attempt insert query execution
	$sql = "INSERT INTO dados (first_name, last_name, gender, address, email) 
		VALUES ('$first_name', '$last_name', '$gender', '$address', '$email')";
	if (mysqli_query($conn, $sql)) {
		echo "Dados guardados com sucesso.";
	} else {
		echo "ERRO: Não foi possível executar $sql. " . mysqli_error($conn);
	}

	// fechar a ligação
	mysqli_close($conn);
	?>
</body>

</html>