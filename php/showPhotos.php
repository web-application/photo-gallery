<?php
/**
 *  Created by olgaoskina
 *  07 April 2015
 */
require_once "admin/connect.php";

$query = "SELECT * FROM photos";
$PATH_TO_IMAGES = "../user_images/";
$PATH_TO_AVATARS = "../avatars/";

$res = $dbLink->query($query);
while ($row = mysqli_fetch_array($res)) {
    echo '
        <div class="photo-with-text">
            <div class="avatar avatar-in-image">
                <img src="' . $PATH_TO_AVATARS . $row['pathToAvatar'] . '">
            </div>
            <span>
                <h2>' . $row['username'] . '</h2>
                <h6>' . $row['date'] . '</h6>
            </span>
            <img class="user-photo" width="400" height="400" alt="' . $row['username'] . '"
                 src="' . $PATH_TO_IMAGES . $row['pathToPhoto'] . '">
            <p>' . $row['comment'] . '</p>
        </div>';
}
?>