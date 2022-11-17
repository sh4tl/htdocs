<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<title>Insomnia</title>
</head>
<body>
	<?php
	    require "blocks/header.php"
	  ?>
	<div id="menu" class="container mt-5">
		<button id="menuButtonReg" onclick="display('registration')" class="btn btn-outline-primary">Регистрация</button>
		<button id="menuButtonAuth" onclick="display('authorization')" class="btn btn-outline-primary">Авторизация</button>
	</div>
	<div>
		<div id="registration" class="container mt-5">
			<h3>Регистрация</h3><br>
			<form action="reg.php" method="post" id="formReg">

				
				<input type="text" placeholder="Введите логин" name="login" class="form-control"><br>

				<input type="email" placeholder="Введите e-mail" name="email" class="form-control"><br>

				<input type="password" placeholder="Введите пароль" name="password" class="form-control"><br>

				<input type="password" placeholder="Повторите пароль" name="passwordRepeat" class="form-control"><br>
				
				<label for="permit">Согласие на обработку данных</label>

				<input type="checkbox" name="checkBoxPermitionReg"  id="permit" value="false"><br><br>

				
				<button disabled name="buttonReg" id="buttonReg" class="btn btn-success">Зарегистрироваться</button>

			</form>
		</div>
		<div id="authorization" class="container mt-5">
			<h3>Авторизация</h3><br>
			<form action="auth.php" method="post" id="formAuth">

				
				<input type="text" placeholder="Введите логин" name="loginAuth" class="form-control"><br>

				
				<input type="password" placeholder="Введите пароль" name="passwordAuth" class="form-control"><br>

				<button name="buttonAuth" class="btn btn-success">Войти</button>

			</form>
		</div>
	</div>



	<script type="text/javascript">

		const REG = 'registration';
		const AUTH = 'authorization';

		let isRegActive = false;
		let isAuthActive = false;

		let elemReg = document.getElementById(REG);
		let elemAuth = document.getElementById(AUTH);

		elemReg.style.display = "none";
		elemAuth.style.display = "flex <br/>";

		function display(id) {

			
			
			if (id == REG) {

				elemReg.style.display = "table";
				elemAuth.style.display = "none";
			}

			if (id == AUTH) {

				elemReg.style.display = "none";
				elemAuth.style.display = "table";
			}
		}

		let permitionCheckbox = document.getElementById("permit");
		let buttonReg = document.getElementById('buttonReg');

		permitionCheckbox.addEventListener("change", function(event) {
			buttonReg.disabled = !buttonReg.disabled;
		}, false);



	</script>
	<?php 
	require "blocks/footer.php"
	 ?>
</body>
</html>