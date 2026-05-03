<?php
include 'DBConn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    mysqli_query($conn,"INSERT INTO cart(product_id) VALUES($id)");

    echo "Added to cart";
}
?>