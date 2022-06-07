<?php
session_start();

if(isset($_POST['update'])) {
    include('dbh.inc.php');
    include('functions.inc.php');    
    $userNewName = $_POST['updateUserName'];   
    $userNewEmail = $_POST['updateEmail'];
    $userNewPassword = $_POST['updatePwd'];
    $pwdRepeat = $_POST['pwdrepeat'];    
    $hashedPwd = password_hash($userNewPassword, PASSWORD_DEFAULT);       
    $currentUser = $_SESSION['useruid'];

    if (uidExists($conn, $userNewName, $null) !== false) {
        header("location: ../profile.php?error=usernametaken");
        exit();
    }

    else if (uidExists($conn, $null,  $userNewEmail) !== false) {
        header("location: ../profile.php?error=emailtaken");
        exit();
    }

    if (pwdMatch($userNewPassword, $pwdRepeat) !== false) {
        header("location: ../profile.php?error=passwordsdontmatch");
        exit();
    }

    if (empty($userNewName) && empty($userNewEmail) && empty($userNewPassword)){
        header('Location:../profile.php?error=emptyinputs');
        exit;
    }

    else if (empty($userNewName) && empty($userNewEmail)){
        if (validatepwd($userNewPassword) !== false) {
            header("location: ../profile.php?error=weakpassword");
            exit();
        } else{
        $sql = "UPDATE users SET usersPwd = '$hashedPwd' WHERE usersUid = '$currentUser'";
        $results = mysqli_query($conn,$sql);
        header('Location:../login.php?success=profileUpdated');
        exit;
        }
    }

    else if (empty($userNewName) && empty($userNewPassword)){
        $sql = "UPDATE users SET usersEmail = '$userNewEmail' WHERE usersUid = '$currentUser'";
        $results = mysqli_query($conn,$sql);
        header('Location:../login.php?success=profileUpdated');
        exit;
    }

    else if (empty($userNewEmail) && empty($userNewPassword)){
        $sql = "UPDATE users SET usersUid = '$userNewName' WHERE usersUid = '$currentUser'";
        $results = mysqli_query($conn,$sql);
        header('Location:../login.php?success=profileUpdated');
        exit;
    }

    else if (empty($userNewName)){
        if (validatepwd($userNewPassword) !== false) {
            header("location: ../profile.php?error=weakpassword");
            exit();
        } else {
        $sql = "UPDATE users SET usersEmail = '$userNewEmail', usersPwd = '$hashedPwd' WHERE usersUid = '$currentUser'";
        $results = mysqli_query($conn,$sql);
        header('Location:../login.php?success=profileUpdated');
        exit;
        }
    }

    else if (empty($userNewEmail)){
        if (validatepwd($userNewPassword) !== false) {
            header("location: ../profile.php?error=weakpassword");
            exit();
        } else {
            $sql = "UPDATE users SET usersUid = '$userNewName', usersPwd = '$hashedPwd' WHERE usersUid = '$currentUser'";
            $results = mysqli_query($conn,$sql);
            header('Location:../login.php?success=profileUpdated');
            exit;
        }
    }

    else if (empty($userNewPassword)){
        $sql = "UPDATE users SET usersUid = '$userNewName', usersEmail = '$userNewEmail' WHERE usersUid = '$currentUser'";
        $results = mysqli_query($conn,$sql);
        header('Location:../login.php?success=profileUpdated');
        exit;
    }

    else {
        if (validatepwd($userNewPassword) !== false) {
            header("location: ../profile.php?error=weakpassword");
            exit();
        }else {
            $sql = "UPDATE users SET usersUid = '$userNewName', usersEmail = '$userNewEmail', usersPwd = '$hashedPwd' WHERE usersUid = '$currentUser'";
            $results = mysqli_query($conn,$sql);
            header('Location:../login.php?success=profileUpdated');
            exit;
        }
    }
} else {
    echo 'Something went wrong! Try Again!';
}

?>