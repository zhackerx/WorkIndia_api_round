<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keeper";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$website_url=$_POST["website_url"];
$username=$_POST["username"];
$password=$_POST["password"];
$sql="insert into keep_test(username,password,website_url) VALUES ('$username','$password','$website_url')";
    
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully\n";
  echo "<a href='http://localhost/welcome.php' target='_blank'>Click here to add more!!</a>\n\n\n";
  echo "<a href='http://localhost/check1.php' target='_blank'>Click here to see the list!!</a>\n\n\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<body>
<style>
a{
	color:black;
	font-weight:bolder;
	 padding: 14px 25px;
  text-align: center;
  display: inline-block;
}
</style>
</body>
<html>