<?php	session_start();				if(isset($_SESSION["name"]))				{?><center>	<h1>Welcome <?php echo $_SESSION["name"]; ?></h1>	<a href="profile.php">Profile</a>	<br/>	<a href="change_password.php">Change Password</a>	<br/>	<a href="view_users.php">View Users</a>	<br/>	<a href="logout.php">Logout</a></center><?php 			}		else		{			header("Location:login.php");		}									?>