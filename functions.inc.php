<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
     $result = true;   
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
     $result = true;   
    }
    else{
        $result = false;
    }
    return $result;
}


function invalidEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $result = true;   
    }
    else{
        $result = false;
    }
    return $result;
}


function pwdMatch($pwd, $pwdRepeat){
    if ($pwd !== $pwdRepeat){
     $result = true;   
    }
    else{
        $result = false;
    }
    return $result;
}


function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersemail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersemail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    if (empty($username) || empty($pwd)){
     $result = true;   
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false){
        header("location: ../login.php?error=wronglogin1");
        exit();
    }

    $pwdDb = $uidExists["usersPwd"];
    if ($pwd === $pwdDb){
        $checkPwd = true;
    }
    else{
        $checkPwd = false;
    }

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin2");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersid"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../webapp.php");
        exit();
    }
}

function addPet($conn, $email, $animal, $pName, $pBreed, $pDoB, $pGender, $pSize){
    $sql = "INSERT INTO petdetails (userEmail, petType, petName, petBreed, petDoB, PetGender, PetSize) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Request.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $email, $animal, $pName, $pBreed, $pDoB, $pGender, $pSize);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../ListRequest.php");
    exit();
}