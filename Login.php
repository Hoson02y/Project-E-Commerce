

<?php

include_once 'DBconn.php'; 

if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "<script>alert('One or more inputs are empty');</script>";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password']; 

        $login = $conn->query("SELECT * FROM customers WHERE email = '$email'");
        $login->execute();

        $fetch = $login->fetch(PDO::FETCH_ASSOC);

        if($login->rowCount() > 0) {

            if(password_verify($password,$fetch['password'])){
              $_session['username'] =$fetch['username'];
              $_session['user_id'] =$fetch['id'];

              header("location:index.php");
            }else {
                echo "<script>atert('email or password are wrong');</script>";
            }
            } else {
                echo "<script>atert('email or password are wrong');</script>";

            } 
        

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<form action="" method="post"> <!-- The action should point to the PHP script, if separate -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" name="submit" value="Login">
</form>

</body>
</html>
