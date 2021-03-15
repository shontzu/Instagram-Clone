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
// declare and initialize query
$q = "UPDATE photo 
            SET title= '" . addslashes($_POST['title']) . "' " . " 
            WHERE idphoto= " . $_GET['id'] . "; ";
// execute query, display success/error
if ($mysqli->query($q)) {
    echo "<div class='status'>Message updated</div>";
} else {
    echo "<div class='status'>Query error: please contact your system adminstrator</div>";
    // for debugging purpose
    // echo var_dump($_GET);
    // echo "<br>";
    // echo var_dump($_POST);
}
include 'footer.php';
?>
</body>