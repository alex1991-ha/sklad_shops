<?php
require('../Classes.php');
require('../connect_db.php');

$IDQuery = $_POST["ID"];
$name = $_POST["name"];
$quantity = $_POST["quantity"];


$q = $db->query(
    'UPDATE products
                SET Product = "' . $name . '", Quantity = ' . $quantity . '
                WHERE ID = ' . $IDQuery . ''
);


header('Location: ../index.php');