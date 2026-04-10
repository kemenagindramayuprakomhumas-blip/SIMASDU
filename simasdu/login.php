<?php 
include("php/config.php");
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Kepuasan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url(asset/lp.png);
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

    
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            margin-top: 40px;
            text-align: center;
            color: white;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        }

        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 16px;
        }

        .container input::placeholder {
            color: #ddd;
        }

        .container button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background-color: #27ae60;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #1e8449;
        }
    </style>
</head>
<body>
    

    <div class="container">
        <h1>Login</h1>
        <form action="php/proses_login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>

</body>
</html>
