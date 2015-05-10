<?php
/**
 *  Created by olgaoskina
 *  07 May 2015
 */
session_start();
include "checkAuthorizedUser.php";
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
            <form action="cropPhoto.php" method="post" enctype="multipart/form-data">
                <div class="layout-center-wrapper sign-in-center" align="center">
                    <ul class="width-300">
                        <li class="li-sign-in">
                            <input type="hidden" name="action" value="addAvatarToDB.php"/>
                        </li>
                        <li class="li-sign-in">
                            <input type="hidden" name="upload_dir" value="../avatars/"/>
                        </li>
                        <li class="li-sign-in">
                            <input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
                        </li>
                        <li class="li-sign-in">
                            <input name="filename" type="file" title="filename"/>
                        </li>
                        <li class="li-sign-in">
                            <button type="submit" class="width-300 button green-button">Change avatar!</button>
                        </li>
                        <li class="li-sign-in">
                            <input type="hidden" name="back_url" value="<?php echo '' . $_SERVER['HTTP_REFERER'] ?>"/>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
