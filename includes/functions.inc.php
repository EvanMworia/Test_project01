<?php

function emptyinputsignup($name, $email, $uid, $pwd, $pwd2) {
    
    if (empty($name) || empty($email) || empty($uid) || empty($pwd) || empty($pwd2)) {
       $result= true;
    }  
    else {
        $result=false;
    } 
    return $result;
}

function invaliduid($uid){
   
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
       $result= true;
    }  
    else {
        $result=false;
    }
    return $result;
}

function invalidemail($email){
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $result= true;
    }  
    else {
        $result=false;
    }
    return $result;
}

function passwordmatch($pwd, $pwd2){
  
    if ($pwd !== $pwd2) {
       $result= true;
    }  
    else {
        $result=false;
    }
    return $result;
} 

function uidexists($conn, $uid){
    $sql= "SELECT * FROM users WHERE usersuid = ?;";
    $stmt= mysqli_stmt_init($conn);
    if ( !mysqli_stmt_prepare($stmt, $sql) ) {
        header("location: ../signup.php?error=stmtfailed");
        exit(); 
    }
    mysqli_stmt_bind_param($stmt, "s", $uid);
    mysqli_stmt_execute($stmt);

    $resultdata= mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc( $resultdata)) {
        return $row;
    }
    else {
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function emailexists($conn, $email){
    $sql= "SELECT * FROM users WHERE usersemail = ?;";
    $stmt= mysqli_stmt_init($conn);
    if ( !mysqli_stmt_prepare($stmt, $sql) ) {
        header("location: ../signup.php?error=stmtfailed");
        exit(); 
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultdata= mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc( $resultdata)) {
        return $row;
    }
    else {
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createuser($conn, $name, $email, $uid, $pwd){
    $sql= "INSERT INTO users (usersname, usersemail, usersuid, userspwd) VALUES(?, ?, ?, ?) ;";
    $stmt= mysqli_stmt_init($conn);
    if ( !mysqli_stmt_prepare($stmt, $sql) ) {
        header("location: ../signup.php?error=stmtfailed");
        exit(); 
    }


    $hashedpwd= password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $uid, $hashedpwd);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit(); 
}
function emptyinputlogin($username, $pwd) {
    
    if (empty($username) || empty($pwd)) {
       $result= true;
    }  
    else {
        $result=false;
    } 
    return $result;
}
function loginuser($conn, $username, $pwd){
    $uidexists= uidexists($conn, $username);

     if ($uidexists === false) {
        header("location: ../login.php?error=wrongusername");
        exit(); 
     }
     $pwdhashed= $uidexists["userspwd"];
     $checkpwd= password_verify($pwd, $pwdhashed);

     if ($checkpwd === false) {
        header("location: ../login.php?error=wrongpassword");
        exit(); 
     }
     elseif ($checkpwd === true) {
       session_start();
       $_SESSION["userid"]= $uidexists["usersid"];
       $_SESSION["useruid"]= $uidexists["usersuid"];
       header("location: ../home.php?loggedin");
        exit();
     }
}
function createsupplier($conn, $SupplierName, $Product, $Contact, $Email) {
    $sql= "INSERT INTO suppliers (SupplierName, Product, SupplierContact, Email) VALUES(?, ?, ?, ?) ;";
    $stmt= mysqli_stmt_init($conn);
    if ( !mysqli_stmt_prepare($stmt, $sql) ) {
        header("location: ../suppliers.php?error=stmtfailed");
        exit(); 
    }
}