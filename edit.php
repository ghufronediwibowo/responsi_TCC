<?php
include_once("config.php");
if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$nim = mysqli_real_escape_string($mysqli, $_POST['nim']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	if(empty($name) || empty($nim) || empty($email)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($nim)) {
			echo "<font color='red'>NIM field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		$result = mysqli_query($mysqli, "UPDATE mhs SET name='$name',nim='$nim',email='$email' WHERE 
id=$id");
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM mhs WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$nim = $res['nim'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>
<body>
	<a href="index.php">Home</a>
	<br/><br/>	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>nim</td>
				<td><input type="text" name="nim" value="<?php echo $nim;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

