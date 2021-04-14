<?php
// Include the connection to database
include "db/db_connection.php";

// Get all data from table and tell us how many rows with results there are
$queryNumRows = "SELECT id FROM pictures";
$resultNumRows = $conn->query($queryNumRows);
$numRows = $resultNumRows->rowCount();

// Select a random number between 1 and the amount of rows in the table
$random = rand(1, $numRows);
// Select a random row, based on id, which is a number
$query = "SELECT * from pictures WHERE id = '$random'";
$result = $conn->query($query);

// If we get 1 row as result, show the picture, otherwise show that there are 0 results
if ($result->rowCount() == 1) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<img style='width: 100%;' src='" . $row['img'] . "'>";
    }
} else {
    echo "0 results";
}
?>