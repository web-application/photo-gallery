<?php
/**
 *  Created by olgaoskina
 *  07 May 2015
 */

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}

if (!empty($username) and !empty($password)) {
    header('Location: index.php');
    exit;
}