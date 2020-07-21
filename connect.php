<html>
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'api_round');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
session_start();
      // username and password sent from form 
      $myusername =$_POST["username"];
      $mypassword = md5($_POST["password"]); 
      $sql = "SELECT username FROM test WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
?>
</html>