<?php
require('../Classes.php');
require('../connect_db.php');

$IDQuery = $_POST["ID"];

$q = $db->query(
    'DELETE FROM products
     WHERE ID = ' . $IDQuery . ''

);


header('Location: ../index.php');