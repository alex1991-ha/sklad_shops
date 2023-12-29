<?php
class Table
{
	function output_data($number, $product, $Quantity)
	{
		echo '
			<tr>
        	<td>' . $number . '</td>
        	<td>' . $product . '</td>
        	<td id="centerUnits">шт</td>
            <td id="quantity" class="centerQuantity">' . $Quantity . '</td>
      		</tr>';
        
        // echo '
		// 	<tr>
        // 	<td>' . $number . '</td>
        // 	<td>' . $product . '</td>
        // 	<td id="centerUnits">шт</td>
        //     <td class="centerQuantity">' . $Quantity . '</td>
      	// 	</tr>';
	}
}
