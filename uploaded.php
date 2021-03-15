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
$target_dir = "uploads/"; // set target directory
$target_filename = basename($_FILES["fileToUpload"]["name"]); // set target filename
$target_file = $target_dir . $target_filename; // concatenate
$uploadOk = TRUE; // variable to determine if upload was successful
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // get file type/extension
$date = date('Y/m/d');

// Only allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    $uploadOk = FALSE;
}

// Check if $uploadOk is FALSE (Upload error)
if (! $uploadOk) {
    echo "<div class='status'>Awh, upload failed :( please check the file that you are posting</div>";
} else { // relocate file to permanent location
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<div class='status'>The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.</div>";
    } else {
        echo "<div class='status'>Error: there was an error uploading your file.</div>";
    }
}

// Check if $uploadOK is TRUE (Upload success)
if ($uploadOk) {
    include 'connect-to-db.php';

    $q = "INSERT INTO photo (imageurl, title, date) VALUES ('" . $target_filename . "' , '" . $_POST['message'] . "' , '" . $date . "')";

    if ($mysqli->query($q)) {} else {
        echo "<div class='status'>Something went wrong. Please contact your system adminstrator.</div>";
    }
}
include 'footer.php'?>
</body>
</html>