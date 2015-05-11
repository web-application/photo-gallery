<?php
/**
 *  Created by olgaoskina
 *  06 April 2015
 */
require_once "admin/connect.php";
$PATH_TO_AVATARS = "../avatars/";

if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
}

if (isset($_COOKIE['password'])) {
    $password = $_COOKIE['password'];
}

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}

if (empty($username) or empty($password)) {
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
    $query = "SELECT username, pathToAvatar FROM users WHERE username = '$username'";
    $result = $dbLink->query($query);
    $row = mysqli_fetch_array($result);
    echo '
        <header>
            <div class="layout-center-wrapper">
                <a href="index.php">
                    <img class="logo" src="../images/logo.png" alt="logo"/>
                </a>
                <a href="uploadPhoto.php">
                    <button type="button" class="wight-300 small-button float-left grey-button">Upload Photo</button>
                </a>
                <form class="form-search float-left" method="post" action="search.php">
                    <input name="query" placeholder="Site search">
                    <input type="submit" value="Search">
                </form>
                <div id="menu_body">
                    <ul>
                        <li>
                            <div onfocus="openMenu(\'sub_menu_1\');return(false)" class="avatar avatar-in-header">
                                <img class="round" src="' . $PATH_TO_AVATARS . $row['pathToAvatar'] . '">
                            </div>
                            <ul id="sub_menu_1">
                               <li><a href="profile.php">View profile</a></li>
                               <li>
                                   <a href="exit.php">Sign out</a>
                               </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>';
}

