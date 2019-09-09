 <?php

$dbServername='127.0.0.1';
$dbUsername='root';
$dbPassword='';
$dbName ='loginsystem';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );

//$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

//if ($conn->connect_error) {
//           
//
//    die("Connection failed: " . $conn->connect_error);
//    
//    
//}
//echo "Connected successfully";

