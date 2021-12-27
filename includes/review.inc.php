<?php
require_once('dbh.inc.php');
require_once('functions.inc.php');
session_start();

if (isset($_POST["submit"])) {
    $id = $_SESSION['id'];
    $meaningInput = $_POST["meaning"];
    $meaning = returnMeaning($conn, $id);
    
    if ($meaningInput == $meaning){
        header("location: ../review.php?success=rightAnswer");
    } else{
        header("location: ../review.php?error=wrongAnswer");
    }
}