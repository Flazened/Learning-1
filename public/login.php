<?php
$judul = "Login";
include "includes/header.php";

?>
<body></body>
    <h1>Login</h1>
    <form action="includes/login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Login">
    </form>