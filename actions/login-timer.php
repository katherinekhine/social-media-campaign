<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Timer</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="login-timer-page">
    <div id='login-timer' class="login-timer"></div>

    <script type="text/javascript">
        var month = new Date().getMonth() + 1;
        var day = new Date().getDate();
        var year = new Date().getFullYear();
        var hour = new Date().getHours();
        var minutes = new Date().getMinutes() + 10;
        var second = new Date().getSeconds() + 2;
        var time = hour + ":" + minutes + ":" + second;

        var ResetTime = new Date(month + " " + day + ", " + year + " " + time).getTime();

        var x = setInterval(function() {

            var now = new Date().getTime();
            var distance = ResetTime - now;

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("login-timer").innerHTML = "<h2>Your Login is blocked.Please wait</h2>" + "<div class='privacy-sec'>" + minutes + " <b>m</b> " + seconds + " <b>s</b> " + "</div>";


            if (distance < 0) {
                clearInterval(x);
                document.getElementById("login-timer").innerHTML = "<?php session_destroy();  ?>";
                window.location.href = '../loginform.php';
            }
        }, 1000); //1 sec = 1000 milisecond
    </script>
</body>

</html>