<?php
session_start();

if(isset($_POST['delete'])) {
    include('dbh.inc.php');
    $currentUser = $_SESSION['useruid'];
    $sql = "DELETE FROM users WHERE usersUid = '$currentUser'";
    $results = mysqli_query($conn,$sql);
    session_destroy();
    header('Location:../login/index.php?success=accountDeleted');
    exit;
} else {
    header('Location:../profile.php');
}
?>