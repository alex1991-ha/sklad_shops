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
            <td id="centerQuantity">' . $Quantity . '</td>
        	
      		</tr>';
	}
}
// <td id="centerQuantity"><input type="button" value="-">' . $Quantity . '<input type="button" value="+"></td>