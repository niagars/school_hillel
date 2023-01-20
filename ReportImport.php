<?php

class ReportImport implements iImport
{

public function dataInsert (array $data)
	{
	$html = '<table>
	<tr>
		<td>name</td>
		<td>age</td>
		<td>email</td>
	</tr>';
		foreach ($data as $key=>$value)
		{
			$html .= '<tr>';
			$html .= '<td>' . $value['name'] .  '</td>';
			$html .= '<td>' . $value['age'] .  '</td>';
			$html .= '<td>' . $value['email'] .  '</td>';
			$html .= '</tr>';
		};
	$html .= '</table>';
	echo $html;
	}

}

?>
