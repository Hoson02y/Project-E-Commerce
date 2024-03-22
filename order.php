<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $number = !empty($_POST['number']) ? trim($_POST['number']) : null;
    $address = !empty($_POST['address']) ? trim($_POST['address']) : null;


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    echo "Thank you for your submission. Name: $name, Email: $email, Number: $number, Address: $address";
}
?>