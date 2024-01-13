<?php
session_start();
// Check if form is submitted
// Record the start time
$start_time = microtime(true);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];
	$servername = "localhost";
    $db_username = "root";
    $db_password = "";
    //change DB name 
    $dbname = "sport"; 
	
	
// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	  
	 $sql = "SELECT * from sign where email = '$email' AND password = '$password'";  
	 


// Execute the query
$result = $conn->query($sql);

// Check if a user with the given credentials exists
if ($result->num_rows == 1) {

    // User is authenticated, set session variable to indicate login
    $_SESSION["logged_in"] = true;
    $userInfo = $result->fetch_assoc();
    $_SESSION["userid"] = $userInfo["userid"];
    $_SESSION["username"] = $userInfo["username"];
    $_SESSION["email"] = $userInfo["email"];
    $_SESSION["mobilenumber"] = $userInfo["mobilenumber"];
    // Redirect to a protected page (e.g., home.php)
    header("Location: main.php");
    exit();
    // Record the end time
$end_time = microtime(true);
// Calculate the response time
$response_time = ($end_time - $start_time) * 1000;


// Log the response time (you can adjust this based on your preferred logging method)
error_log("Login Response Time: " . $response_time . "ms");
} else {
    // Invalid credentials, show an error message
    echo "Invalid username or password.";
}

// Close the database connection
$conn->close();
}
?>