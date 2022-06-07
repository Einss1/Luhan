<?php

if (isset($_POST["submit"])) {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $username = $_POST["uid"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdrepeat"];
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

   if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../login/signup.php?error=emptyinput");
    exit();
   }

   else if (invalidUid($username) !== false) {
    header("location: ../login/signup.php?error=invaliduid");
    exit();
   }

   else if (invalidEmail($email) !== false) {
    header("location: ../login/signup.php?error=invalidemail");
    exit();
   }

   else if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../login/signup.php?error=passwordsdontmatch");
    exit();
   }

   else if (uidExists($conn, $username, $null) !== false) {
    header("location: ../login/signup.php?error=usernametaken");
    exit();
   }

   else if (uidExists($conn, $null , $email) !== false) {
    header("location: ../login/signup.php?error=emailtaken");
    exit();
   }

   else if (validatepwd($pwd) !== false) {
    header("location: ../login/signup.php?error=weakPassword");
    exit();
   }

    else {
     createUser($conn, $name, $email, $username, $pwd); 
     header("location: ../login/signup.php?error=none");
     exit();
    }
}else {
    header("location: ../login/signup.php");
    exit();
}

?>