<?php
$severName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "user_login";

$conn = mysqli_connect($severName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("connction failed : " . mysqli_connect_error());
} else {
}
