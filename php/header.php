<?php
/**
 *  Created by olgaoskina
 *  06 April 2015
 */
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
    echo '
        <header>
            <div class="layout-center-wrapper">
                <img class="logo" src="../images/logo.png" alt="logo"/>
                <a href="signIn.php" class="href-sign-in">
                    <button type="button" class="small-button grey-button">Sign in</button>
                </a>
                <a href="index.php" class="href-sign-in">
                    <button type="button" class="small-button green-button">Sign up</button>
                </a>
            </div>
        </header>';
} else {
    echo '
        <header>
            <div class="layout-center-wrapper">
                <img class="logo" src="../images/logo.png" alt="logo"/>
            </div>
        </header>';
}
