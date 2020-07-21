<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "api_round";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=md5($_POST["password"]);
$sql="insert into test(first_name,last_name,email,username,password) VALUES ('$first_name', '$last_name', '$email','$username','$password')";
    
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>