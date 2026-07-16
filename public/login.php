<?php
$judul = "Login";
$nama = "username";
$password = "password";
include "includes/header.php";

if(isset($_POST['username'])){
    $nama = $_POST["username"];
    $password = $_POST["password"];
}


?>
<body>
    <form method="POST">
        <input name="username" type="text">
        <input name="password" type="password">
        <button>Kirim</button>
    </form>
</body>
