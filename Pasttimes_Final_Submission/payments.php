<?php
include 'DBConn.php';

$result = mysqli_query($conn,"SELECT * FROM payments");
?>

<div class="header"><h2>My Payment Methods</h2></div>

<div class="container">
<?php include 'sidebar.php'; ?>

<div class="content">

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<div class="card">
    <strong><?php echo $row['card_type']; ?></strong><br>
    Card: **** **** **** <?php echo substr($row['card_number'], -4); ?><br>
    Name: <?php echo $row['name_on_card']; ?><br>
    Expiry: <?php echo $row['expiry']; ?>
</div>
<?php } ?>

<button>Add Payment Method</button>

</div>
</div>