<?php
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
            <!-- <div class="row"> -->
                <!-- <div class="col-sm-12 text-center"> -->
                    <!-- <a class="btn btn-warning">Random image</a> -->
                <!-- </div> -->
            <!-- </div> -->
            <div class="row">
                <!-- <div class="col-sm-1 offset-sm-1 remove_padding vertical_center"><img src="images/Left.png" onclick="loadNextImage()"></div> -->
                <div class="col-sm-12" style="padding-top: 1%;" id="ajax-container">
                    <?php
                    $queryNumRows = "SELECT * FROM pictures";
                    $resultNumRows = mysqli_query($conn, $queryNumRows);

                    $numRows = mysqli_num_rows($resultNumRows);

                    // $random = rand(1, $numRows);
                    $random = rand(1, $numRows);
                    $query = "SELECT * from pictures WHERE id = '$random'";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<img style='width: 100%;' src='" . $row['img'] . "'>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
                <!-- <div class="col-sm-1 offset-sm-1 remove_padding vertical_center"><img src="images/Right.png" onclick="loadNextImage()"></div> -->
            </div>
        </section>
    </div>
    <script>
    </script>
    <?php
    // include "includes/ajax-script.php";
    include "includes/footer.php";
    ?>
</body>

</html>