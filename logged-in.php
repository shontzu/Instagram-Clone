<?php
include 'connect-to-db.php';
// declare and initialize query
$q = "SELECT username, password FROM users WHERE username= '" . $_POST['username'] . "'; ";

// execute query
if ($res = $mysqli->query($q)) {
    // check for data
    if ($res->data_seek(0)) {
        // user exist
        while ($row = $res->fetch_assoc()) {
            // password correct
            if ($row['password'] == $_POST['password']) {
                setcookie("admin", $row['username'], time() + (60 * 60));
                echo "<form action='index.php' class='status'><button>Hello, " . $row['username'] . "!</button></form>";
                $output = include 'index.php';
            } else { // password incorrect
                $output = "	<div style='display:flex;justify-content:center;'><img width='90%' src='images/instagraham-logo.png'></div><br>
                            <div class='status'>incorrect password...<a href='login.php'>try again</a></div>";
            }
        }
    } else { // user don't exist
        $output = "	<div style='display:flex;justify-content:center;'><img width='90%' src='images/instagraham-logo.png'></div><br>
                    <div class='status'>Bummer! You are not registered yet... <a href='register.php'>Resigter here</a></div>";
    }
} else { // query error
    $output = "	<div style='display:flex;justify-content:center;'><img width='90%' src='images/instagraham-logo.png'></div><br>
                <div class='status'>something went wrong, please contact your system administrator</div>";
}
?>
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
<?php echo $output; ?>
</html>