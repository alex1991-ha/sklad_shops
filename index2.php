<?php
    require ('connect_db.php');
    ?>    

     <!-- $q = $db->query('SELECT * FROM products');
     while($row = $q->fetch()){
         
        $id = $row["ID"];
        $product= $row["Product"];
        $Quantity = $row["Quantity"];

        echo '<h1>'.$product.'</h1>';
    }
     -->
    

<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8">
		<title>sklad_shop</title>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
    <div>
        <h1>Склад</h1>
        <div class="box">
            <div class="item_main">Код</div>
            <div class="item_main">Наименование</div>
            <div class="item_main">Ед. изм.</div>
            <div class="item_main">Количество</div>

            <div class="item">1</div>
            <div class="item">Персоональный компьютер</div>
            <div class="item">шт.</div>
            <div class="item">5</div>

            <div class="item">2</div>
            <div class="item">Монитор</div>
            <div class="item">шт.</div>
            <div class="item">5</div>
        </div>
    </div>
	</body>
</html>

