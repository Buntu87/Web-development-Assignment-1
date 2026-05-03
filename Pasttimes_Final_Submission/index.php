<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastimes</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, sans-serif;
        }

        .header{
            position: fixed;
            top: 0;
            width: 100%;
            background-color: gray;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            z-index: 1000;
        }

        .logo{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img{
            height: 40px;
        }

        .header a{
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        nav ul{
            display: flex;
            list-style: none;
        }

        nav li{
            margin-left: 30px;
        }

        nav a:hover{
            color: lightblue;
        }

        /* Content spacing */
        .content{
            margin-top: 120px;
            text-align: center;
            padding: 20px;
        }

        /* IMAGE GRID */
        .image-grid{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 30px;
        }

        .img-box img{
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Mobile responsiveness */
        @media (max-width: 900px){
            .image-grid{
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px){
            .header{
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul{
                flex-direction: column;
                width: 100%;
                margin-top: 10px;
            }

            nav li{
                margin: 10px 0;
            }

            .image-grid{
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header class="header">
    <div class="logo">
        <a href="index.php">Pastimes</a>
        <img src="images/logo.png" alt="Logo">
    </div>

    <nav>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="products.php">Shop</a></li>
        </ul>
    </nav>
</header>

<div class="content">
    <h1>Pastimes Store</h1>

    <!-- 4 IMAGE SECTION -->
    <div class="image-grid">
        <div class="img-box"><img src="images/img1.jpg" alt=""></div>
        <div class="img-box"><img src="images/img2.jpg" alt=""></div>
        <div class="img-box"><img src="images/img3.jpg" alt=""></div>
        <div class="img-box"><img src="images/img4.jpg" alt=""></div>
    </div>
</div>

</body>
</html>