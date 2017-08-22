<html>
	<title>
		View
	</title>
	<head>
	
	
	</head>
	
	<body>
		<?php
		
		//connection to database and server
		//include ('connection-db.php');
			$dbname='db_test';
				$conn=mysqli_connect('localhost','root','');
	
	if(!$conn){
	die ('No Connection localhost<br>');
	}
	echo 'Connected <br>';
			
		//connect database;
		mysqli_select_db($conn,$dbname);	

		$result =mysqli_query ($conn,"Select * from db_student")
		or die (mysqli_error($conn));
		echo 'Connection to database';
		//display data in table
		


?>
<table border='1' cellpadding='10'>

<tr>
		<th>ID</th> 
		<th>Name</th>
		<th>Gender</th> 
		<th>Age</th>
		<th>Class</th>
		<th>Action </th>
	</tr>

	
		

<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array($result))
	{
	?>
<tr>
	<td><?php echo $row['ID']; ?></td>
	<td><?php echo $row['Fname'].' '.$row['Mname'].' '.$row['Lname']; ?></td>
	<td><?php echo $row['Gender']; ?></td>
	<td><?php echo $row['Age']; ?></td>
	<td><?php echo $row['Class']; ?></td>
	<td> <a href = 'edit.php?ID=<?php echo $row['ID'];?>'>Edit</a><br><a href = 'delete.php?ID=<?php echo $row['ID'];?>'>Delete</a> </td>
</tr>
		
<?php

}


?>

</table>
		

	</body>

</html>