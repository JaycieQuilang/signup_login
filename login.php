<?php
$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST")
{
  $mysqli = require __DIR__ . "/database.php";
  $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST["email"]));
  $result = $mysqli->query($sql);
  $user = $result->fetch_assoc();

  if($user)
  {
    if(password_verify($_POST["password"], $user["password_hash"]))
    {
      session_start();
      session_regenerate_id();
      $_SESSION["user_id"] = $user["id"];
      header("Location: index.php");
      exit;
    }
  }
  $is_invalid = true;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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

        .login-container {
            position: relative;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-container:before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            background-color: #fff;
            z-index: -1;
            opacity: 0.5;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 32px;
        }

        input[type="email"],
        input[type="password"],
        button {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #f9f9f9;
            font-size: 16px;
            outline: none;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            background-color: #e0e0e0;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }

        p.error-message {
            color: #dc3545;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 0;
            font-size: 16px;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        .signup-link a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .signup-link a:hover {
            color: #1abc9c;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>

        <?php if ($is_invalid) : ?>
            <p class="error-message">Invalid email or password</p>
        <?php endif; ?>

        <form method="post">
            <input autocomplete="off" type="email" placeholder="Email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            <input autocomplete="off" type="password" placeholder="Password" name="password" id="password">
            <button type="submit">Login</button>
            <div class="signup-link">
                <p>Don't have an account? <a href="signup.php">Sign up</a></p>
            </div>
        </form>
    </div>
</body>

</html>
