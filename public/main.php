<?php
$judul="Main Page";
session_start();

include "../includes/header.php";

if(!isset($_SESSION['username'])){
    header('location: login.php');
}
?>

<h1>Selamat Datang dihalaman utama</h1>

<?php 

include "../includes/footer.php"; 
?>