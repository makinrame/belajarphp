<html>
<head>
	<title> My first Project in PHP </title>
</head>

<body>
<h1> Registration page</h1><br/>
<a href="index.php">click here to go back</a><br/><br/>
	<form action="register.php" method="post">
		Enter Username : <input type="text" name="username" required="required"/><br/>
		Enter Password : <input type="text" name="username" required="required"><br/>
		<input type="submit" value="register"/>
</form>
</body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"]== "POST") {
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$bool = true;

	mysql_connect("local host","root","") or die(mysql_error());// connect to server
	mysql_select_db("first_db") or die ("cannot connect to database"); // connect to database
	$query = mysql_query(" Select * from users"); //query the users table
	while($row = mysql_fetch_array($query))// display all row from query
	{
		$table_user = $row["username"];//the first username row is passed on to $table_users, and so on until the query
		if(username==$table_user)//mencocokan username dari di databse agar 1 username tidak sama dengan yg lain
		{
			$bool = false;
			Print '<script>alert("Username telah dipakai");</script>'; //memperingati user
			Print '<script>window.location.assign("register.php");</script>'; // mengarahkan ke register.php

		}
	}

	if($bool)// check bila bool true
	{
		mysql_query("INSERT INTO users(username,password) VALUES ('$username','$password')");// memasukan Value ke tabel user
		Print '<script>alert("pendaftaran berhasil coy");</script>';
		Print '<script>window.location.assign("register.php");</script>';
	}



}
