<?php
$judul = "Register";
include "../config/database.php";
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash ($password, PASSWORD_DEFAULT);
    $sql= "INSERT INTO users (username, name, email, password) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute([$username, $name, $email, $password]);
    header('location: index.php');
}

include "../includes/header.php";

?>
    <form method="POST">
        <label>Username</label>
        <input name="username" type="text"><br>

        <label>Name</label>
        <input name="name" type="text"><br>

        <label>Email</label>
        <input name="email" type="email"><br>

        <label>Password</label>
        <input name="password" type="password"><br>

        <button>Kirim</button>
    </form>
<?php
include "../includes/footer.php";
?>