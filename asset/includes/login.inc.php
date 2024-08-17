<?php
echo "Hello";
if (isset($_POST["submit"])) {
    $useremail = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'database.inc.php';
    require_once 'function.inc.php';

    if (emptyInputsLogin($useremail, $pwd) !== false) {
        exit();
    }

    LoginUser($conn, $useremail, $pwd);
} else {
    header('Location:../User Login.php?');
    exit();
}
