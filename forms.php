        

<?php

$host = 'localhost:3306';
$uname = 'root';
$pass = '';
$dbname = 'store';

$conn = mysqli_connect($host,$uname,$pass,$dbname);
if(!$conn){
    die ("connection failed!");
}
else{
    echo "congrats  you got connected!";
}
   

// //create database
// $dbname="create database store";
// //check connection
// if(mysqli_query($conn,$dbname))
// {
//     echo "mydb database successfully created";
// }
//  else{
//     echo "not connected";
// }

/* connection to database
*/

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get the username and password from the form
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	// Validate the user's credentials (e.g. by checking a database)
	// ...
	
	// If the credentials are valid, redirect the user to a welcome page
	if ($valid_credentials) {
		header('Location: welcome.php');
		exit();
	} else {
		// If the credentials are invalid, display an error message
		echo "Invalid username or password";
	}
}



// $dbname="create table log(id int auto_increment,uname varchar(20),pass int not null,primary key(id))";

// if(mysqli_query($conn,$dbname))
// {
//     echo "table created successfully";
// }
// else{
//     echo "oops";
// }
mysqli_close($conn);
?>
