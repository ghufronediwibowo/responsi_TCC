<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php
include_once("config.php");
if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$nim = $_POST['nim'];
	$email = $_POST['email'];
	if(empty($name) || empty($nim) || empty($email)) {				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}		
		if(empty($nim)) {
			echo "<font color='red'>nim field is empty.</font><br/>";
		}	
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		$result = mysqli_query($mysqli, "INSERT INTO mhs(name,nim,email) 
VALUES('$name','$nim','$email')");
		
		//display success messnim
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>

