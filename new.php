<?php
//connectivity
$host="localhost:3306";
$username="root";
$pass="";
$dbname="mysql";
$conn=mysqli_connect($host,$username,$pass,$dbname);
if(!$conn)
{
    die("not connected");
}
echo "great got connected";
echo "<br>";
//update record
/*
$id=457;
$name="xyz";
$in="update emp set name='mca' where id=$id";
if(mysqli_query($conn,$in))
{
    echo "mydb database successfully created";
}
 else{
    echo "not connected";
}
*/
//create database
$db="create database mydb";
//check connection
if(mysqli_query($conn,$db))
{
    echo "mydb database successfully created";
}
 else{
    echo "not connected";
}
$tb="create table emp(id int auto_increment,name varchar(20),salary int not null,primary key(id))";
$data="insert into emp(name,salary) values('dy patil',69000)";
//check connection
if(mysqli_query($conn,$data))
{
    echo "table created successfully";
}
else{
    echo "oops";
}
mysqli_close($conn);

?>