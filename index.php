<?php

session_start();
// print_r($_SESSION);

if(isset($_SESSION["user_id"]))
{
  $mysqli = require __DIR__ . "/database.php";
  $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
  $result = $mysqli->query($sql);
  $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #2980b9, #2c3e50);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 400px;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            position: relative;
            text-align: center;
        }

        .container:before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            background-color: #fff;
            z-index: -1;
            opacity: 0.5;
            border-radius: 10px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 32px;
        }

        p {
            margin-bottom: 20px;
            font-size: 18px;
            color: #555;
        }

        a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #1abc9c;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Home Page</h1>

        <?php if(isset($user)): ?>
        <p>Hello, <strong><?= htmlspecialchars($user["username"]); ?></strong>. You are now logged In.</p>
        <p><a href="logout.php">Logout</a></p>
        <?php else: ?>
        <p>Welcome! Please <a href="login.php">Login</a> or <a href="signup.php">SignUp</a></p>
        <?php endif; ?>

    </div>
</body>

</html>
