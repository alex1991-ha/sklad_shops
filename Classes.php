<?php

class Table
{
    public function output_data($number, $product, $Quantity)
    {
        echo '
                <tr>
            	<td>' . $number . '</td>
            	<td>' . $product . '</td>
            	<td id="centerUnits">шт</td>
                <td id="quantity" class="centerQuantity">' . $Quantity . '</td>
                <td><input type="button" value="изменить" onclick="change' . $number . '()"></td>
          		</tr>
               
                ';
    }


    public function output_data_in_popup($ID)
    {
        require('connect_db.php');

        $q = $db->query("SELECT * FROM products WHERE ID = " . $ID . "");
        while ($row = $q->fetch()) {
            $product  = "$row[Product]";
            $quantity = "$row[Quantity]";
        }
        echo '
            <style>
            #popup' . $ID . ' {
                position: fixed;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                top: 0;
                left: 0;
                display: flex;
                align-items: center;
                opacity: 0;
                visibility: hidden;
                transition: all 0.8s ease 0s;
              }
              
            </style>
            <script>
                function change' . $ID . '() {
                    let window = document.getElementById("popup' . $ID . '");
                    window.style.visibility = "visible";
                    window.style.opacity = 1;
              }
            </script>
            <div id="popup' . $ID . '">
                <div id="popup_body">
                    <form action="" method="POST">
                        <p>Наименование: <input type="text" id="nameInPopup" value="' . $product . '" name="name"></p>
                        <p>Количество: <input type="text" value=' . $quantity . ' name="quantity"></p>
                        <input type="button" value="Отмена" onclick="closeWindow()">
                        <input type="submit" value="ОК">
                    </form>
                </div>
            </div> ';


        $name = $_POST["name"];
        $quantity = $_POST["quantity"];


        $q = $db->query(
            'UPDATE products
                            SET Product = "' . $name . '", Quantity = ' . $quantity . '
                            WHERE ID = ' . $ID . ''
        );
        header('Location: index.php');
    }
}
