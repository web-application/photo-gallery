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
    $whereClause .= "comment LIKE '%$q%'";
}
$queryComment = "SELECT username, pathToPhoto, date, comment, pathToAvatar FROM photos WHERE " . $whereClause;

$res = $dbLink->query($queryComment);
if ($res->num_rows != 0) {
    if (!$isPrinted) {
        echo '<h3 align="center">Найденные комментарии</h3>';
        echo '<div align="center">';
    }
    while ($row = mysqli_fetch_array($res)) {
        echo '
            <div style="display: inline-block">
                 <div class="photo-with-text">
                    <div class="avatar avatar-in-image">
                        <img class="round" src="' . $PATH_TO_AVATARS . $row['pathToAvatar'] . '">
                    </div>
                    <span>
                        <h2>' . $row['username'] . '</h2>
                        <h6>' . $row['date'] . '</h6>
                    </span>
                    <img class="user-photo" width="400" height="400" alt="' . $row['username'] . '"
                         src="' . $PATH_TO_IMAGES . $row['pathToPhoto'] . '">
                    <p>' . $row['comment'] . '</p>
                </div>
            </div>';
    }
}
echo '</div>';





