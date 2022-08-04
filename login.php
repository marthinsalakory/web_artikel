<?php

include 'function.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Artikel Login</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url(assets/img/bg-login.jpg);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .card-login {
            height: 50%;
            width: 30%;
            /* border: 3px solid black; */
        }

        .login-title {
            text-align: center;
            color: blue;
            font-size: 40px;
            margin: 0;
        }

        .form-group {
            margin: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 20px;
        }

        .form-group input {
            display: inline-block;
            width: 100%;
            border: 2px solid blue;
            padding: 10px 5px;
        }

        .form-group input:focus {
            outline-color: red;
        }

        .form-group button {
            background-color: blue;
            color: #fff;
            border: 0;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .form-group button:hover {
            background-color: red;
            cursor: pointer;
        }

        div form .form-group:last-child {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="card-login">
        <h3 class="login-title">LOGIN</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input required autocomplete="off" type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input required autocomplete="off" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <button name="login" type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>