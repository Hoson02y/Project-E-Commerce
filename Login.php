<?php
session_start(); 

include_once 'DBconn.php'; 

if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmtCustomer = $conn->prepare("SELECT * FROM customers WHERE email = :email");
        $stmtSupplier = $conn->prepare("SELECT * FROM suppliers WHERE email = :email");

        $stmtCustomer->bindParam(':email', $email);
        $stmtSupplier->bindParam(':email', $email);

        $stmtCustomer->execute();
        $stmtSupplier->execute();

        $userType = null;
        $user = null;

        if ($stmtCustomer->rowCount() > 0) {
            $userType = 'customer';
            $user = $stmtCustomer->fetch(PDO::FETCH_ASSOC);
        } elseif ($stmtSupplier->rowCount() > 0) {
            $userType = 'supplier';
            $user = $stmtSupplier->fetch(PDO::FETCH_ASSOC);
        }

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_type'] = $userType; 

            
            if ($userType == 'customer') {
                header("Location: index.php"); 
            } else if ($userType == 'supplier') {
                header("Location: header.php"); 
            }
            exit();
        } else {
            echo "<script>alert('Email or password is incorrect.');</script>";
        }
    } else {
        echo "<script>alert('One or both fields are empty.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
</head>
<body>

<form action="" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
