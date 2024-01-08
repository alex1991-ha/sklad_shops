<?php
require('connect_db.php');

$name = $_POST["name"];
$quantity = $_POST["quantity"];

$q = $db->query(
    'UPDATE products
                SET Product = "' . $name . '", Quantity = ' . $quantity . '
                WHERE ID = 1'
);

header('Location: index.php');
