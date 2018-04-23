<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "webdesi2_bmdata";
 // connection establishment.......
$conn = new mysqli($servername,$username,$password,$dbname);
 // test connection
 
 if($conn->connect_error)
 {
	 die("connection failed " . $conn->connet_error);
 }
 
?>