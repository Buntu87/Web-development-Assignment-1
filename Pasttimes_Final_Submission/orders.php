<?php
session_start();
include 'DBConn.php';

$user_id = 1; // simplify

$result = mysqli_query($conn,"SELECT * FROM orders");
?>

<div class="header"><h2>My Orders</h2></div>

<div class="container">
<?php include 'sidebar.php'; ?>

<div class="content">
<table border="1" width="100%">
<tr>
<th>Order #</th>
<th>Date</th>
<th>Status</th>
<th>Total</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $row['order_number']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['status']; ?></td>
<td>R<?php echo $row['total']; ?></td>
</tr>
<?php } ?>

</table>
</div>
</div>