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

                <div class="theteam">
                    <h1>Meet the Team</h1>
                </div>

                <div class="members">
                    <div class="team-member">
                        <img src="images/james.jpg" alt="Team Member 1">
                        <h3>James Clarit</h3>
                      </div>
                      
                      <div class="team-member">
                        <img src="images/jaja.png" alt="Team Member 2">
                        <h3>Elijah Campos</h3>
                      </div>
                      
                      <div class="team-member">
                        <img src="images/renz.png" alt="Team Member 3">
                        <h3>Renz Corbin</h3>
                      </div>
                    </div>
                    <div class="members1">
                      <div class="team-member">
                        <img src="images/hay.jpg" alt="Team Member 4">
                        <h3>Hayward Uy</h3>
                      </div>
                      <div class="team-member">
                        <img src="images/immortal.jpg" alt="Team Member 5">
                        <h3>Peter Lawrence Diaz</h3>
                      </div>
                      
                      <div class="team-member">
                        <img src="images/jeph.jpg" alt="Team Member 6">
                        <h3>Jephonneh Tantuan</h3>
                      </div>
                </div>

        </div>
        <div class="footer__container">
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook"></i>Facebook</a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
    </body>
</html>