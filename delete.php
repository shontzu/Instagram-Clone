<html>
<head>
<title>Instagraham</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
include 'header.php';
include 'connect-to-db.php';
// create SQL query to delete message with idmessage=id
$q = 'DELETE FROM photo WHERE idphoto =' . $_GET['id'] . ';';
// execute query and output a success/error message
if ($mysqli->query($q)) {
    echo "<div class='status'>The post is deleted.</div>";
} else {
    echo "<div class='status'>Something went wrong. Please contact your system administrator.</div>";
}
include 'footer.php';
?>
</body>
</html>