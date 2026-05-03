<?php session_start(); ?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<a href="products.php">Shop</a>
<a href="upload.php">Sell Item</a>
<a href="logout.php">Logout</a>