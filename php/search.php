<?php
/**
 *  Created by olgaoskina
 *  07 May 2015
 */

session_start();

require_once "admin/connect.php";
$PATH_TO_AVATARS = "../avatars/";
$PATH_TO_IMAGES = "../user_images/";

if (isset($_POST['query'])) {
    $searchQuery = $_POST['query'];
}

if (empty($searchQuery)) {
    exit ("
    <html>
        <header>
            <meta charset='UTF-8' content=\"text/html\"/>
        </header>
        <body>
            <div align='center'>
                <h3>Вы ввели пустой запрос, вернитесь назад и повторите попытку</h3>
                    <a href='index.php'>
                <b>Назад</b>
            </div>
        </body>
    </html>");
}
$searchQuery = stripslashes($searchQuery);
$searchQuery = htmlspecialchars($searchQuery);
$searchQuery = trim($searchQuery);
$searchQueries = preg_split("[ ]", $searchQuery);
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
    <body onload="allclose()">
        <?php include "header.php" ?>
        <div class="layout-center-wrapper">
            <?php include"showSearchUser.php"?>
            <?php include"showSearchPhotos.php"?>
            <?php include"showSearchComment.php"?>
            <?php include"showSearchDate.php"?>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>