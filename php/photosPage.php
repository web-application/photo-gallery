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
        <script type="text/javascript" src="../javascript/Logger.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
        <script type="text/javascript" src="../javascript/jquery.js"></script>
        <script type="text/javascript" src="../javascript/loadPhotos.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>

    </head>
    <body onload="ajaxLoader();">
        <?php include "header.php" ?>
        <div align="center" id="photos">
            <?php include "showPhotos.php" ?>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
