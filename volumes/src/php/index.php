<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulario</title>
</head>
<body>
		<h1>Formulario</h1>
		<form action="insert.php" method="post">
<p>
			<label for="primeiroNome">Primeiro Nome:</label>
			<input type="text" name="first_name" id="firstName">
			</p>
<p>
			<label for="ultimoNome">Ultimo Nome:</label>
			<input type="text" name="last_name" id="lastName">
			</p>
<p>
			<label for="Genero">Genero:</label>
			<input type="text" name="gender" id="Gender">
			</p>
<p>
			<label for="Morada">Morada:</label>
			<input type="text" name="address" id="Address">
			</p>
<p>
			<label for="email">Email:</label>
			<input type="text" name="email" id="emailAddress">
			</p>
			<input type="submit" value="Submit">
		</form>
</body>
</html>