<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
    <style><?php include 'CSS\index.css'?></style>
</head>

<body>
    <center>

        <img src="./Images/logo.png" id="icon"> <br><br>

        <h1 style="font-size:16px;">Enter your email address and an email will be sent <br> to you with information on how to <br> update your password. </h1>
        <form action="includes/reset-request.inc.php" method="post">
            <label for="email">Email</label><br>
            <input name="email" type="text" style="text-align:center" placeholder="Enter your email address" required><br><br>

            <button type="submit" name="reset-request-submit">Submit</button>
        </form>
        <?php
            if(isset($_GET["reset"])) {
                if ($_GET["reset"] == "success") {
                    echo "<p>Check your e-mail!</p>";
                }
            }
        ?>
        <br><br>
<a href="login.php" style="font-family: Arial;">Back to login</a><br>

    </center>
</body>

</html>