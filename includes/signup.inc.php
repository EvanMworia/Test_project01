<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"] ;
    $email = $_POST["email"] ;
    $uid = $_POST["uid"] ;
    $pwd = $_POST["pwd"] ;
    $pwd2 = $_POST["pwd2"] ;

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyinputsignup($name, $email, $uid, $pwd, $pwd2) !==false) {
        header("location: ../signup.php?error=emptyinput");
        exit(); 
    }
    if (invaliduid($uid) !==false) {
        header("location: ../signup.php?error=invaliduid");
        exit(); 
    }
    if (invalidemail($email) !==false) {
        header("location: ../signup.php?error=invalidemail");
        exit(); 
    }
    if (passwordmatch($pwd, $pwd2) !==false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit(); 
    }
    if (uidexists($conn, $uid) !==false) {
        header("location: ../signup.php?error=usernametaken");
        exit(); 
    }
    if (emailexists($conn, $email) !==false) {
        header("location: ../signup.php?error=emailexists");
        exit(); 
    }


    createuser($conn, $name, $email, $uid, $pwd); 
}

else{
   header("location: ../signup.php");
   exit();
}