<?php
/**
 *  Created by olgaoskina
 *  07 April 2015
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
        <div align="center">
                <?php include "showPhotos.php" ?>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
