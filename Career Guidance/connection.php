<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "career"

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{

}
else
{
	die("CONNECTION NOT SUCCESSFUL");
}
?>