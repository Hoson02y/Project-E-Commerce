<?php
session_start();
//session_destroy();

if(isset($_POST['addCart'])){
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_quantity = $_POST['Pquantity'];
    $_SESSION['cart'][] = array(
        'productName' => $product_name,
        'productPrice' => $product_price,
        'productQuantity' => $product_quantity
    );
    print_r($_SESSION['cart']);
}
?>
