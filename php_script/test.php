<?php
// $file_index = '../index.php';
// $content = ' $q = $db->query("SELECT * FROM products WHERE ID = 15");
// while ($row = $q->fetch()) {
// $Device15 = new Table();
// $Device15->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);';
// file_put_contents($file_index, $content, FILE_APPEND);

$file_index = '../index.php';
$content = file_get_contents($file_index);
$input_data = '$q = $db->query("SELECT * FROM products WHERE ID = 16");
while ($row = $q->fetch()) {
  $Device16 = new Table();
  $Device16->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
                
      //добавить строку таблицы';
$newContent = str_replace("//добавить строку таблицы", $input_data, $content);
file_put_contents($file_index, $newContent);