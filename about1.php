<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<title>Profile</title>
</head>
<body>
	
  <?php
    require "blocks/header.php"
  ?>

  <?php
  $host = 'localhost';  // Хост, у нас все локально
  $user = 'root';    // Имя созданного вами пользователя
  $pass = 'root'; // Установленный вами пароль пользователю
  $db_name = 'Users';   // Имя базы данных
  $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

  // Ругаемся, если соединение установить не удалось
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
   $sql = mysqli_query($link, 'SELECT `IdUser`, `Login`, `Email` FROM `user`');
 $result = mysqli_fetch_array($sql);
?>
  <div class="container mt-5">
      <h3>Пользовательские данные</h3>
      <form action="check.php" method="POST">
        <label>ID</label><br>
        <input type="text" name="id" class="form-control" value="<?php print $result['IdUser'];  ?>" readonly><br>
        <label>Логин</label><br>
        <input type="text" name="login" value="<?php print $result['Login']; ?>" readonly="true" class="form-control"><br>
        <label>E-mail</label><br>
        <input type="email" name="email" class="form-control" readonly value="<?php print $result['Email']  ?>"><br>
        <a href="/exit.php" class="btn btn-outline-danger">Выход</a>
      </form>
  </div>




   <?php
    require "blocks/footer.php"
  ?>
</body>
</html>