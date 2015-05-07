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
        <script src="../javascript/showMenu.js"></script>
    </head>
    <body onload="allclose(); setting();">
        <?php include "header.php" ?>
        <div class="layout-center-wrapper bg">
            <div id="sign-in">
                <div class="left-column">
                    <h1 class="sign-in-title">Photo gallery</h1>

                    <p class="sign-in-text"> A little bit about the site </p>
                </div>
                <div class="right-column">
                    <a href="photosPage.php">
                        <img class="right-pointer" src="../images/rightPoint.png"/>
                    </a>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
