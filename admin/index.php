<?php
	require_once('../includes/config.php');
	
	if($_POST['submitted'])
	{
		
		//print_r($_POST);
		
		//format user input
		$user = trim($_POST['user']);
		$pass = trim($_POST['pass']);
		
		if(get_magic_quotes_gpc())
		{
			$user = stripslashes(user);
			$pass = stripslashes(pass);
		}
		
		$sql = "SELECT * FROM admins WHERE username='$user'";
		$myData = $db->query($sql);
		$row = $myData->fetch_assoc();
		
		
		print_r($row);exit;
		
		if($row['username'] == $user && $row['password'] == $pass)
		{
		//header('Location: update.php');	
		echo 'it worked';
		print_r($row);
		
		}
		else
			{
				echo 'Sorry, login info incorrect';
			}
		}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Form</title>
</head>

<body>
<h1>Login</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <fieldset>
    <legend>Please login</legend>
    <ul>
      <li>
        <label for="user">User Name:</label>
        <input name="user" type="text" placeholder="username or email"/>
      </li>
      <li>
        <label for="pass">Password:</label>
        <input name="pass" type="text" placeholder="password"/>
      </li>
      <li>
        <input name="submitted" type="submit" value="Login Now"/>
      </li>
    </ul>
  </fieldset>
</form>
</body>
</html>