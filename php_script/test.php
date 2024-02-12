<?php
$ID = 16;

//Добавление данных в фаил index.php
$file_index = '../index.php';
$content = file_get_contents($file_index);
$output_data = '$q = $db->query("SELECT * FROM products WHERE ID = '.$ID.'");
    while ($row = $q->fetch()) {
        $Device'.$ID.' = new Table();
        $Device'.$ID.'->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
    }';
$newContent = str_replace($output_data, "", $content);
file_put_contents($file_index, $newContent);