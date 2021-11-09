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
    <link rel="stylesheet" href="CSS\profile.css">
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

<section class="signup-form">
        <div>
            <form action="" method="">
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
                <input name="updateUserName" type="text" style="text-align:center" placeholder="New Username" ><br><br>
                
                <?php echo "Current email"?> <br>
                <?php echo $row['usersEmail'] ?> <br>
                <input name="updateEmail" type="email" style="text-align:center" placeholder="New Email"><br><br>

                <label for="pwd">Password</label><br>
                <input name="updatePwd" type="password" style="text-align:center" placeholder="New Password" ><br><br>

                <label>Re-type password</label><br>
                <input name="pwdrepeat" type="password" style="text-align:center" placeholder="Re-type password" ><br><br>

                <input type="submit" name="update" value="Update">
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