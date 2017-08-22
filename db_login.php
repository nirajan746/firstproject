
<?php
$conn = mysqli_connect('localhost', 'root', '');
$dbname='db_test';
if(!$conn){
	die ('No connection');
} 
	echo 'connection successful';
//creating connection with the database 	
mysqli_select_db($conn,$dbname) or die;

//retrieving data from the database

$username=$_POST['username'];
$password= $_POST['password'];

// Query the database for user
	$result = mysqli_query($conn, "select * from db_table where UserName = '$username' and Password = '$password'")
				or die("Failed to query database");
	$row = mysqli_fetch_array($result);
	if (!empty($row['UserName']) == $username && $row['Password'] == $password){
		echo "Login Successful".'<br>'.'ADMIN'.' '.$row['UserName'];
		
	}else {
		echo "Failed to login";
	}


	
	?>
