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
$comment = $_POST['comment'];
include 'connect-to-db.php';
// check for empty comment submission
if (empty($comment)) {
    echo "<div class='status'>You cannot submit an empty comment</div>";
} else {
    // declare and initialize query
    $q = " UPDATE photo
            SET comment = ' " . addslashes($_POST['comment']) . " '
            WHERE idphoto = ' " . $_GET['id'] . "'; ";

    // execute query, display success/error
    if ($mysqli->query($q)) {
        echo "<div class='status'>comment added.</div>";
    } else {
        echo "<div class='status'>Query error: please contact your system adminstrator.</div>";
    }
}
include 'footer.php'?>
</body>
</html>