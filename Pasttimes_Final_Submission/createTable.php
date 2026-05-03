<?php
include 'DBConn.php';

// USERS
mysqli_query($conn,"CREATE TABLE IF NOT EXISTS tblUser(
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50),
 email VARCHAR(100),
 password VARCHAR(255)
)");

// ORDERS
mysqli_query($conn,"CREATE TABLE orders(
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_id INT,
 order_number VARCHAR(50),
 date DATE,
 status VARCHAR(20),
 total DECIMAL(10,2)
)");

// PAYMENTS
mysqli_query($conn,"CREATE TABLE payments(
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_id INT,
 card_type VARCHAR(20),
 card_number VARCHAR(20),
 name_on_card VARCHAR(100),
 expiry VARCHAR(10)
)");

echo "Tables ready";
?>