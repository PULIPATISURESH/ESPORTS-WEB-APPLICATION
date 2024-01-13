<?php
session_start();
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "sport";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $newpassword = $_POST["newpassword"];
    $confirm_password = $_POST["confirm_password"];
    $username = $_POST["username"];

    // Check if the new password and confirm password match
    if ($newpassword === $confirm_password) {
        // Passwords match, proceed to save the new password

        // Create connection
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE sign SET password='$newpassword', username='$username' WHERE email='$email'";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // Password updated successfully
            header("Location: userindex.php");
            exit();
        } else {
            // Error updating password
            echo "Error updating password: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        // New password and confirm password do not match
        echo "New Password and Confirm Password do not match.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>cricky | Forgot Password Page</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script type="text/javascript">
        function valid() {
            if (document.chngpwd.newpassword.value != document.chngpwd.confirm_password.value) {
                alert("New Password and Confirm Password do not match!!");
                document.chngpwd.confirm_password.focus();
                return false;
            }
            return true;
        }
    </script>
</head>

<body class="body-Login-back" style="background-color: #B1E5FD;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                <strong style="font-size: 25px">Forget Password</strong>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <form role="form" method="post" name="chngpwd" onSubmit="return valid();">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-Mail" name="email" required="true" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" required="true" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="New Password" name="newpassword" required="true">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Confirm Password" name="confirm_password" required="true">
                                </div>
                                
                                <input type="submit" value="Save" style="background-color:#B1E5FD;" class="btn btn-lg btn-success btn-block" name="submit">
                            </fieldset>
                        </form>
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
