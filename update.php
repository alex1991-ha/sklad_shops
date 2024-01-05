<?php
require('connect_db.php');


$q = $db->query('UPDATE products
                SET Product = "ПК", Quantity = 5
                WHERE ID = 1');

var_dump($_POST["name"]);