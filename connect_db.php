<?php
$db = new PDO('mysql:host=localhost;dbname=sklad_shops', 'root', '');
	 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>