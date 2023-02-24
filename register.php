<!DOCTYPE html>
<html>
<head>
	<title>Registreren</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Registreren</h1>
		<form method="post" action="register.php">

			<label for="username">Gebruikersnaam:</label>
			<input type="text" id="username" name="username" required><br>

			<label for="password">Wachtwoord:</label>
			<input type="password" id="password" name="password_1" required><br>

			<label for="password">Herhaal wachtwoord:</label>
			<input type="password" id="password" name="password_2" required><br>

			<button type="submit" name="reg_user">Registreren</button>
		</form>
	</div>
</body>
</html>
