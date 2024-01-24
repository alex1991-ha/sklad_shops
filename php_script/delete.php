<?php
require('../Classes.php');
require('../connect_db.php');

$q = $db->query(
    'UPDATE products
                SET Product = "' . $name . '", Quantity = ' . $quantity . '
                WHERE ID = ' . $IDQuery . ''
);


header('Location: ../index.php');
