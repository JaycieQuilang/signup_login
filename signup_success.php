<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Success</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            max-width: 300px;
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

        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <p>You are signed up successfully. You can now <a href="login.php">Log In</a></p>
    </div>
</body>

</html>
