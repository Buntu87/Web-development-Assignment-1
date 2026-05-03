<?php
include 'DBConn.php';

$res=mysqli_query($conn,"SELECT * FROM products");

while($row=mysqli_fetch_assoc($res)){
    echo "<div>";
    echo $row['name']." - R".$row['price'];
    echo "<a href='cart.php?id=".$row['id']."'> Add to Cart</a>";
    echo "</div>";
}
?>