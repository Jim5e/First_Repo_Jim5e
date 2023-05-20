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

            <div class="content">
                <h1 class="content1">Frequently Asked Questions</h1>
                <p><b>What is this website about?</b><br>
                    This website is about promoting Filipino Cuisines by encouraging users to post their recipes online.<br>
                    <br><b>How do I sign up?</b><br>
                    You can sign up by clicking the "Login" button found on the upper right corner of the page.<br>
                    <br><b>What happens when I upvote?</b><br>
                    When you upvote a dish, it will get featured on the trending tab if it has enough upvotes.<br>
                    <br><b>How can I contact the website's owner?</b><br>
                    Click the "Contact" tab and it will lead you to make a message to the website's owner.<br></p>
            </div>

        </div>
        <div class="footer__container">
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook"></i>Facebook</a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
    </body>
</html>