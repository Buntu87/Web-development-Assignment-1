<?php
session_start();
include 'db.php';

$message = "";

if (isset($_POST['register'])) {
    // Get and sanitize input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    // Hash password securely
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert query
    $sql = "INSERT INTO tblUser (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        $message = "Registered Successfully";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>

<style>
.registerdiv {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    gap: 15px;
}

.shoplink {
    display: block;
    width: 100px;
    position: fixed;
    top: 25%;
    left: 45%;
    text-align: center;
    text-decoration: none;
    background-color: lightgreen;
    padding: 10px;
    border-radius: 5px;
}

.registerdiv input {
    display: block;
    padding: 16px;
    margin: 8px;
    width: 200px;
}

.registerdiv textarea {
    display: block;
    padding: 15px;
    margin: 8px;
}

button {
    padding: 10px;
    width: 220px;
    background-color: green;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: darkgreen;
}

.message {
    color: green;
}
</style>
</head>

<body>

<a class="shoplink" href="index.php">Pastimes</a>

<div class="registerdiv">
    <?php if (!empty($message)) echo "<p class='message'>$message</p>"; ?>

    <form action="register.php" method="post">
        <input name="username" placeholder="Username" required>
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit" name="register">Register</button>
    </form>
</div>

</body>
</html>