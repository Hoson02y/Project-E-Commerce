

<?php

include_once 'DBconn.php';

if (isset($_POST['submit'])) { // Corrected the typo here

    // Check that all required fields are filled in
    if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['phone']) ||  empty($_POST['location'])||empty($_POST['password'])) {
        echo "<script>alert('Some inputs are empty');</script>";
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt the password

        $insert = $conn->prepare("INSERT INTO suppliers (username, email, phone, location, password) 
        VALUES (:username, :email, :phone, :location, :password)");

        $insert->execute([
            ":username" => $username,
            ":email" => $email,
            ":phone" => $phone,
            ":password" => $password,
            ":location" => $location,

        ]);

        header("Location: Login.php");
        exit(); // Important to prevent further script execution
    }
}

?>