<?php
$judul = "Login";
include "../config/database.php";
include "../includes/header.php";
include "../includes/footer.php";


if(isset($_POST['username'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
} else {
    echo "Username dan Password tidak ditemukan";
}


?>


    <form method="POST">
        <label>Username</label>
        <input name="username" type="text"><br>

        <label>Password</label>
        <input name="password" type="password"><br>
        <button>Kirim</button>
    </form>

