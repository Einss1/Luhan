<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="CSS\homepage.css">

<body>
    <center>
        <img src="./Images/logo2.png" id="icon"> <br><br>
        <ul>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="progress.html">Progress</a></li>
            <li><a href="Info.html">Info</a></li>
            <li><a href="includes/logout.inc.php">Log out</a></li>
        </ul>
        <br><br>

        <button class="button button1" onclick="window.location.href='newkanjis.php'" ;>New Kanjis
            <p id="date"></p>
            <script>
                var d = new Date();
                var date = d.getDate();
                var year = d.getFullYear();
                var month = d.getMonth();
                var monthArr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                month = monthArr[month];
                document.getElementById("date").innerHTML = date + ", " + month + ", " + year;
            </script>
        </button>
        <br><br>
        <button class="button button2" onclick="window.location.href='newkanjis.html'" ;>Review</button>
        <br><br>
        <button class="button button3" onclick="window.location.href='newkanjis.html'" ;>Practice</button>



    </center>
</body>

</html>