<?php 
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
session_start();
if (isset($_POST['checkOut'])) {
    unset($_SESSION['goods']);
}
setcookie("counter", $counter);
if ($_COOKIE['counter'].value >= 19)
	setcookie("counter", $counter, time() - 3600);
echo "<span>Views: ".$counter."</span>";
if ($_COOKIE['counter'] == 4)
	echo "<br><span>special message #5</span>";
if ($_COOKIE['counter'] == 9)
	echo "<br><span>special message #10</span>";
if ($_COOKIE['counter'] == 14)
	echo "<br><span>special message #15</span>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insomnia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<form action="action.php" method="POST">
			<div class="title">
				<span>AUTORIZATION</span><br>
				<div id="underline"></div><br>
			</div>
			<label for="username">LOGIN</label><br>
			<input type="text" id="username" name="username"><br>
			<label for="password">PASSWORD</label><br>
			<input type="password" id="password" name="password"><br><br>
			<textarea name="text" cols="35" style="border-radius: 15px; padding: 10px;" rows="4"></textarea>	
			<input type="color" name="color" id="color" style="height: 60px; border-radius: 15px" value="<? echo $_SESSION['color']; ?>">
			<div class="product">
				<div class="title">product1</div>
				<input type="text" class="amount" name="prod1" value="<? echo $_SESSION['goods']['product1']; ?>">
			</div>
			<div class="product">
				<div class="title">product2</div>
				<input type="text" class="amount" name="prod2" value="<? echo $_SESSION['goods']['product2']; ?>">
			</div>
			<div class="product">
				<div class="title">product3</div>
				<input type="text" class="amount" name="prod3" value="<? echo $_SESSION['goods']['product3']; ?>">
			</div>
			<div class="product">
				<div class="title">product4</div>
				<input type="text" class="amount" name="prod4" value="<? echo $_SESSION['goods']['product4']; ?>">
			</div>
			<div class="product">
				<div class="title">product5</div>
				<input type="text" class="amount" name="prod5" value="<? echo $_SESSION['goods']['product5']; ?>">
			</div>
			<div class="product">
				<div class="title">product6</div>
				<input type="text" class="amount" name="prod6" value="<? echo $_SESSION['goods']['product6']; ?>">
			</div>
			<button type="submit">SEND</button>
		</form>
	</div>
	<script src="script.js"></script>
</body>
</html>