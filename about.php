<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<title>Contacts</title>
</head>
<body>
	
  <?php
    require "blocks/header.php"
  ?>
  <div class="container mt-5">
      <h3>Контактная форма</h3>
      <form action="check.php" method="POST">
        <input type="email" name="email" placeholder="Введите ваш Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
      </form>
  </div>




   <?php
    require "blocks/footer.php"
  ?>
</body>
</html>