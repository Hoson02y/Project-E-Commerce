<?php

include_once 'DBconn.php';

if (isset($_POST['submit'])) { // Corrected the typo here

    // Check that all required fields are filled in
    if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password'])) {
        echo "<script>alert('Some inputs are empty');</script>";
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt the password

        $insert = $conn->prepare("INSERT INTO customers (username, email, phone, password) 
        VALUES (:username, :email, :phone, :password)");

        $insert->execute([
            ":username" => $username,
            ":email" => $email,
            ":phone" => $phone,
            ":password" => $password,
        ]);

        header("Location: Login.php");
        exit(); // Important to prevent further script execution
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>

<form action="" method="post"> 
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" name="submit" value="Register">
</form>

</body>
</html>
