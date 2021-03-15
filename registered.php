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
<?php
include 'connect-to-db.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // check for empty input
    if (empty($username) || empty($email) || empty($password1) || empty($password2)) {
        echo "	<div style='display:flex;justify-content:center;'><img width='90%' src='images/instagraham-logo.png'></div><br>
                    <div class='status'>Yikes! The form is not filled up properly...<a href='register.php'>return</a></div>";
    } else {
        if ($password1 != $password2) {
            echo "	<div style='display:flex;justify-content:center;'><img width='90%' src='images/instagraham-logo.png'></div><br>
                        <div class='status'>Hmm... The password does not match... <a href='register.php'>return</a></div>";
        } else {
            // declare and initialize query
            $q = "INSERT INTO users (username, email, password) 
                        VALUES ('$username', '$email', '$password1')";
            // execute query
            mysqli_query($mysqli, $q);
            echo "	<div style='display:flex;justify-content:center;'><img width='90%' src='images/instagraham-logo.png'></div><br>
                        <div class='status'>You have been succesfully registered ~ <a href='login.php'>Log in now</a></div>";
        }
    }
}
?>
</html>