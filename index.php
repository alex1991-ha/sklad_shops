<?php
    require ('connect_db.php');

    //  $q = $db->query('SELECT * FROM products');
    //  while($row = $q->fetch()){
         
    //     $id = $row["ID"];
    //     $product= $row["Product"];
    //     $Quantity = $row["Quantity"];

    //     echo '<h1>'.$product.'</h1>';
    // }
    // echo '<h1>'.$product.'</h1>'

    $q = $db->query('SELECT * FROM products WHERE ID = 1');
     while($row = $q->fetch()){
         
        $product= $row["Product"];
        $Quantity = $row["Quantity"];
    }
    ?>

<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8">
		    <title>sklad_shop</title>
        <script src="script.js"></script>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
    <div>
    <?php
    
    ?>
    <table>
    <tr>
      <th>Код</th>
      <th>Наименование</th>
      <th>Ед. изм.</th>
      <th class="colum">Количество</th>
    </tr>
    <tr>
      <td>1</td>
      <td><?php echo $product?></td>
      <td>шт</td>
      <td class="colum"><?php echo $Quantity?></td>
    </tr>
    <!-- <tr>
      <td>000002</td>
      <td>Israel</td>
      <td>Tassell</td>
      <td>itassell1@ow.ly</td>
    </tr>
    <tr>
      <td>000003</td>
      <td>Eveleen</td>
      <td>Mercer</td>
      <td>emercer2@ow.ly</td>
    </tr>
    <tr>
      <td>000004</td>
      <td>Conn</td>
      <td>Whitley</td>
      <td>cwhitley3@wsj.com</td>
    </tr>
    <tr>
      <td>000005</td>
      <td>Cherye</td>
      <td>Smitheram</td>
      <td>csmitheram4@rambler.ru</td>
    </tr> -->
  
</table>
    </div>
	</body>
</html>

