<?php
// function emptyInputSignup($name, $email, $pwd) {
//     $result;
//     if(empty($name)|| empty($email)|| empty($pwd)){
//         $result = true;
//     } else{
//         $result = false;
//     }
//     return $result;
// }

function emptyInputSignup($name, $email, $pwd)
{
    return empty($name) || empty($email) || empty($pwd);
}

function invalidName($name)
{
    $result = null;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidPwd($pwd)
{
    $result = null;
    if (!filter_var($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidEmail($email)
{
    $result = null;
    if (!filter_var($email)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $name, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../User login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function ownerExists($conn, $name, $email)
{
    $sql = "SELECT * FROM owner_details WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../User login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $pwd)
{
    $sql = "INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../User login.php?error=stmtfailed");
        exit();
    }
    $hashedPWD = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPWD);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../User login.php?error=none");
    exit();
}

function createOwner($conn, $fname, $dob, $nic, $omail, $oadd, $opn, $oname, $pwd)
{

    $sql = "INSERT INTO owner_details (full_name, dob, nic,email,address,phone_number,username,password) VALUES (?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../User login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssssss", $fname, $dob, $nic, $omail, $oadd, $opn, $oname, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../Owner Login.php?error=none");
    exit();
}




// <--------login function---------------->

function emptyInputsLogin($email, $pwd)
{
    return empty($email) || empty($pwd);
}

// function LoginUser($conn, $useremail, $pwd)
// {
//     $uidExists = uidExists($conn, $useremail, $useremail); // passing $useremail twice as $name and $email
//     if ($uidExists === false) {
//         header("Location:../User Login.php?error=wronglogin");
//         exit();
//     }
//     $pwdHashed = $uidExists["usersPwd"];
//     $checkPwd = password_verify($pwd, $pwdHashed);

//     if ($checkPwd === false) {
//         header('Location:../signup.php?error=wronglogin');
//         exit();
//     } else if ($checkPwd === true) {
//         session_start();
//         $_SESSION["userid"] = $uidExists["userId"];
//         $_SESSION["useruid"] = $uidExists["usersUid"];
//         header('Location:../../index.php?error=yournowlogin');

//         exit();
//     }
// }

function LoginUser($conn, $useremail, $pwd)
{
    $uidExists = uidExists($conn, $useremail, $useremail); // passing $useremail twice as $name and $email
    if ($uidExists === false) {
        header("Location:../User Login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header('Location:../User Login.php?error=wronglogin');
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["uname"] = $uidExists["usersName"];
        header("Location:../../index.php?error=yournowlogin");
        exit();
    }
}

function loginowner($conn, $username, $pwd)
{
    // Fetch user data from the database based on the provided email
    $sql = "SELECT * FROM owner_details WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../signin/index.php?error=sqlerror");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the password
        $pwdHashed = $row['password'];
        if ($pwd == $pwdHashed) {
            // Password matches, start session and set session variables
            session_start();
            $_SESSION["uid"] = $row["uid"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["status"] = $row["status"];

            if ($_SESSION["status"] == 1) {
                header('Location:../admin.php');
            } else {
                header('Location:../Route S.php?admin=no');
            }


            exit();
        } else {
            // Password does not match
            header("Location:../Owner Login.php?error=Awrongpassword");
            exit();
        }
    } else {
        // User with the provided email does not exist
        header("Location:../Owner Login.php?error=nouser");
        exit();
    }
}

function createRoute($conn,  $route, $route_number, $bus_number, $bus_owner_name, $distance, $bus_stops, $start_venue, $start_time, $stop_time)
{
    $sql = "INSERT INTO route_details (route, route_number, bus_number,bus_owner_name,distance,bus_stops,start_venue,start_time,stop_time) VALUES (?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../User login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssssssss",  $route, $route_number, $bus_number, $bus_owner_name, $distance, $bus_stops, $start_venue, $start_time, $stop_time);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../Route S.php?error=nones");
    exit();
}
