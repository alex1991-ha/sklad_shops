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

$q = $db->query(
    'INSERT products (ID, Product, Quantity)
     VALUES ('.$ID.', "'.$name.'", '.$quantity.');'
);

header('Location: ../index.php');