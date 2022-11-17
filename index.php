<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<title>Insomnia</title>
</head>
<body >
	<?php
    require "blocks/header.php"
  ?>
  <script type="text/javascript">
    
  </script>

    <div class="container mt-5">
      <h3 class="mb-5" id="text">Наш ассортимент</h3>
          <div class="d-flex flex-wrap">
          <?php
              for($i = 4; $i<9; $i++):
           ?>
           <div class="card-body">
                <h1 class="card-title pricing-card-title" id="text">Категория</h1>
                <img src="img/<?php echo  $i+1 ?>.png" class="img-thumbnail">
                <ul  id="text" class="list-unstyled mt-3 mb-4">

                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-info">Подробнее...</button>
              </div>
            <?php  endfor; ?>
        </div>


    </div>
    <?php
    require "blocks/footer.php"
  ?>

</body>
</html>