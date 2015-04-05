<?php
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
        <div class="layout-center-wrapper">
            <form action="checkCredentials.php" method="post">
                <div class="layout-center-wrapper sign-in-center" align="center">
                    <ul class="width-300">
                        <li class="li-sign-in">
                            <input name="username" type="text" title="username" placeholder="Enter your username">
                        </li>
                        <li class="li-sign-in">
                            <input name="password" type="password" title="password" placeholder="Enter your password">
                        </li>
                        <li class="li-sign-in">
                            <button type="submit" class="button green-button">Sign in</button>
                        </li>
                    </ul>

                </div>
            </form>
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

