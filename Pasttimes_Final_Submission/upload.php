<?php
include 'DBConn.php';

if(isset($_POST['add'])){
    $n=$_POST['name'];
    $p=$_POST['price'];
    $d=$_POST['desc'];

    mysqli_query($conn,"INSERT INTO products(name,price,description)
    VALUES('$n','$p','$d')");

    echo "Product Added";
}
?>

<form method="POST">
<input name="name" placeholder="Item Name">
<input name="price" placeholder="Price">
<textarea name="desc"></textarea>
<button name="add">Upload</button>
</form>