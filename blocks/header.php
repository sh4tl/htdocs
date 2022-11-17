<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <img class="mb-2" src="../img/lg.png" alt="" width="240" height="80">
<button class="btn btn-outline-primary btn-toggle my-2" style="margin-left:10px;">Сменить тему</button>
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">

        <a class="btn btn-outline-secondary ms-md-auto" style="margin-right: 10px;" href="index.php">Главнaя</a>
        <a class="btn btn-outline-secondary ms-md-auto" style="margin-right: 10px;" href="about.php">Контакты</a>
      </nav>
      <?php 
            if($_COOKIE['user'] == 'true'):

       ?><a class="btn btn-outline-primary" href="/about1.php">Личный кабинет</a>
     <?php else: ?>
      <a class="btn btn-outline-primary" href="/index_form.php">Войти</a>
    <?php endif;  ?>
    </div>
    <script type="text/javascript">
      // Выбираем кнопку
const btn = document.querySelector(".btn-toggle");
// Отслеживаем щелчок по кнопке
btn.addEventListener("click", function () {
  // Затем переключаем (добавляем/удаляем) класс .dark-theme для body
  document.body.classList.toggle("dark-theme");
  document.a.classList.toggle("dark-theme");
});
    </script>