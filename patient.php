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
			padding-left: 50px;
		}
		h1{
			padding-top: 70px;
			padding-left: 100px;
		}
		input{
			width: 400px;
		}
	</style>
</head>
<body>
<center>
	<h1>PATIENT INFO</h1>
	<form method="POST" action="patie.php">	
		
				<th><b>Firstname:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="firstname" placeholder="enter firstname"><br><br>
				<th><b>Lastname:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="lastname" placeholder="enter lastname"><br><br>
				<th><b>National Id:</b></th>&nbsp&nbsp&nbsp <input type="number" name="nationalid" placeholder="enter nationalid"><br><br>
				<th><b>Age:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="number" name="age" placeholder="enter age"><br><br>
				<th><b>Gender:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="gender" placeholder="enter gender"><br><br>
				<th><b>District:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="district" placeholder="enter district"><br><br>
				<th><b>Date:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="date" name="date" placeholder="enter date"><br><br>
				<th><b>Result:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="result" placeholder="enter result"><br><br>
				<button type="submit">Submit</button>
				
	

	</form>
</center>
</body>
</html>