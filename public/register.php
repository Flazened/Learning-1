<?php
$judul = "Register";
include "../config/database.php";
include "../includes/header.php";
$username = $_POST['username'];

?>
    <h1>Register</h1>
    <form method="POST">
        <label>Username</label>
        <input name="username" type="text"><br>

        <label>Name</label>
        <input name="name" type="text"><br>

        <label>Gmail</label>
        <input name="email" type="text"><br>

        <label>Password</label>
        <input name="password" type="password"><br>

        <button>Kirim</button>
    </form>
<?php
include "../includes/footer.php";
?>