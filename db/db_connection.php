<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "fun_projects_site";

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    die("You failed to save the princess");
}