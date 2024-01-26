<?php
require('../Classes.php');
require('../connect_db.php');

$IDQuery = $_POST["ID"];

$q = $db->query(
    'SELECT ID
     FROM products'
);

while ($row = $q->fetch()) {
    $ID = "$row[ID]"; 
  }

$q = $db->query(
    'DELETE FROM products
     WHERE ID = ' . $IDQuery . ''
);


header('Location: ../index.php');