<?php
/**
 *  Created by olgaoskina
 *  08 April 2015
 */
session_start();
include "checkAuthorizedUser.php";
require_once "admin/connect.php";
$PATH_TO_AVATARS = "../avatars/";

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
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <link href="../css/screen.css" rel="stylesheet" type="text/css" media="screen" />
            <script type="text/javascript" src="../javascript/jquery.js"></script>
            <script type="text/javascript" src="../javascript/easySlider1.7.js"></script>
            <script type="text/javascript" src="../javascript/Logger.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#slider").easySlider({
                    });
                });
	        </script>
        </head>
        <body onload="setting()" class="vertical-bg">';

include "header.php";
echo '
        <div class="layout-center-wrapper">
            <div class="avatar-in-profile avatar">
                <a href="changeAvatar.php">
                    <img src="' . $PATH_TO_AVATARS . $row['pathToAvatar'] . '">
                </a>
                <div class="caption">' . $username . '</div>
            </div>';
include "profileTabbedMenu.php";
echo '</div>';
include "previewPhotos.php";
include "footer.php";
echo '
    </body>
</html>
';
?>
