<?
/**
 *  Created by olgaoskina
 *  06 April 2015
 */
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Photo Gallery</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/icons.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:300&amp;subset=cyrillic-ext,cyrillic' rel='stylesheet'
              type='text/css'>
    </head>
    <body>
        <header>
            <div class="layout-center-wrapper">
                <img class="logo" src="../images/logo.png" alt="logo"/>
                <a href="signIn.php" class="href-sign-in">
                    <button type="button" class="small-button grey-button">Sign in</button>
                </a>
                <a href="index.php" class="href-sign-in">
                    <button type="button" class="small-button green-button">Sign up</button>
                </a>
            </div>

        </header>
        <div class="layout-center-wrapper bg">
            <div id="sign-in">
                <div class="left-column">
                    <h1 class="sign-in-title">Photo gallery</h1>

                    <p class="sign-in-text"> A little bit about the site </p>
                </div>
                <?php include "signUp.php"; ?>
            </div>
        </div>
        <footer class="white">
            <div class="layout-center-wrapper">
                <div class="footer-social">
                    <a href="http://vk.com"
                       class="btn-social">
                        <i class="icon-vk"></i>
                    </a>
                    <a href="http://vk.com"
                       class="btn-social">
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="http://vk.com"
                       class="btn-social">
                        <i class="icon-gplus"></i>
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>
