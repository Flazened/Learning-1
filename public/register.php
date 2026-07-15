<?php
$judul = "Register";
include "includes/header.php";

?>
<body>
    <h1>Register</h1>
    <form action="includes/register.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Register">
    </form>
</body>