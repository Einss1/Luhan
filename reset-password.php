<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
    <link rel="stylesheet" href="CSS\index.css">
</head>

<body>
    <center>

        <img src="./Images/logo.png" id="icon"> <br><br>

        <form action="includes/reset-request.inc.php" method="post">
            <label for="email">Email</label><br>
            <input name="email" type="text" placeholder="Enter your e-mail address" required><br><br>

            <button type="submit" name="reset-request-submit">Submit</button>
        </form>
        <?php
            if(isset($_GET["reset"])) {
                if ($_GET["reset"] == "success") {
                    echo "<p>Check your e-mail!</p>";
                }
            }
        ?>

    </center>
</body>

</html>