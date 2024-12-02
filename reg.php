<?php
$server_name="localhost";
$user_name="root";
$password="";
$dbname="kavya";
$conn=mysqli_connect($server_name,$user_name,$password,$dbname);
if(!$conn)
{
 die("connection failed:".mysqli_connect_error());
}
else
{
 echo"connected successfully";
}

?>

