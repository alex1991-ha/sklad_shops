<?php
require('connect_db.php');
require('Classes.php');
?>

<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <title>sklad_shop</title>
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="buttons">
    <input type="button" value="Печать" onclick="window.print()">
    <input type="button" id="buttonCange" value="Добавить" onclick="add()">
  </div>
  <br>
  <br>
  <br>

  <div>
    <table class="print">
      <tr>
        <th>Код</th>
        <th>Наименование</th>
        <th>Ед. изм.</th>
        <th>Количество</th>
        <th>Изменить</th>
      </tr>
      <?php
      //Персональный компьютер
      $q = $db->query('SELECT * FROM products WHERE ID = 1');
      while ($row = $q->fetch()) {
        $PC = new Table();
        $PC->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Монитор
      $q = $db->query('SELECT * FROM products WHERE ID = 2');
      while ($row = $q->fetch()) {
        $Display = new Table();
        $Display->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Сетевой фильтр 1,8 м
      $q = $db->query('SELECT * FROM products WHERE ID = 3');
      while ($row = $q->fetch()) {
        $Sf18 = new Table();
        $Sf18->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Сетевой фильтр 5 м
      $q = $db->query('SELECT * FROM products WHERE ID = 4');
      while ($row = $q->fetch()) {
        $Sf5 = new Table();
        $Sf5->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }
      //Компьютерная мышь
      $q = $db->query('SELECT * FROM products WHERE ID = 5');
      while ($row = $q->fetch()) {
        $Mouse = new Table();
        $Mouse->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Клавиатура
      $q = $db->query('SELECT * FROM products WHERE ID = 6');
      while ($row = $q->fetch()) {
        $Klava = new Table();
        $Klava->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Коммутатор 
      $q = $db->query('SELECT * FROM products WHERE ID = 7');
      while ($row = $q->fetch()) {
        $Switch = new Table();
        $Switch->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Коммутатор PoE
      $q = $db->query('SELECT * FROM products WHERE ID = 8');
      while ($row = $q->fetch()) {
        $SwitchPoE = new Table();
        $SwitchPoE->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Принтер
      $q = $db->query('SELECT * FROM products WHERE ID = 9');
      while ($row = $q->fetch()) {
        $Printer = new Table();
        $Printer->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Картридж к принтеру
      $q = $db->query('SELECT * FROM products WHERE ID = 10');
      while ($row = $q->fetch()) {
        $CartridgOfPrinter = new Table();
        $CartridgOfPrinter->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Кабель к принтеру
      $q = $db->query('SELECT * FROM products WHERE ID = 11');
      while ($row = $q->fetch()) {
        $CableOfPrinter = new Table();
        $CableOfPrinter->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //ИБП
      $q = $db->query('SELECT * FROM products WHERE ID = 12');
      while ($row = $q->fetch()) {
        $UPS = new Table();
        $UPS->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //Сканер штрих-кода
      $q = $db->query('SELECT * FROM products WHERE ID = 13');
      while ($row = $q->fetch()) {
        $Scan = new Table();
        $Scan->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }

      //KVM-переключатель
      $q = $db->query('SELECT * FROM products WHERE ID = 14');
      while ($row = $q->fetch()) {
        $KVM = new Table();
        $KVM->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
      }
    
      $q = $db->query("SELECT * FROM products WHERE ID = 15");
    while ($row = $q->fetch()) {
        $Device15 = new Table();
        $Device15->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
    }
      //добавить строку таблицы

      //Валидация
    //   try {
    //     if (empty($name)) {
    //         echo '<script>alert("введите")</script>'; 
    //         exit(header('Location: ../index.php')); 
    //     }
    // }
    // catch(Exception $e) {
    //     echo$e->getMessage();
    //}
    // $name = $_POST["name"];
    // $quantity = $_POST["quantity"];
    // Header('Location: php_script/add.php?post=$name');
      ?>

    </table>
  </div>

  <!-- Модальное окно для добавления -->
  <div id="popupAdd">
    <div id="popup_body">
      <form action="php_script/add.php" method="POST"> -->
      <!-- <form action="index.php" method="POST"> -->
        <p>Наименование: <input type="text" id="nameInPopupAdd" value="" name="name"></p>
        <p>Количество: <input type="text" value="" name="quantity"></p>
        <input type="button" value="Отмена" onclick="closeWindow()">
        <input type="submit" value="ОК" onclick="add()" name="but">
      </form>
    </div>
  </div>

</body>

</html>
