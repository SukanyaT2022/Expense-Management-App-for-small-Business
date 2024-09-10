<!-- the connect of database always like this line 2 to 13 -->
<?php
$servername = "localhost";
$username = "root";
$password = "";

// step 2Create connection
$conn = new mysqli($servername, $username, $password, "farmData");
//add "farmData" come from xammp - it's name of database completed folder

// step 1Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// step 1inside "" have to be the same name="" like html sign up page
$usernameRequest = $_REQUEST["email"];
$passwordRequest = $_REQUEST["password"];
$userTypeRequest = $_REQUEST["userType"];

//step 2 insert add new item to database
$sql = "INSERT INTO login
VALUES ('usernameRequest', 'passwordRequest', 'userTypeRequest')";
$conn->query($sql);
echo "New record created successfully";
$conn->close();
?>
<!-- echo in php is print or document.write -->
