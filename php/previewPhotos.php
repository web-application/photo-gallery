<?php
/**
 *  Created by olgaoskina
 *  09 April 2015
 */
include "checkAuthorizedUser.php";
require_once "admin/connect.php";

$query = "SELECT username, pathToAvatar, 'date', pathToPhoto FROM photos WHERE username='$username'";
$PATH_TO_IMAGES = "../user_images/";
$PATH_TO_AVATARS = "../avatars/";

$res = $dbLink->query($query);
echo '<div class="slider_wrapper">
    <div id="slider">
    <ul>
';
while ($row = mysqli_fetch_array($res)) {
echo '
    <li>
        <img class="slider_img" src="' . $PATH_TO_IMAGES . $row['pathToPhoto'] . '" alt="Css Template Preview"/>
    </li>
';
}
echo '</ul>
    </div>
</div>';
?>




