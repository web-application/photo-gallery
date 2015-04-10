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
        <script type="text/javascript">
            var id_menu = ['sub_menu_1'];
            startList = function allclose() {
                for (i = 0; i < id_menu.length; i++) {
                    document.getElementById(id_menu[i]).style.display = "none";
                }
            };
            function openMenu(id) {
                for (i = 0; i < id_menu.length; i++) {
                    if (id != id_menu[i]) {
                        document.getElementById(id_menu[i]).style.display = "none";
                    }
                }
                if (document.getElementById(id).style.display == "block") {
                    document.getElementById(id).style.display = "none";
                } else {
                    document.getElementById(id).style.display = "block";
                }
            }
            window.onload = startList;
        </script>
    </head>
    <body>
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
