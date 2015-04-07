<?php
/**
 *  Created by olgaoskina
 *  06 April 2015
 */
require_once "admin/connect.php";
$PATH_TO_AVATARS = "../avatars/";
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
    echo '
        <header>
            <div class="layout-center-wrapper">
                <a href="index.php">
                    <img class="logo" src="../images/logo.png" alt="logo"/>
                </a>
                <a href="signIn.php">
                    <button type="button" class="small-button grey-button">Sign in</button>
                </a>
                <a href="signUp.php">
                    <button type="button" class="small-button green-button">Sign up</button>
                </a>
            </div>
        </header>';
} else {
    $username = $_SESSION['username'];
    $query = "SELECT username, pathToAvatar FROM users WHERE username = '$username'";
    $result = $dbLink->query($query);
    $row = mysqli_fetch_array($result);
    echo '
        <header>
            <div class="layout-center-wrapper">
                <a href="index.php">
                    <img class="logo" src="../images/logo.png" alt="logo"/>
                </a>
                <div class="avatar avatar-in-header">
                    <img src="' . $PATH_TO_AVATARS . $row['pathToAvatar'] . '">
                </div>
                <a href="exit.php">
                    <button type="button" class="small-button green-button">Exit</button>
                </a>
            </div>
        </header>';
}
