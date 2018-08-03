<?php
error_reporting(E_ALL);
$databaseHost = '127.0.0.1';
$databaseName = 'crud';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if (mysqli_connect_errno()) {
   printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
?>

