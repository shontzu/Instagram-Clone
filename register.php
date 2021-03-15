<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Instagraham</title>
</head>
<body>
	<div style='display: flex; justify-content: center;'>
		<img width='90%' src='images/instagraham-logo.png'>
	</div>
	<form method="post" action="registered.php" autocomplete="off">
		<div class="input-group">
			<label>username</label> <input type="text" name="username"
				class="register-login" style="margin:0;padding:0">
		</div>
		<div class="input-group">
			<label>email</label> <input type="text" name="email"
				class="register-login" style="margin:0;padding:0">
		</div>
		<div class="input-group">
			<label>password</label> <input type="password" name="password1"
				class="register-login" style="margin:0;padding:0">
		</div>
		<div class="input-group">
			<label>confirm password</label> <input type="password"
				name="password2" class="register-login" style="margin:0;padding:0">
		</div>
		<div class="input-group">
			<button type="submit" name="register">Register</button>
		</div>
		<p>
			Already got an account? <a href="login.php">Log in instead</a>
		</p>
	</form>
</body>

</html>