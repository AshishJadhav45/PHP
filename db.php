<!-- database

1. mysqli_connect()

another method make a connectivity to database

2. PDO::_construct()


-->


<?php

// connectivity
$host="localhost:3306";
$user = "root";
$pass = "";
$dbname="Mydb"

$conn = mysqli_connect($host,$user,$pass, $dbnaem);
if($conn)
{
    die("oh so sorry could not get connected");
}
echo "great got connected!";
// create database
// insert record
$in="insert into emp(name,salary) values("amit",30000)";
if(mysqli_query($conn , $in))

{
    echo "</br>";
echo "inserted succesfully":    
}
else{
    echo "try again";
}

mysqli_close($conn);





$db="create database mysql";

if(mysqli_query($conn,$db))
 {
    echo "Mydb database succesfully created!";
 }
else{
    echo "oh my god db not connected try again";
}



$tb="create table emp(id int auto_increment, name varchar(20),salary int not null,primary key(id))";
if(mysqli_query($conn,$db))
{
    echo "table $tb created succesfully";

}

else{
    echo"oops!"
}
mysqli_close($conn);






?>