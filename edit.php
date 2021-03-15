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
$q = 'SELECT idphoto, title FROM photo WHERE idphoto=' . $_GET['id'] . ';';
// execute query
if ($res = $mysqli->query($q)) {
    if ($res->data_seek(0)) {
        while ($row = $res->fetch_assoc()) {
            // display form
            echo '<form action="edited.php?id=' . $row['idphoto'] . '" method="post" enctype="multipart/form-data">' . "\n";
            echo '<p  class="input-group">Update:<br> <input  class="register-login" type="text" name="title" value="' . $row['title'] . '"><br></p>' . "\n";
            echo '<p  class="input-group"><button type="submit" name="submit">Update</button></p>' . "\n";
            echo '</form>' . "\n";
        }
    } else {
        echo "<div class='status'>No message found</div>";
    }
} else {
    echo "<div class='status'>Query error: please contact your system administrator.</div>";
}
include 'footer.php';
?>
</body>
</html>