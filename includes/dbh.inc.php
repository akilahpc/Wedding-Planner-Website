<?php

$serverName = "localhost";
$dbUsername = "user123";
$dbPassword = "YVWh)pA6u4yJ]quB";
$dbName = "user_login";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn){

die("Connection failed :" .mysqli_connect_error());

}

