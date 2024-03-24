<?php

include_once 'DBconn.php';

if (isset($_POST['submit'])) {

    if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['location']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
        echo "<script>alert('Some inputs are empty');</script>";
    } else if ($_POST['password'] !== $_POST['confirm_password']) {
        // Check if the passwords match
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt the password

        $insert = $conn->prepare("INSERT INTO suppliers (username, email, phone, location, password) VALUES (:username, :email, :phone, :location, :password)");

        $insert->execute([
            ":username" => $username,
            ":email" => $email,
            ":phone" => $phone,
            ":location" => $location,
            ":password" => $password,
        ]);

        header("Location: Login.php");
        exit(); 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Registration</title>
</head>
<body>
    <h2>Supplier Registration Form</h2>
    <form action="Registration_CompanySupplier.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" required><br>
        
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
