<?php
require('connect_db.php');
require('Classes.php');
?>

<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <title>sklad_shop</title>
  <script src="classes.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/logo_site.png" type="image/png">
</head>

<body>
  <div id="buttons">
    <input type="button" class="battons" value="Печать" onclick="window.print()">
    <input type="button" id="buttonCange" class="battons" value="Добавить" onclick="add()">
    <input type="button" id="buttonCollect" class="battons" value="Cформировать комплект" onclick="collect()">
  </div>

  <div>
    <table class="print">
      <tr>
        <th>Код</th>
        <th>Наименование</th>
        <th class="centerTable">Ед. изм.</th>
        <th class="centerTable">Количество</th>
        <th class="centerTable">Изменить/Удалить</th>
      </tr>

      <?php
      //Выгрузка из бд
      $q = $db->query(
        'SELECT ID
        FROM products'
      );

      while ($row = $q->fetch()) {
        $arr[] = array_values($row);
      }

      for ($x = 0; $x < count($arr); $x++) {
        $ID = $x + 1;

        $q = $db->query("SELECT * FROM products WHERE ID = $ID");
        while ($row = $q->fetch()) {
          $Device = new Table();
          $Device->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
        }
      }
      ?>

    </table>
  </div>

  <!-- Модальное окно для добавления -->
  <div id="popupAdd">
    <div id="popup_body" class="popupInsertChange">
      <div class="popupTitle">Добавить</div>
      <form action="php_script/add.php" method="POST" id="formAdd">
        <p><div>Наименование</div> <input type="text" id="nameInPopupAdd" name="name" required oninvalid="this.setCustomValidity('Введите наименование')" oninput="setCustomValidity('')"></p>
        <p><div>Количество</div> <input type="number" name="quantity" min="1" max="1000" required></p>
        <div class="buttonsPopup">
          <input type="button" class="battons" value="Отмена" onclick="closeWindow()">
          <input type="submit" class="battons" value="ОК" onclick="add()" name="but">
        </div>
      </form>
    </div>
  </div>

  <!-- Модальное окно для сформировать комплект -->
  <div id="popupСollect">
    <div id="popup_body" class="popupСollect">
      <div class="popupTitle">Сформировать комплект</div>
      <form action="php_script/сollect.php" method="POST" id="formСollect">
        <p><div>Введите количество ip-камер</div> <input type="number" id="" name="camers" value="4" min="1" max="100"></p>
        <p><div>Введите количество клавиатур</div> <input type="number" id="" name="keyboard" value="2" min="1" max="100"></p>
        <p><div>Введите количество сетевых фильтр 1,8 м.</div> <input type="number" id="" name="filter1_8" value="2" min="1" max="100"></p>
        <p><div>Введите количество сетевых фильтр 5 м.</div> <input type="number" id="" name="filter5" value="1" min="1" max="100"></p>
        <p><div>Нужен ли Вам KVM-переключатель?<input type="checkbox" name="KVM"></div></p>
        <div class="buttonsPopup">
          <input type="button" class="battons" value="Отмена" onclick="closeWindow()">
          <input type="submit" class="battons" value="ОК" onclick="" name="">
        </div>
      </form>
    </div>
  </div>

</body>

</html>