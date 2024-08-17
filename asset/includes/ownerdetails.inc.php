<?php

if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $dob = $_POST["dob"];
    $nic = $_POST["nic"];
    $oname = $_POST["oname"];
    $oadd = $_POST["oadd"];
    $opn = $_POST["opn"];
    $omail = $_POST["omail"];
    $pwd = $_POST["pwd"];
    $pwd2 = $_POST["pwd2"];


    require_once 'database.inc.php';
    require_once 'function.inc.php';


    $invalidEmail = invalidEmail($omail);
    $invalidPwd = invalidPwd($pwd);
    $ownerExists = ownerExists($conn, $oname, $omail);


    if ($invalidEmail !== false) {
        header("Location:../owner login.php?error=invailedemail");
        exit();
    }


    if ($invalidPwd !== false) {
        header("Location:../owner login.php?error=invailedpassword");
        exit();
    }

    if ($ownerExists !== false) {
        header("Location:../owner login.php?error=usernametaken");
        exit();
    }

    createOwner($conn, $fname, $dob, $nic, $omail, $oadd, $opn, $oname, $pwd);
} else {
    header('Location:../owner login.php');
    exit();
}
