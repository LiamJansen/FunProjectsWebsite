<?php
// Include the connection to database
include "db/db_connection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include "includes/header.php";
    ?>
    <title>Pictures</title>
</head>

<body>
    <?php
    include "includes/navbar.php";
    ?>
    <div class="container">
        <section>
            <div class="row">
                <div class="col-sm-1 offset-sm-1 remove_padding"><img src="images/Left.png" onclick="loadNextImage()"></div>
                <div class="col-sm-6 offset-sm-1" style="padding-top: 1%;" id="ajax-container">
                    <?php
                    // Get all data from table and tell us how many rows with results there are
                    $queryNumRows = "SELECT * FROM pictures";
                    $resultNumRows = mysqli_query($conn, $queryNumRows);
                    $numRows = mysqli_num_rows($resultNumRows);

                    // Select a random number between 1 and the amount of rows in the table
                    $random = rand(1, $numRows);
                    // Select a random row based on id which is a number
                    $query = "SELECT * from pictures WHERE id = '$random'";
                    $result = mysqli_query($conn, $query);

                    // If we get 1 row as result, show the picture, otherwise show that there are 0 results
                    if (mysqli_num_rows($result) == 1) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<img style='width: 100%;' src='" . $row['img'] . "'>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
                <div class="col-sm-1 offset-sm-1 remove_padding"><img src="images/Right.png" onclick="loadNextImage()"></div>
            </div>
        </section>
    </div>
    <?php
    include "includes/ajax-script.php";
    include "includes/footer.php";
    ?>
</body>

</html>