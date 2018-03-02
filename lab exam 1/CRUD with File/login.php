<?php

	session_start();
	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$password=$_POST["password"];
		
		if(!(empty($name)) && !(empty($password)))
		{
			$myfile = fopen("registratio.txt","r+");
			
			while(!feof($myfile))
			{
				$file = fgets($myfile);
				$reg = explode(',',$file);
				
				if($reg[1]==$name && $reg[2]==$password)
				{
					if($reg[3]=="user")
					{
						header("Location:user_home.html");
					}
					
					else{
						
						header("Location:admin_home.html");
					}
				}
				else{
					echo "false";
				}
				
				
				
			}
		}
		else
		{
			echo "Please fill properly the given form";
		}
	}
	



?>








<center>
<form action="" method="post">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input name="name" type="text"><br/>                               
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