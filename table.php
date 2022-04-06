<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
<?php
  function drawTable($cols, $rows, $color){
    echo '<table border="1">';
    for ($tr=1; $tr<=$rows; $tr++){
      $style = "style = 'background-color:$color'";
      echo '<tr'.$style.'>';
      for ($td=1; $td<=$cols; $td++){
        $style =" style = 'background-color:$color'";
          echo '<td'.$style.'>'. $tr*$td .'</td>';
    }
    echo '</tr>';

}

echo '</table>';


}
?>
  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form method="POST">
      <label>Количество колонок: </label>
      <br />
      <input name="cols" type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name="rows" type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name="color" type='color' value="" />
      <br />
      <br />
      <input type="submit" value='Создать' />
    </form>
    <!-- Таблица -->
    <?php
    $rows = $_POST["rows"];
    $cols = $_POST["cols"];
    $color= $_POST["color"];
    drawTable($cols, $rows, $color);
    ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index1.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>