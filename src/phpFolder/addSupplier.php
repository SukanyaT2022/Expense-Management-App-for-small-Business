<?php
// step 1.1start connect - we need this line below for every php page to connect to database
$servername = "localhost";
$username = "root";
$password = "";

// step 1.2Create connection to read from html
$conn = new mysqli($servername, $username, $password, "farmData");
//add "farmData" come from xammp - it's name of database completed folder

// step 2Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


//step 2
$supplierName = $_REQUEST['supplierName'];
$phoneNumber = $_REQUEST['phoneNumber'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];

$supplierID = rand(1000,9999);
//randum number for id


// step 3
//step 3 insert add new item to database
$sql = "INSERT INTO supplier VALUES ($supplierID, '$supplierName','$address','$phoneNumber','$email')";
//supplier orange color is the same of the file table in mysql
// $supplierID no qutation coz result is number
// and 'supplierName' coz nzme is letter not numner for result
$conn->query($sql);
echo $sql;
echo "New record created successfully";
$conn->close();
?>