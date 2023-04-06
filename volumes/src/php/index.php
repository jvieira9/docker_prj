<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
	<style>
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"],
		input[type="email"] {
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 3px;
			font-size: 16px;
			width: 50%;
			box-sizing: border-box;
			margin-bottom: 20px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Formulário</h1>
	<form action="insert.php" method="post">
		<label for="firstName">Primeiro Nome:</label>
		<input type="text" name="first_name" id="firstName" required>

		<label for="lastName">Último Nome:</label>
		<input type="text" name="last_name" id="lastName" required>

		<label for="gender">Gênero:</label>
		<input type="text" name="gender" id="gender" required>

		<label for="address">Morada:</label>
		<input type="text" name="address" id="address" required>

		<label for="emailAddress">Email:</label>
		<input type="email" name="email" id="emailAddress" required>
		<br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>