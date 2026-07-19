<?php
$judul = "Register";
include "../config/database.php";
include "../includes/header.php";
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql= "INSERT INTO users (username, name, email, password) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute([$username, $name, $email, $password]);
}

?>
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