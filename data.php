<?php

// database credentials
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mysql";

// create a database connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// check if the connection was successful or not
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// create a database
$sql = "CREATE DATABASE mydb";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// close the database connection
mysqli_close($conn);

?>
