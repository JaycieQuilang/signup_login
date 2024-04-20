<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f9f9f9;
            outline: none;
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: #b3b3b3;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #333;
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
    <div class="container">
        <h1>Create an Account</h1>
        <form action="process_signup.php" method="POST" novalidate>
            <input autocomplete="off" type="text" placeholder="Username" name="username">
            <input autocomplete="off" type="email" placeholder="Email Address" name="email">
            <input autocomplete="off" type="password" placeholder="Create a Password" id="password" name="password">
            <input autocomplete="off" type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password">
            <button>Sign Up</button>
            <div class="signup-link">Already have an account? <a href="login.php">Log in</a></div>
        </form>
    </div>
</body>

</html>
