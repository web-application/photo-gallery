<?php
/**
 *  Created by olgaoskina
 *  09 April 2015
 */
include "checkAuthorizedUser.php";
require_once "admin/connect.php";

$PATH_TO_IMAGES = "../user_images/";
$query = "SELECT username, action, date FROM history WHERE username='$username' GROUP BY date DESC LIMIT 10";
$res = $dbLink->query($query);

$queryPhoto = "SELECT * FROM photos GROUP BY date DESC LIMIT 1";
$resPhoto = $dbLink->query($queryPhoto);
?>
<div id="wrap" class="wrap_tab right">
    <div>
        <div>
            <span onclick="show_tab(1)" id="bat_1" class="myButton"></span>
            <span onclick="show_tab(2)" id="bat_2" class="myButton"></span>
        </div>
    </div>
    <div style="display: block;" id="tab_1" class="tab">
        <div style="padding: 5px;">
            <?php
            while ($row = mysqli_fetch_array($resPhoto)) {
                echo '
                <div class="avatar avatar-in-image" style="margin:10px;display: inline-block;">
                    <img class="round" src="' . $PATH_TO_AVATARS . $row['pathToAvatar'] . '">
                </div>
                <div class="last-photo-user"> <p>' . $row['username'] . '</p></div>
                <img class="last-photo" width="200" height="200"
                     src="' . $PATH_TO_IMAGES . $row['pathToPhoto'] . '">
            ';
            }
            ?>
        </div>
    </div>
    <div id="tab_2" class="tab">
        <div style="padding: 5px;">
            <?php
            while ($row = mysqli_fetch_array($res)) {
                echo '
                    <div class="history">
                        <div class="history-action">' . $row['action'] . '</div>
                        <div class="history-date">' . $row['date'] . '</div>
                    </div>
                ';
            }
            ?>
        </div>
    </div>
</div>
