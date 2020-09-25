<?php
include "db/db_connection.php";
echo "<p align='center' style='margin-top:20%'>Pictures are being updated</p>";
header("Refresh:1; url=pictures.php");

mysqli_query($conn, "TRUNCATE TABLE pictures");

$directory = "pictures";
$image_path = glob($directory . "/*.*");

foreach ($image_path as $image) {
    $query = "INSERT INTO `pictures` (`id`, `img`) VALUES (NULL, '$image')";
    mysqli_query($conn, $query);
}
?>