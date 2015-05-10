<?php
/**
 *  Created by olgaoskina
 *  05 April 2015
 */
//session_start();
include "checkUnauthorizedUser.php";
require_once "admin/connect.php";

if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (empty($username) or empty($email) or empty($password)) {
    exit ("
    <html>
        <header>
            <title>Photo Gallery</title>
            <meta charset='UTF-8' content=\"text/html\"/>
        </header>
        <body>
            <div align='center'>
                <h3>Вы ввели не всю информацию, вернитесь назад и заполните все поля!</h3>
                    <a href='index.php'>
                <b>Назад</b>
                </a>
                </h3>
            </div>
        </body>
    </html>");
}
$username = stripslashes($username);
$username = htmlspecialchars($username);
$username = trim($username);

$password = stripslashes($password);
$password = htmlspecialchars($password);
$password = trim($password);

$email = stripslashes($email);
$email = htmlspecialchars($email);
$email = trim($email);

$query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
if ($dbLink->query($query)) {
    $_SESSION['password'] = $password;
    $_SESSION['username'] = $username;
    header('Location: ' . $_POST['back_url']);
    exit;
} else {
    exit ("
    <html>
        <header>
            <meta charset='UTF-8' content=\"text/html\"/>
        </header>
        <body>
            <div align='center'>
                <h3>Пользователь с таким логином или e-mail уже существует</h3>
                <a href='index.php'>
                    <b>Назад</b>
                </a>
                </h3>
            </div>
        </body>
    </html>");
}
?>