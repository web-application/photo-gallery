<?php
/**
 *  Created by olgaoskina
 *  05 April 2015
 */
require "connect.php";

$dbLink->query("CREATE TABLE users (
      username VARCHAR(20),
      password VARCHAR(10),
      email TINYTEXT
    ) DEFAULT CHARSET=utf8;");
?>
