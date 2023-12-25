<?php
class Table
{
	function output_data($number, $product, $Quantity)
	{
		print '
			<tr>
        	<td>' . $number . '</td>
        	<td>' . $product . '</td>
        	<td>шт</td>
        	<td>' . $Quantity . '</td>
      		</tr>';
	}
}
