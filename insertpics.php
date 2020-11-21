<?php
// Include the connection to database
include "db/db_connection.php";
// Let the user know something is happening/has happened and send them back to the picture page
echo "<p align='center' style='margin-top:20%'>Pictures are being updated</p>";
header("Refresh:1; url=pictures.php");

// Empty the table to get a total update
mysqli_query($conn, "TRUNCATE TABLE pictures");

// Folder location of of the folder that has the pictures
$directory = "pictures";
$image_path = glob($directory . "/*.*");

// Add all picture paths to the sql table
foreach ($image_path as $image) {
    $query = "INSERT INTO `pictures` (`id`, `img`) VALUES (NULL, '$image')";
    mysqli_query($conn, $query);
}
?>