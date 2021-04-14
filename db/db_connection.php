<?php

$server_name = "localhost";
$db_name = "fun_projects_site";
$db_user = "root";
$db_passwd = "";

try {
    $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $db_user, $db_passwd);
	
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection to the database failed: " . $e->getMessage();
  }
  ?>