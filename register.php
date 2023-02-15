<?php include('server.php') ?>

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
			<?php include('errors.php'); ?>

			<label for="username">Gebruikersnaam:</label>
			<input type="text" id="username" name="username" value="<?php echo $username; ?>" required>

			<label for="email">E-mail:</label>
			<input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

			<label for="password">Wachtwoord:</label>
			<input type="password" id="password" name="password_1" required>

			<label for="password">Herhaal wachtwoord:</label>
			<input type="password" id="password" name="password_2" required>

			<button type="submit" name="reg_user">Registreren</button>
		</form>
	</div>
</body>
</html>
