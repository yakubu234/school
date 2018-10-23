<?php  
error_reporting(0);
session_start();
ob_start();
$url = "localhost";
$user = "root";
$pass = "";
$dbname = "highschool";


$conn = new mysqli($url,$user,$pass,$dbname);
if ($conn-> connect_errno) {
	echo "unable to connect".$conn->connect_error;
}else{

}



?>