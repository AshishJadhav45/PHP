<?php


$host = 'localhost:3306';
$uname = 'root';
$pass = 'your_password ';

$conn = mysqli_connect($host,$uname,$pass);
if(!$conn){
    die ("connection failed!");
}
else{
    echo "congrats you now connection connected";
}
   






?>