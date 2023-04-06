<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			font-size: 36px;
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		form {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-size: 16px;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 1px;
		}

		input[type="text"],
		input[type="email"] {
			padding: 10px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 20px;
			background-color: #f5f5f5;
			color: #444;
		}

		input[type="text"]:focus,
		input[type="email"]:focus {
			outline: none;
			box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
			border: 1px solid #ccc;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			font-size: 16px;
			text-transform: uppercase;
			letter-spacing: 2px;
			transition: all 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
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