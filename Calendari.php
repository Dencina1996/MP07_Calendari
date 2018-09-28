<!DOCTYPE html>
<html>
<head>
	<title>Calendari</title>
</head>
<body>
	<table border="2">
		<tr>
			<td>Dilluns</td>
			<td>Dimarts</td>
			<td>Dimecres</td>
			<td>Dijous</td>
			<td>Divendres</td>
			<td>Dissabte</td>
			<td>Diumenge</td>
		</tr>
		<?php

			 $First_Day = strtolower(date('d', strtotime('first day of this month')));
			 $Last_Day = strtolower(date('d', strtotime('last day of this month')));
			
			echo $First_Day;
			echo $Last_Day;

			// echo"<tr>";

			// for ($i = 1; $i < 8; $i ++) {

				// echo "<td>$i</td>";
				
				// }
		
			// echo "</tr>";
			
			
		?>
	</table>
</body>
</html>