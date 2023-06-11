<?php
session_start();
if(empty($_SESSION['usernama'])){
  header("location:login.php");
}

include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Vaksin</title>
    <style>
        * {box-sizing: border-box;}

        html, body {
            height: 100;
        }

        @keyframes pan {
            100% { background-position: 15% 50%;}
        }

        body {
            display: grid;
            place-items: center;
            margin: 0;
            padding: 0 24px;
            background-color: cyan;
            background-image: url(5549155.jpg);
            background-size: cover;
        }

        @media (widht >= 500px) {
            body {
                padding: 0;
            }
        }

        .container {
            position: relative;
            padding: 40px;
            width: 670px;
            margin-top: 60px;
            height: 500px;
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.4);
            text-align: center;
            
        }

        @media (widht >= 500px) {
            .container {
                margin: 0;
                width: 400px;
            }
        }

        .container > h2 {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            margin: 10 0 12px;
            font-size: 50px;
            font-weight: 600;
        }


        hr {
            width: 100%;
            border-width: 3px;
            border: none;
            border-top: 3px solid black;
            padding: 30px;
            margin: px;
            padding-top: 50px;
        }
        a {
            cursor: pointerx;
        }

        @keyframes pan {
            100% { background-position: 15% 50%;}
        }

        a {
            border: 20px
            padding;
            background-color: black;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .button {
            width: 500px;
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Selamat Datang</h2>
        <h2><?php echo $_SESSION['nama'];?></h2>
        <hr>
       <a href="index.php" class="button">Silahkan Masuk</a>
       
    </div>
    
</body>
</html>
