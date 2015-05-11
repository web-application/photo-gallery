<?php
/**
 *  Created by olgaoskina
 *  07 April 2015
 */
session_start();
session_destroy();
setcookie("username");
setcookie("password");
header('Location: index.php');
exit;
?>