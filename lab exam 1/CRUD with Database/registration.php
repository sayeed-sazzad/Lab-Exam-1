<?php		error_reporting(0);		$con = mysqli_connect("localhost","root","","test");		if(isset($_POST["submit"]))	{		$name = $_POST["name"];		$id = $_POST["id"];		$pass = $_POST["pass"];		$password = $_POST["password"];		$user = $_POST["user"];		//$admin = $_POST["admin"];						if(isset($name) && isset($id) && isset($pass) && isset($password) && (isset($user) || isset($admin)))		{			if($pass!=$password)			{				echo "<h3>Password not matched</h3> <br>";			}			else if(strlen($password)<5)			{				echo "<h3>Password must be at least 5 character</h3> <br>";							}						if($password==$pass && strlen($password)>=5 )			{				$sql = "insert into user values('".$id."','".$name."','".$password."','".$user."')";				$query = mysqli_query($con,$sql);								if($query)				{					echo "<h1>Data inserted successfully</h1>";				}				else{										echo "failed";				}							}					}		else		{			echo "<h2>Please fill up the all information properly</h2>";		}				mysqli_close($con);			}?><center><form method="post" action="">	<table border="0" cellspacing="0" cellpadding="0">		<tr>			<td>				<fieldset>					<legend><h3>REGISTRATION</h3></legend>					Id<br/><input type="text" name="id"><br/>					Password<br/><input type="password" name="pass"><br/>					Confirm Password<br/><input type="password" name="password"><br/>					Name<br/><input type="text" name="name"><br/>					User Type<hr/>					<input type="radio" value="User" name="user" />User					<input type="radio" value="Admin" name="user" />Admin					<hr/>					<input type="submit" name="submit" value="Sign Up">					<a href="login.php">Sign In</a>				</fieldset>			</td>		</tr>                                	</table></form></center>		