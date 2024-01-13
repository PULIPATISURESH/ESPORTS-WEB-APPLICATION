<?php
 $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "sport"; 
	
	$message = "Register successful";
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 $Name = $_POST['UserName'];

     $MobileNumber = $_POST['MobileNumber'];

     $Email = $_POST['Email'];
     $password = $_POST['Password'];

     $sql = "INSERT INTO sign( email,mobilenumber,password,username) VALUES('$Email','$MobileNumber','$password','$Name')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='userindex.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
