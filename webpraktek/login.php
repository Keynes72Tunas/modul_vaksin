<html>

<head>
    <title>LOGIN</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            height: 600px;
            align-items: center;
            background-image: url(5549155.jpg);
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }

        .login {

            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(100px);
            width: 340px;
            text-align: center;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .login h2 {
            margin: 0 0 20px;
            width: 100%;
            margin-bottom: 25px;
        }
        .login .inputbox {
            position: relative;
            width: 100%;
            margin-bottom: 25px;
        }
        .login .inputbox input{
            height: 30px;
            width: 100%;
            padding: 0 20px;
            box-sizing: border-box;
            font-size: 18px;
            border:  black;
            border-radius: 10px;
            background-color: rgba(189, 189, 189, 0.7 );
            outline: none;
        }
        .login .inputbox #btn {
            position: relative;
            border: none;
            outline: none;
            background: cyan;
            font-size: 1.05em;
            font-weight: 500;
            transition: 0.5s;
            cursor: pointer;
        }
        .login .group {
            margin-top: 30px;
            display: center;
            justify-content: space-between;
        }
        .login .group a {
            font-size: 0.8em;
            color: black;
            font-weight: 500;
            text-decoration: none;
        }
    </style>
</head>
<form class="login" action="cek_login.php" method="POST">
    <h2>Sign In</h2>
    <div class="inputbox">
        <input type="text" name="usernama" placeholder="username">
    </div>
    <div class="inputbox">
        <input class="text" name="password" placeholder="password">
    </div>
    <div class="inputbox">
        <input type="submit" value="Login" id="btn">
    </div>
    <div class="group">
        <a href="tambah_user.php">Sign Up</a>
    </div>
</form>

</html>