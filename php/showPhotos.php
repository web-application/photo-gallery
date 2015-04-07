<?php
/**
 *  Created by olgaoskina
 *  07 April 2015
 */
include "admin/connect.php";

$query = "SELECT * FROM photos";
$PATH_TO_FOLDER = "../user_images/";

$res = $dbLink->query($query);
while ($row = mysqli_fetch_array($res)) {
    echo '
        <div class="photo-with-text">
            <img class="user-photo" width="400" height="400" alt="' . $row['username'] . '"
                 src="' . $PATH_TO_FOLDER . $row['pathToPhoto'] . '">
            <span>
                <h2>' . $row['username'] . '</h2>
                <h6>' . $row['date'] . '</h6>
            </span>
        </div>';
}
?>