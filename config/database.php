<?php
$host = "localhost";
$dbname = "learning_1";
$user = "flaze";
$password = "123";

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>