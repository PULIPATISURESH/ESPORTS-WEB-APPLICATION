<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #B1E5FD;
        }

        .container {
            text-align: center;
            margin-top: 20px;
        }

        .user-info {
            display: inline-block;
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        .home-link {
            margin-left: -280px;
            margin-bottom: 10px;
        }

        .profile-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .icon {
            font-size: 20px;
            margin-left: -180px;
            margin-right: 5px;
        }
        .icon1 {
        
            margin-left: -180px;
            margin-right: 5px;
        }

        .content1{
            font-size: 16px;
            margin-left: -150px;
            
        }
        .content2 {
            font-size: 16px;
            margin-left: -70px;
            
        }
        .content3 {
            font-size: 16px;
            margin-left: -120px;
            
        }
        hr {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    
<body class="body-Login-back" style="background-color:#B1E5FD;">
    
        <div style="text-align: center;">
            <div style="display: inline-block; background-color: #f0f0f0; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); width: 300px;">
            <a href="main.php">
            <img src="images/home.png" alt="Home" style="width: 20px; height: 20px; border-radius: 50%; margin-bottom: 10px; margin-left: -280px ;">
            </a>    
                <div style="text-align: center;">
                    <img src="images/suresh.png" alt="Profile" style="width: 80px; height: 80px; border-radius: 50%;">
                </div>
                <h2><?php echo $_SESSION['username'] ?></h2>
                <h4>#Keep Beliving</h4>
                <h4 class="icon1" >MY PROFILE</h4>

                <p>
                <span class="icon">&#128100;</span> <strong>Name:</strong><br>
            <span class="content1"><?php echo $_SESSION['username'] ?></span>
            <hr>

            <span class="icon">&#9993;</span> <strong>Email:</strong><br>
            <span class="content2"><?php echo $_SESSION['email'] ?></span>
            <hr>

            <span class="icon">&#9742;</span> <strong>Mobile:</strong><br>
            <span class="content3"><?php echo $_SESSION['mobilenumber'] ?></span>
            <hr>
        </p>
               
            </div>
        </div>
   
    



       


</body>
</html> 

