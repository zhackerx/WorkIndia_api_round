<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Password Manager</title>
      <link rel="stylesheet" href="style1.css">
   </head>
   
   <body>
      <h1 style="text-align:right">Welcome <?php echo $login_session; ?></h1> 
      <h2 style="text-align:right"><a href = "logout.php">Sign Out</a></h2>
	  <div class="wrap">
	  <h2>Add New Site!!</h2>
	  <form method="post" action="connect2.php">
<input type="text" name="website_url" value="Website URL" placeholder="Website_url.." required>
<input type="text" name="username" value="UserName" placeholder="Username.." required>
<input type="password" name="password" value="Password" placeholder="Password.." required>
<input type="submit" name="submit" value="Submit" onclick="connect2.php">
<div class="container signin" style="background-color: #f1f1f1; text-align: center;font-weight:bolder">
    <p>Wanna Check Saved!!        <a href="http://localhost/check1.php">Click Me!!</a>.</p>
  </div>
</form>
</div>
   </body>
</html>
