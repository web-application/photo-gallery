<?php
/**
 *  Created by olgaoskina
 *  09 April 2015
 */
include "checkAuthorizedUser.php";
require_once "admin/connect.php";

$query = "SELECT username, action, date FROM history WHERE username='$username'";
$res = $dbLink->query($query);
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
                <p>Материалы, разработанные на основе наночастиц с уникальными характеристиками, вытекающими из
                   микроскопических размеров их составляющих</p>
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
