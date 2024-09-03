<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		button{
			background-color: green;
			color: white;
			border-style: none;
			border-radius: 4px;
			padding-left: px;
		}
		a{
			text-decoration: none;
			color: white;
		}
		body{
			background-color: ghostwhite;

		}
		form{
			padding-top: 5px;
		}
		h1{
			padding-top: 100px;
		}
		input{
			border-radius: 4px;
			border-style: none;
			background-color: lightgray;
		}
	
	</style>
</head>
<body>
<center>	

<h1>SIGN IN</h1>
<form method="POST" action="signup.php">	
<table>
	<tr>
		<p><b>username</b>&nbsp&nbsp<input type="text" name="username" placeholder="create username"></p>
		<p><b>password</b>&nbsp&nbsp<input type="password" name="password" placeholder="create password"></p>
		<button type="submit">sign in</button>
	</tr>
</table>
</form>
</center>
</body>
</html>