<?php

$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "keeper";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$selectRes = mysqli_query($connection,"SELECT * FROM keep_test");
    ?>
	<style>
	table#table1 {
    width:70%; 
    margin-left:15%; 
    margin-right:15%;
  }
	</style>
<table id="table1" border="2" style="background-color:#46C2FF;color:red;font-weight:bolder;">
  <thead>
    <tr>
      <th>Website_url</th>
      <th>UserName</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="3">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['website_url']}</td><td>{$row['username']}</td><td>{$row['password']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
<div class="container signin" style="background-color: #f1f1f1; text-align: center;font-weight:bolder">
    <p><a href="http://localhost/welcome.php">Add More!!</a>.</p>
  </div>
    <?php
?>