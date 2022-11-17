<?php
	include "db.php";
	include "lib.php";
		


	error_reporting(-1);

	if ($mysqli == null) echo "MySQL = null";



	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$login =  $_POST['login'];
		$email =  $_POST['email'];
		$password =  $_POST['password'];
		$passwordRepeat =  $_POST['passwordRepeat'];


		$isPasswordMatches = $password == $passwordRepeat;
		$isLoginBusy = true;
		$isEmailBusy = true;

		if (isValueExists('Login', $login, $mysqli)) $isLoginBusy = true;
		else $isLoginBusy = false;

		if (isValueExists('Email', $email, $mysqli)) $isEmailBusy = true;
		else $isEmailBusy = false;


		echo $mysqli->error;



		if ($isPasswordMatches && !$isLoginBusy && !$isEmailBusy && $login != null && $email != null) {
			$MD5Password = md5($password);
			$queryState = $mysqli->query("INSERT INTO `Users`.`user`
				(`IdUser`, `Login`, `Email`,`Password`)
				 VALUES (NULL,'$login','$email','$MD5Password') ");

			if ($queryState) {
				echo "Вы зарегестрированы!";
				sleep(2);
				header('Location: /index_form.php');
			} else {
				echo "Error: ".$mysqli->error;
			}

		} else {
			echo "Invalid data";
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