<?php
require('../Classes.php');
require('../connect_db.php');

//Нахождение нужного ID
$q = $db->query(
    'SELECT ID
    FROM products
    ORDER BY ID DESC
    LIMIT 1;'
);
while ($row = $q->fetch()) {
    $ID = "$row[ID]"; 
  }

$ID++;
$name = $_POST["name"];
$quantity = $_POST["quantity"];

//валидация
// if (empty($name)) {
//     // throw new Exception ('введите');
//     echo '<script>alert("введите")</script>';  
// }
// try {
//     if (empty($name)) {
//         echo '<script>alert("введите")</script>'; 
//         exit(header('Location: ../index.php')); 
//     }
// }
// catch(Exception $e) {
//     echo$e->getMessage();
// }

// $err = [];
// $flag = 0; 

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if (empty($name)) {
//         $err['name'] = '<p>ошибка</p>';
//         $flag = 1;
//     }
// }

$q = $db->query(
    'INSERT products (ID, Product, Quantity)
     VALUES ('.$ID.', "'.$name.'", '.$quantity.');'
);

//Добавление данных в фаил index.php
$file_index = '../index.php';
$content = file_get_contents($file_index);
$input_data = '$q = $db->query("SELECT * FROM products WHERE ID = '.$ID.'");
    while ($row = $q->fetch()) {
        $Device'.$ID.' = new Table();
        $Device'.$ID.'->output_data("$row[ID]", "$row[Product]", $row["Quantity"]);
    }
      //добавить строку таблицы';
$newContent = str_replace("//добавить строку таблицы", $input_data, $content);
file_put_contents($file_index, $newContent);


header('Location: ../index.php');