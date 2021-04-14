<?php
// Include the connection to database
include "db/db_connection.php";
?>
<!DOCtype html>
<html>

<head>
    <?php
    include "includes/header.php";
    ?>
    <title>Quotes</title>
</head>

<body>
    <?php
    include "includes/navbar.php";
    ?>
    <div class="container">
        <section>
            <div class="row">
                <div class="col-sm-1 offset-sm-1 remove_padding"><img src="images/Left.png" onclick="load_next_quote()"></div>
                <div class="col-sm-6 offset-sm-1" style="padding-top: 1%" id="ajax-container">
                    <?php
                    // Get all data from table and tell us how many rows with results there are
                    $queryNumRows = "SELECT id FROM quotes";
                    $resultNumRows = $conn->query($queryNumRows);
                    $numRows = $resultNumRows->rowCount();

                    // Select a random number between 1 and the amount of rows in the table
                    $random = rand(1, $numRows);
                    // Select a random row based on id which is a number
                    $query = "SELECT * from quotes WHERE id = '$random'";
                    $result = $conn->query($query);

                    // If we get 1 row as result, show the picture, otherwise show that there are 0 results
                    if ($result->rowCount() == 1) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<p id='center'>" . $row["quote"] . "</p>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
                <div class="col-sm-1 offset-sm-1 remove_padding"><img src="images/Right.png" onclick="load_next_quote()"></div>
            </div>
        </section>
    </div>
    <?php
    include "includes/ajax-script.php";
    include "includes/footer.php";
    ?>
</body>

</html>