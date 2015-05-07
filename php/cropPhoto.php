<?php
/**
 *  Created by olgaoskina
 *  21 April 2015
 */
session_start();
$uploadDir = $_POST["upload_dir"];
$uploadedFile = $uploadDir . basename($_FILES['filename']['name']);
move_uploaded_file($_FILES['filename']['tmp_name'], $uploadedFile)
?>


<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Photo Gallery</title>

        <link rel="stylesheet" href="../css/jquery.Jcrop.css" type="text/css" media="screen" charset="utf-8"/>
        <link rel="stylesheet" href="../css/lightbox.css" type="text/css" media="screen" charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/icons.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:300&amp;subset=cyrillic-ext,cyrillic' rel='stylesheet'
              type='text/css'>
        <script src="../javascript/showMenu.js"></script>
        <script src="../javascript/jquery.min.js" type="text/javascript"></script>
        <script src="../javascript/jquery.Jcrop.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="../javascript/cropPhoto.js"></script>
    </head>
    <body>
        <?php include "header.php" ?>
        <div id="container">
            <div id="content">
                <div id="crop">
                    <img id="mofat" src="<?php echo '' . $uploadedFile ?>" alt="Mo'Fat" width="auto"/>
                    <form action="<?php echo '' . $_POST['action'] ?>" method="post" enctype="multipart/form-data">
                        <div class="layout-center-wrapper sign-in-center" align="center">
                            <ul class="width-300">
                                <li class="li-sign-in">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
                                </li>
                                <li class="li-sign-in">
                                    <input name="filename" type="hidden" title="filename"
                                           value="<?php echo '' . $uploadedFile ?>"/>
                                </li>
                                <li class="li-sign-in">
                                    <input name="upload_dir" type="hidden" title="upload_dir"
                                           value="<?php echo '' . $uploadDir ?>"/>
                                </li>
                                <li class="li-sign-in">
                                    <input type="hidden" name="comment" value="<?php echo '' . $_POST['comment'] ?>" title="comment"/>
                                </li>
                                <li class="li-sign-in">
                                    <button type="submit" class="width-300 button green-button">crop!</button>
                                </li>
                                <li class="li-sign-in">
                                    <input type="hidden" name="back_url"
                                           value="<?php echo '' . $_SERVER['HTTP_REFERER'] ?>"/>
                                </li>
                                <li class="li-sign-in">
                                    <input type="hidden" id="x1" name="x1"/>
                                </li>
                                <li class="li-sign-in">
                                    <input type="hidden" id="y1" name="y1"/>
                                </li>
                                <li class="li-sign-in">
                                    <input type="hidden" id="x2" name="x2"/>
                                </li>
                                <li class="li-sign-in">
                                    <input type="hidden" id="y2" name="y2"/>
                                </li>
                                <li class="li-sign-in">
                                    <input type="hidden" id="w" name="w"/>
                                </li>
                                <li class="li-sign-in">
                                    <input type="hidden" id="h" name="h"/>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>


