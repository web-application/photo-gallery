<?php
/**
 *  Created by olgaoskina
 *  05 April 2015
 */

$DB_DATABASE = 'database_photoGallery';
$DB_SERVER = 'localhost';
$DB_USERNAME = 'olgaoskina';
$DB_PASSWORD = 'password';

$dbLink = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD);
mysqli_select_db($dbLink, $DB_DATABASE);

?>