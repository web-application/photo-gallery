<?php
/**
 *  Created by olgaoskina
 *  05 April 2015
 */

if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
    echo '
    <form action="addCredentials.php" method="post">
        <div class="right-column">
            <ul class="width-300">
                <li class="li-sign-up">
                    <input name="username" type="text" title="username" placeholder="Pick a username">
                </li>
                <li class="li-sign-up">
                    <input name="email" type="text" title="email" placeholder="Your email">
                </li>
                <li class="li-sign-up">
                    <input name="password" type="password" title="password" placeholder="Create password">
                </li>
            </ul>
            <button type="submit" class="button green-button">Sign up for PhotoGallery</button>
        </div>
    </form>';
} else {
    echo '
    <div class="right-column">
        <a href="">
            <img class="right-pointer" src="../images/right.png"/>
        </a>
    </div>';
}
?>