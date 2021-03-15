<html>
<head>
<title>Instagraham</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php';?>
<?php
if (isset($_COOKIE['admin'])) {
    include 'whats-on-your-mind.php';
} else {
    echo "<div class='status'>Hold up! You must log in to enter. Click the <span class='fa fa-user-circle fa-lg'></span> icon to log in</div>";
}
?>
<?php include 'footer.php';?>
</body>
</html>