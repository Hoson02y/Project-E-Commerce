<?php
define("HOST", "localhost");
define("DBNAME", "Electronic_store");
define("USER", "root");
define("PASS", "");

try {
    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection is a success";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
