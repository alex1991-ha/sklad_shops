<?php
require('../Classes.php');
require('../connect_db.php');

$IDQuery = $_POST["ID"];

$q = $db->query(
    'DELETE FROM products
     WHERE ID = ' . $IDQuery . ''
);

$q = $db->query(
  'UPDATE products
  SET ID = ID - 1
  WHERE ID > ' . $IDQuery . ';'
);

header('Location: ../index.php');