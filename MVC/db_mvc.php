<?php 

function returnConnection()
{
$host="localhost";
$username="root";
$password="";
$db_name="hotel_db";

$conn = new mysqli($host, $username, $password,$db_name);
return $conn;

}
?>