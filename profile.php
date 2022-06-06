<?php
    require_once 'includes/dbh.inc.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile - Lumorah</title>
        <link rel="icon" type="image/x-icon" href="Images/monkeylogo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <style><?php include 'CSS\profile.css'?></style>
</head>

<body>
<center>

<body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">Lumorah</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php 
                if(isset($_SESSION["useruid"])) {
                    echo '<li class="nav-item"><a class="nav-link" href="homepage.php">Homepage</a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="progress.html">Progress</a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="includes/logout.inc.php"> Log out </a></li>';
                }
                else {
                    header("location: ../luhan/login.php");
                }
            ?>
                        </ul>
                    </div>
                </div>
            </nav>
    <img src="https://dummyimage.com/600x300/343a40/6c757d" id="icon"> <br><br>


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