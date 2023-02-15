<!DOCTYPE html>
<html>
<head>
	<title>Inloggen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Inloggen</h1>
		<form method="post" action="login.php">
			<label for="username">Gebruikersnaam:</label>
			<input type="text" id="username" name="username" required>

			<label for="password">Wachtwoord:</label>
			<input type="password" id="password" name="password" required>

			<button type="submit" name="login_user">Inloggen</button>
		</form>
	</div>
</body>
</html>
