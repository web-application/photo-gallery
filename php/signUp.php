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
        <?php include "header.php" ?>
        <div class="layout-center-wrapper">
            <form action="addCredentials.php" method="post">
                <div class="layout-center-wrapper sign-in-center" align="center">
                    <ul class="width-300">
                        <li class="li-sign-in">
                            <input name="username" type="text" title="username" placeholder="Pick a username">
                        </li>
                        <li class="li-sign-in">
                            <input name="email" type="text" title="email" placeholder="Your email">
                        </li>
                        <li class="li-sign-in">
                            <input name="password" type="password" title="password" placeholder="Create password">
                        </li>
                        <li class="li-sign-in">
                            <button type="submit" class="button green-button">Sign up for PhotoGallery</button>
                        </li>
                        <li class="li-sign-in">
                            <input type="hidden" name="back_url" value="<?php $_SERVER['HTTP_REFERER'] ?>"/>
                        </li>
                    </ul>

                </div>
            </form>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>

