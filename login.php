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
	<div style="display: flex; justify-content: center;">
		<img width="90%" src="images/instagraham-logo.png">
	</div>
	<p style="text-align: center;">
		for demonstration purpose<br>log in with username <b>ypc</b> and
		password <b>ljmu</b> <br> <i style="font-size: 12px;">Or you can
			register with a new account too~</i>
	</p>
	<form action="logged-in.php" method="post"
		enctype="multipart/form-data" autocomplete="off">
		<div class="input-group">
			<label>username</label> <input type="text" name="username"
				class="register-login" style="margin:0;padding:0">
		</div>
		<div class="input-group">
			<label>password</label> <input type="password" name="password"
				class="register-login" style="margin:0;padding:0">
		</div>
		<div class="input-group">
			<button type="submit" name="submit">Log In</button>
		</div>
		<p>
			Don't have an account? <a href="register.php">Resigter here</a>
		</p>
	</form>
</body>

</html>