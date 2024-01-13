
<!DOCTYPE html>
<html>

<head>
 
    <title>cricky | Login Page</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back" style="background-color:#B1E5FD;">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                <img src="images/logo1.png" alt="">
              <h3>Welcome</h3>
              <p>Login to your Account</p>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                   
                    <div class="panel-body">
                        <form action="loginbk.php" role="form" method="post" name="login">
                            <fieldset>
                                <div class="form-group">
                                    <label for="login-username">Email</label>
                                     <input type="text" class="form-control"  required="true" name="email" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>">
                                                
                                </div>
                                <div class="form-group">
                                    <label for="login-password">Password</label>
                                    <input type="password" class="form-control" name="password" required="true" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
                                                
                                </div>
                                <div class="checkbox">
                                  
                                
                                   

<label style="padding-left: 0px">
    <a href="forgot-password.php">Forgot Password?</a></label>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                               
                                <input type="submit" value="Login" style="background-color:#B1E5FD;"  class="btn btn-lg btn-success btn-block"  >
                            </fieldset>
                        </form>
                        <div>
                        <p><a href="signup.php"> Signup Here </a></p>
                    <i class="fa fa-home" style="font-size: 30px" aria-hidden="true"></i>
                    <p><a href="../index.php"> Back Home </a></p>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
