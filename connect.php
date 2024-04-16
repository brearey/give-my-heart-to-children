<?php
session_start();
require 'rb-mysql.php';
R::setup( 'mysql:host=localhost;dbname=YOUR_DB_NAME', 'YOUR_LOGIN', 'YOUR_PASSWORD' );
?>