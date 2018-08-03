<?php
error_reporting(E_ALL);
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM mhs ORDER BY id DESC");
?>
<html>
<head>	
	<title>Responsi</title>
</head>
<body>
	<a href="add.html">Add</a><br/><br/>
	<table width='50%' border=1>

		<tr>
			<td width='50%'>Name</td>
			<td width='20%'>NIM</td>
			<td width='20%'>Email</td>
			<td width='10%'></td>
		</tr>
		<?php 
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['nim']."</td>";
			echo "<td>".$res['email']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" 
			onClick=\"return confirm('Are you sure?')\">Delete</a></td>";		
		}
		?>
	</table>
</body>
</html>

