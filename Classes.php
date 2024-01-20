<?php

class Table
{
    public function output_data($ID, $product, $quantity)
    {
        require('connect_db.php');
        echo '  
                <tr>
            	<td>' . $ID . '</td>
            	<td>' . $product . '</td>
            	<td id="centerUnits">шт</td>
                <td id="quantity" class="centerQuantity">' . $quantity . '</td>
                <td><input type="button" value="" onclick="change' . $ID . '()" class="buttonChange"></td>
          		</tr>
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
      
                    .buttonChange {
                      background-image: url(img/5.png);
                      background-size: contain;
                      border: none;
                      width: 26px;
                      height: 26px;
                    }
                  </style>
      
                  <script>
                      function change' . $ID . '() {
                          let window = document.getElementById("popup' . $ID . '");
                          window.style.visibility = "visible";
                          window.style.opacity = 1;
                      }
                      function closeWindow' . $ID . '() {
                          let window = document.getElementById("popup' . $ID . '");
                          window.style.visibility = "hidden";
                          window.style.opacity = 0;
                      }
                      function OK' . $ID . '() {
                          let window = document.getElementById("popup' . $ID . '");
                          window.style.visibility = "hidden";
                          window.style.opacity = 0;
                      }
                  </script>
                  
                  <div id="popup' . $ID . '">
                      <div id="popup_body">
                          <form action="php_script/update.php" method="POST">
                              <input type="text" value=' . $ID . ' name="ID" style="visibility: hidden;">
                              <p>Наименование: <input type="text" id="nameInPopup" value="' . $product . '" name="name"></p>
                              <p>Количество: <input type="text" value=' . $quantity . ' name="quantity"></p>
                              <input type="button" value="Отмена" onclick="closeWindow' . $ID . '()">
                              <input type="submit" value="ОК" onclick="OK' . $ID . '()">
                          </form>
                      </div>
                  </div>
                ';
    }

}