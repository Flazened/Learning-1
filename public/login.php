<?php
$judul = "Login";
include "../config/database.php";
include "../includes/header.php";


if(isset($_POST['username'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users where username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute ([$username]);
    
} 


?>


    <form method="POST">
        <label>Username</label>
        <input name="username" type="text"><br>

        <label>Password</label>
        <input name="password" type="password"><br>
        <button>Kirim</button>
    </form>

<?php
include "../includes/footer.php";
?>