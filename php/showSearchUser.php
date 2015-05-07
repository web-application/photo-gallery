<?php
/**
 *  Created by olgaoskina
 *  07 May 2015
 */
require_once "admin/connect.php";

$queryUsers = "SELECT username, pathToAvatar FROM users WHERE username LIKE '%$searchQuery%'";

$res = $dbLink->query($queryUsers);
if ($res->num_rows != 0) {
    echo '<h3 align="center">Найденные люди</h3>';

    while ($row = mysqli_fetch_array($res)) {
        echo '
            <div style="display: inline-block">
                <div class="avatar-in-profile avatar">
                    <img src="' . $PATH_TO_AVATARS . $row['pathToAvatar'] . '">
                    <div class="caption">' . $row['username'] . '</div>
                </div>
            </div>';
    }
}