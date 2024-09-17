<?php
// 2 ways to send info from html to php 
//1 we use $_POST (post more security data than get) or $_GET--only on html mehtod="post"
//2 or use $_REQUEST -- use $_REQUEST --use only in php to gte data

//step2 get data from html
$email = $_REQUEST['email'];//read [email] from that text box
$pwd = $_REQUEST['password'];

// step 1 bult connection bet php and html
//step 2 get data from html
//step 3 run sql query


//step 1 connect
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

//step3 run sql query
$sql = 'select *from login';
$result = $conn->query($sql);
// for loop take each row if this username and passward found on the row
//each value is $ row
$found = false;
while($row = $result -> fetch_assoc()){
    if($row ["userName"] == $email && $row ["password"] == $pwd ){
        // userName have to be the same as my admin oh php
        //if this email exist on the table on php or not
        //compare that the user type is the same as the table on php

        // header("Location: index.html");

        //header is function in javascript when you want to go one page to other page
        echo("Login Successful!");
        $found = true;
        break;
    }
}
//if not match go to not find
if($found == false){
    echo("Login Fails!");
}

?>