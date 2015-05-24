<?php
/**
 *  Created by olgaoskina
 *  07 May 2015
 */
require_once "admin/connect.php";
include "checkAuthorizedUser.php";
$isPrinted = false;

$whereClause = "";
foreach ($searchQueries as $q) {
    if (strlen($whereClause) > 0) {
        $whereClause .= " OR ";
    }
    $whereClause .= "username LIKE '%$q%'";
}
$queryUsers = "SELECT username, pathToAvatar FROM users WHERE " . $whereClause;
$res = $dbLink->query($queryUsers);
if ($res) {
    if ($res->num_rows != 0) {
        if (!$isPrinted) {
            echo '<h3 class="retrieval-header">Найденные люди</h3>';
            $isPrinted = true;
        }
        while ($row = mysqli_fetch_array($res)) {
            echo '
            <div style="display: inline-block">
                <div class="avatar-in-profile small-margin avatar">
                    <img src="' . $PATH_TO_AVATARS . $row['pathToAvatar'] . '">
                    <div class="caption red">' . $row['username'] . '</div>
                </div>
            </div>';
        }
    }
}