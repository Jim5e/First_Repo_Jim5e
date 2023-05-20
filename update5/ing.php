<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Pinoy!</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="menuM">
                <div class="menu">
                    <h1>Bicol Express</h1>
                    <img style="height: 200px; width: 200px;  border-radius: 50%" src="images/carou.jpg">
                    <div>
                        <a style="text-decoration: none;color: white;" href="user1.html">FoodMaster</a>
                        <div class="popup" onclick="myFunction()">Upvote
                            <span class="popuptext" id="myPopup">Upvote Successfull!</span>
                          </div>
                    </div>
                </div>
    
                <div class="menu2">
                    <h1>Humba</h1>
                    <img style="height: 200px; width: 200px; border-radius: 50%;" class="pic" src="images/humba.jfif">
                    <div>
                        <a style="text-decoration: none;color: white;" href="user1.html">FoodMaster</a>
                        <div class="popup" onclick="myFunction()">Upvote
                            <span class="popuptext" id="myPopup">Upvote Successfull!</span>
                          </div>
                    </div>
                </div>
            </div>
            

        </div>
        <div class="footer__container">
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook"></i>Facebook</a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
    </body>
</html>