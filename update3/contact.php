<?php
session_start();
if (isset($_SESSION["user"])) {
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
                    <li><a href="contact1.php">Contact</a></li>
                </ul>
            </div>

                <div class="contact">
                    <b>CONTACT US</b>
                </div>
                <br>
                <center>
                <p style="font-size: 25px; color: white;">jajacampos64@gmail.com 09971873101</p>
                </center>
                <br>
                <div class="mail">
                    <div class="inmail">
                    <form action="">
                        <label for="fname">First name:</label>
                        <input type="text" id="fname" name="fname" value="">
                        <label for="lname">Last name:</label>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="message">Write Message:</label>
                        <input type="text" id="message" name="message" value=""style="width: 100%;height: 60%; tex"><br><br>
                        <input type="submit" value="Submit" style="width: 90px;">
                      </form> 
                    </div>
                </div>
   

         
        </div>
        
        <div class="footer__container">
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook"></i>Facebook</a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
    </body>
</html>