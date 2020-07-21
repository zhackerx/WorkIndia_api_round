<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="login-box">
  <h1>Login</h1>
  <form method="POST" action="connect.php">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password">
  </div>

  <input type="submit" class="btn" value="Sign in" >
  <div class="container signin" style="background-color: #f1f1f1; text-align: center;font-weight:bolder">
    <p>Create Account Now!!	<a href="http://localhost/signup.html">Register</a>.</p>
  </div>
  </form>
</div>
  </body>
</html>
<?php><?>