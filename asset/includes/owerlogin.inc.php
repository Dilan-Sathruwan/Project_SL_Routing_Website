<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once 'database.inc.php';
    require_once 'function.inc.php';

    loginOwner($conn, $username, $pwd);
} else {
    header('Location:./Owner Login.php?error=wrongLogin');
    exit();
}
