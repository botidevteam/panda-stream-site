<?php 
 session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>User settings in panda-stream</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>User Settings</h2>
  </div>
    
  <form method="post">
  	<div class="input-group">
  		<label>Twitch Username</label>
  		<input type="text" name="tlogin">
  	</div>
  	  	<div class="input-group">
  		<label>Twitch Message on start</label>
  		<input type="text" name="t_stream_message">
  	</div>
  	  	<div class="input-group">
  		<label>Delete message on end stream</label>
  		 <select>
    <div class="custom-select" style="width:200px;" class="option_s">
    <option value="0">Select option:</option>
    <option value="1">Yes</option>
    <option value="2">No</option>
</select>
</div>
   <button type="submit" class="btn" name="save changes!">Save</button>
</div>


 
  </form>
</body>
</html>