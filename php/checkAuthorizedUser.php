<?php
/**
 *  Created by olgaoskina
 *  07 May 2015
 */

//session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}

if (empty($username) or empty($password)) {
    header('Location: index.php');
    exit;
}