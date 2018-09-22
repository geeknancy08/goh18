<?php

$dbServername = "";
$dbUsername = "teamscom_mayank";
$dbPassword = "mayank123";
$dbName = "teamscom_loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$conn) {
 echo "Debugging errno: " . mysqli_connect_error(); }