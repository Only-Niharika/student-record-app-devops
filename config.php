<?php

$db_host = getenv("DB_HOST");
$db_user = getenv("DB_USER");
$db_pass = getenv("DB_PASSWORD");
$db_name = getenv("DB_NAME");

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$table_query = "
CREATE TABLE IF NOT EXISTS stdrec (
    rollno INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    class VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    city VARCHAR(100) NOT NULL
)";

mysqli_query($con, $table_query);

?>
