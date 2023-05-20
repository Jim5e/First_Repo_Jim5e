<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Food Pinoy!</title>
    <link rel="icon" href="images/logo.png">
</head>
<body>
<div class="banner">
            <div class="navbar">
                <h1 class="logo">Food Pinoy!</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="trend.php">Trending</a></li>
                    <li><a href="ing.php">Ingredients</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact1.php">Contact</a></li>
                </ul>
            </div>

            <div class="content">
                <h1 style="margin-bottom: 5px;" >Welcome Back!</h1>
                <p style="margin-bottom: 5px;">
                    FoodMaster
                </p>
                <div style="border-color: #009688;" class="popup" onclick="myFunction()">View Your Submissions
                    <span class="popuptext" id="myPopup">Error!</span>
                  </div>
                    <div>
                        <button type="button"><a class="spanny" href="login.php">LOG OUT</a><span></span></button>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>

    <div class="footer__container">
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook"></i>Facebook</a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
</body>
</html>