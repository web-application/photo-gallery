<?php
/**
 *  Created by olgaoskina
 *  06 April 2015
 */

session_start();

require_once "admin/connect.php";

if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if (empty($username) or empty($password)) {
    exit ("
    <html>
        <header>
            <meta charset='UTF-8' content=\"text/html\"/>
        </header>
        <body>
            <div align='center'>
                <h3>Вы ввели не всю информацию, вернитесь назад и заполните все поля!</h3>
                    <a href='signIn.php'>
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

$query = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";
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
                <h3>Неверная пара логин-пароль</h3>
                <a href='index.php'>
                    <b>Назад</b>
                </a>
                </h3>
            </div>
        </body>
    </html>");
}
?>