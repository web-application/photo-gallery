<?php
/**
 *  Created by olgaoskina
 *  08 April 2015
 */
session_start();
require_once "admin/connect.php";
$PATH_TO_AVATARS = "../avatars/";

if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
    header("Location: index.php");
    exit;
}
$username = $_SESSION['username'];
$query = "SELECT username, pathToAvatar FROM users WHERE username = '$username'";
$result = $dbLink->query($query);
$row = mysqli_fetch_array($result);

echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>Photo Gallery</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="../css/index.css">
            <link rel="stylesheet" type="text/css" href="../css/icons.css">
            <link href=\'http://fonts.googleapis.com/css?family=Roboto:300&amp;subset=cyrillic-ext,cyrillic\'
                  rel=\'stylesheet\'
                  type=\'text/css\'>
            <script src="../javascript/profileTabbedMenu.js"></script>
        </head>
        <body onload="setting()" class="vertical-bg">';

include "header.php";
echo '
            <div class="avatar-in-profile avatar">
                <img src="' . $PATH_TO_AVATARS . $row['pathToAvatar'] . '">
                <div class="caption">' . $username . '</div>
            </div>';
include "profileTabbedMenu.php";
//include "footer.php";
echo '        </body>
    </html>
';
?>
