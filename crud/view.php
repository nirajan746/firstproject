<html>
<title>
</title>
<head>
</head>

<body>
	<table border="1px solid #e2e2e2">
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Class</th>
			<th>Action1</th>			
		</tr>
		<?php 
		include ('controller/dbConfig.php') ;
			
		$sql="SELECT * FROM student_db ORDER BY id";

		if ($result=mysqli_query($conn,$sql))
		  {
		  // Fetch one and one row
		  while ($row=mysqli_fetch_array($result))
			{			
		?>
		<tr>
			<td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']?></td>
			<td><?php echo $row['age']?></td>
			<td><?php echo $row['gender']?></td>
			<td><?php echo $row['class']?></td>
			<td><a href="edit.php?action=edit&id=<?php echo $row['id']?>">Edit</a>  <a href="controller/delete.php?action=delete&id=<?php echo $row['id']?>">Delete</a></td>
		</tr>
		<?php 
		    }
			  // Free result set
			  mysqli_free_result($result);
			}

			mysqli_close($conn);
		?>
		
	</table>
</body>
</html>