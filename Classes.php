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
                <div id="popup' . $number . '" class=popup>
                <script>
                  function change' . $number . '() {
                    let window = document.getElementByClassName("popup");
                    window.style.visibility = "visible";
                    window.style.opacity = 1;
                  }
                </script>
                     <div class="popup_body">
                         <form action="update.php" method="POST" id="f' . $number . '">
                             <p>Наименование: <input type="text" id="nameInPopup" value="' . $product . '" name="name"></p>
                             <p>Количество: <input type="text" value=' . $Quantity . ' name="quantity"></p>
                             <input type="button" value="Отмена" onclick="closeWindow()">
                             <input type="submit" value="ОК">
                        </form>
                     </div>
                 </div>';
    }


    //    class Table
    // {
    //     public function output_data($number, $product, $Quantity)
    //     {
    //         echo '
    //             <tr>
    //         	<td>' . $number . '</td>
    //         	<td>' . $product . '</td>
    //         	<td id="centerUnits">шт</td>
    //             <td id="quantity" class="centerQuantity">' . $Quantity . '</td>
    //             <td><input type="button" value="изменить" onclick="change' . $number . '()"></td>
    //       		</tr>
    //             <script>
    //               function change' . $number . '() {
    //                 let window = document.getElementById("popup");
    //                 window.style.visibility = "visible";
    //                 window.style.opacity = 1;
    //               }
    //             </script>
    //             <div id="popup">
    //                  <div id="popup_body">
    //                      <form action="update.php" method="POST" id="f' . $number . '">
    //                          <p>Наименование: <input type="text" id="nameInPopup" value="' . $product . '" name="name"></p>
    //                          <p>Количество: <input type="text" value=' . $Quantity . ' name="quantity"></p>
    //                          <input type="button" value="Отмена" onclick="closeWindow()">
    //                          <input type="submit" value="ОК">
    //                     </form>
    //                  </div>
    //              </div>';
    //     }


    //     public function output_data_in_popup($ID)
    //     {
    //         require('connect_db.php');

    //         $q = $db->query('SELECT * FROM products WHERE ID = "' . $ID . '"');
    //         while ($row = $q->fetch()) {
    //             $name = "$row[Product]";
    //             $quantity = "$row[Quantity]";
    //         }
    //         echo '
    //         <div id="popup">
    //             <div id="popup_body">
    //                 <form action="update.php" method="post">
    //                     <p>Наименование: <input type="text" id="nameInPopup" value="' . $name . '" name="name"></p>
    //                     <p>Количество: <input type="text" value=' . $quantity . ' name="quantity"></p>
    //                     <input type="button" value="Отмена" onclick="closeWindow()">
    //                     <input type="submit" value="ОК">
    //                 </form>
    //             </div>
    //         </div> ';
    //     }
}
