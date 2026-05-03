<?php
session_start();
include 'DBConn.php';

$message = "";

if(isset($_POST['login'])){
    $e = mysqli_real_escape_string($conn, $_POST['email']);
    $p = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM tblUser WHERE email='$e'");

    if(mysqli_num_rows($query) > 0){
        $user = mysqli_fetch_assoc($query);

        if(password_verify($p, $user['password'])){
            $_SESSION['user'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            $message = "Incorrect password!";
        }
    } else {
        $message = "User not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .login{
            position: fixed;
            top:25%;
            left:35%;
            display: flex;
            justify-content: center;
            align-items:center;
            background-color: darkgray;
            padding: 35px;
        }
        .login input{
            display: block;
            border-radius: 15px 50px;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        body{font-family:Arial; display:flex; justify-content:center; align-items:center; height:100vh;}
        form{display:flex; flex-direction:column; gap:10px;}
        input, button{padding:10px;}
        button{background:blue; color:white; border:none;}
    </style>
</head>
<body>
<div> class="login">
    <form method="POST">
     <h2>Login</h2>
        <p style="color:red;"><?php echo $message; ?></p>

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
    
        <button name="login">Login</button>
        <p>Don't Register Yet!
        <a href="register.php">Create account</a></p>
    </form>
</div>

</body>
</html>