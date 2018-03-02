<?php
	session_start();
	$con = mysqli_connect("localhost","root","","test");
	
	
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
			
			$id = $_POST["id"];
			$password = $_POST["password"];
			
		
		if(!(empty($id)) && !(empty($password)))
		{
			
			$sql = "select * from user where id='".$id."' and password = '".$password."' ";
			
			$query = mysqli_query($con,$sql);
			
			if(mysqli_num_rows($query)>0)
			{
				
				

				
				while($arr = mysqli_fetch_assoc($query))
				{
					
					
					
					if($arr['type']=="Admin")
					{
						$_SESSION["name"]=$arr['name'];
						$_SESSION["id"]=$arr['id'];
						$_SESSION["type"]=$arr['type'];
						
						header("Location:admin_home.php");
						
						
					}
					else{
						
						$_SESSION["name"]=$arr['name'];
						$_SESSION["id"]=$arr['id'];
						$_SESSION["type"]=$arr['type'];
						
						header("Location:user_home.php");
						
						echo "success";
					}
				
				}
				
			}
			
			else
			{
				echo "result not found";
			}
			
			mysqli_close($con);
			
			
		}
		
		else
		{
			echo "<h1>Please fill up the information first</h1>";
		}
		
	}
	
	


?>


<!doctype html>


<html>

	<head>
	
		<title>Login page</title>
		
		<style>
		
			
		
		
		</style>
	
	</head>

<body>
<center>
<form method="POST" action="login.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input name="id" type="text"><br/>                               
					Password<br/>
					<input name="password" type="password">
					<br /><hr/>
					<input name="submit" type="submit" value="Login">
					<a href="registration.php">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>

</body>

</html>