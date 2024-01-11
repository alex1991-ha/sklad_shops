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
    <input type="button" id="buttonCange" value="Изменить" onclick="change()">
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
      ?>

    </table>
  </div>

  <!-- Модальное окно -->
  <?php
  $PC->output_data_in_popup(1);
  $Display->output_data_in_popup(2);
  ?>

</body>

</html>