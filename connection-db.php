<?php
//server connection
$dbname='db_test';
$conn=mysqli_connect('localhost','root','');
	
	if(!$conn){
	die ('No Connection<br>');
	}
	echo 'Connected <br>';
mysqli_select_db ($conn,$dbname) or die ('no db connection');;
echo ('db connected');
?>
