<?php
$db_server = "localhost";
$db_username = "citinter_user";
$db_password = "user11";
$db_database = "citinter_workshop_db";
$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>