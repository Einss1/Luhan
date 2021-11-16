<?php
    require_once 'includes/dbh.inc.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style><?php include 'CSS\profile.css'?></style>
</head>

<body>
<center>

    <img src="./Images/logo.png" id="icon"> <br><br>

    <?php 
        if(isset($_SESSION["useruid"])) {
            echo "<li><a href='homepage.php'>Homepage </a></li>";
            echo "<li><a href='includes/logout.inc.php'>Log out </a></li> <br><br>";
        }
        else {
            header("location: ../luhan/login.php");
            }
    ?>

    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == 'usernametaken') {
                ?>
                 <small class="alert alert-error">Username already taken!</small>
                <br>
            <?php   
            }
            if($_GET['error'] == 'emailtaken') {
                ?>
                 <small class="alert alert-error">Email already taken!</small>
                <br>
            <?php   
            }
            if($_GET['error'] == 'emptyinputs') {
                ?>
                 <small class="alert alert-error">Inputs are empty!</small>
                <br>
            <?php   
            }
            if($_GET['error'] == 'passwordsdontmatch') {
                ?>
                 <small class="alert alert-error">Passwords don't match!</small>
                <br>
            <?php   
            }
            if($_GET['error'] == 'weakpassword') {
                ?>
                 <small class="alert alert-error">Password should be at least 8 characters in length and should include at least one upper case letter , one number and one special character!</small>
                <br>
            <?php   
            }
        }
    ?>
    
    
<section class="signup-form">
        <div>
            <form action="includes/userProfileUpdateProcess.php" method="POST" enctype="multipart/form-data">
                <?php
                    $currentUser = $_SESSION['useruid'];
                    $sql = "SELECT * FROM users WHERE usersUid = '$currentUser'";

                    $gotResults = mysqli_query($conn, $sql);
                    if($gotResults) {
                        if(mysqli_num_rows($gotResults)>0){
                            while($row = mysqli_fetch_array($gotResults)){
                                //print_r($row['usersName']);
                                ?>
                 
                <?php echo "Welcome ", $row['usersName'], ","; ?><br>
                <?php echo "below you'll find a form to update your profile details"; ?> <br><br>

                
                <?php echo "Current username"?> <br>
                <?php echo $_SESSION['useruid']; ?> <br>
                <input name="updateUserName" type="text" style="text-align:center" placeholder="New Username"><br><br>
                
                <?php echo "Current email"?> <br>
                <?php echo $row['usersEmail'] ?> <br>
                <input name="updateEmail" type="email" style="text-align:center" placeholder="New Email"><br><br>

                <label for="pwd">Password</label><br>
                <input name="updatePwd" type="password" style="text-align:center" placeholder="New Password"><br><br>

                <label>Re-type password</label><br>
                <input name="pwdrepeat" type="password" style="text-align:center" placeholder="Re-type password"><br><br>

                <input type="submit" name="update" value="Update Account">
                <br><br><br><br>
                <input class="delete" type="submit" name="delete" value="Delete Account">
                                <?php
                            }
                        }
                    }
                ?>
            </form>
        </div>
    </section>

</center>    
</body>

</html>