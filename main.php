<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            width:700px;
            height:200px;
            text-align:center;
        }

        .grid-card {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
        }

        .grid-card h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .grid-card p {
            font-size: 16px;
        }

        .back-to-home {
            text-align: center;
            margin-top: 20px;
        }

        .back-to-home a {
            text-decoration: none;
            background-color: #0074D9;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .back-to-home a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="body-Login-back" style="background-color:#B1E5FD;">
<body>
    <div class="grid-container">
        <a href="live.php">
        <div class="grid-card" style="text-align:center; margin:auto 0px;">
            <h2>Flash Live</h2>
            <p></p>
        </div>
        </a>
        <a href="profilebk.php">
        <div class="grid-card" style="text-align:center; margin:auto 0px;">
            <h2>Profile </h2>
            <p></p>
        </div>
        </a>
        
    </div>
    <div class="back-to-home">
        <a href="userindex.php">LOGOUT</a>
    </div>
</body>
</html>
