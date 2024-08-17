<?php
echo "Hello";
if (isset($_POST["signup"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'database.inc.php';
    require_once 'function.inc.php';

    $emptyInputs = emptyInputSignup($name, $email, $pwd);
    $invalidName = invalidName($name);
    $invalidEmail = invalidEmail($email);
    $invalidPwd = invalidPwd($pwd);
    $uidExists = uidExists($conn, $name, $email);

    if($emptyInputs !== false){
        header("Location:../User Login.php?error=emptyinput");
        exit();
    }

    if($invalidEmail !== false){
        header("Location:../User Login.php?error=invailedemail");
        exit();
    }

    if($invalidName !== false){
        header("Location:../User Login.php?error=invailedname");
        exit();
    }

    if($invalidPwd !== false){
        header("Location:../User Login.php?error=invailedpassword");
        exit();
    }

    if($uidExists !== false){
        header("Location:../User Login.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $pwd);

}
else{
    header('Location:../User Login.php');
    exit();
}


?>