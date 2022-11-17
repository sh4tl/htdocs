<?php
	
	include "db.php";
	include "lib.php";


	error_reporting(-1);

	if ($mysqli == null) echo "123";



	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$login =  $_POST['loginAuth'];
		$password =  $_POST['passwordAuth'];
		$MD5Password = md5($password);

		$isPasswordMatches = false;
		$isLoginExists = false;


		if (isValueExists('Login', $login, $mysqli)) $isLoginExists = true;
		else $isLoginExists = false;

		if (isValueExists('Password', $MD5Password, $mysqli)) $isPasswordMatches = true;
		else $isPasswordMatches = false;


		echo $mysqli->error;



		if ($isPasswordMatches && $isLoginExists && $login != null && $password != null) {
			
			echo "\r\nWelcome, ".$login;
			sleep(2);
			setcookie('user','true',time()+3600,'/');
			header('Location: /index.php');

		} else {
			echo " Неверный логин/пароль или поля пусты";
			

		}

		$mysqli->close();
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<a href="index_form.php">Повоторить попытку</a>

</body>
</html>