<?php

// database credentials
$host = "localhost:3306";
$user = "root";
$pass = "";
$databasename = "ashish";

# create a database connection 

$conn = mysqli_connect($host, $user,$pass, $databasename);

// check if the connection was successful or not

if (!$conn){
    die("connection failed: ". mysqli_connect_error());
}

// create a database
$sql = "CREATE DATABASE sam";
if (mysqli_query($conn, $swl)){
    echo "Database created succecsfully";

}else{
    echo "Error creating database:"
    mysqli_connect_error($conn);
}


// close the database connection
mysqli_close($conn);

?>