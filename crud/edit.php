<html>
<title>
</title>
<head>
</head>

<body>
<form action = "controller/add.php" method="Post">

<fieldset>
<legend>Student info</legend>
	<table>
		<?php 
			if(($_GET['action'] == 'edit') && isset($_GET['id'])) {		
			
			
				include ('controller/dbConfig.php') ;
					
				$sql="SELECT * FROM student_db WHERE id=".$_GET['id']."";

				if ($result=mysqli_query($conn,$sql))
				  {
				  // Fetch one and one row
				  while ($row=mysqli_fetch_array($result))
					{	
						$fname= $row['fname'];
						$mname= $row['mname'];
						$lname= $row['lname'];
					}
				  // Free result set
				  mysqli_free_result($result);
				}

				mysqli_close($conn);
			}	
		?>
			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"
		<tr> 
			<td>First name: </td>
			<td> <input type='text' name='Fname' value="<?php echo $fname ?>" required>
		</tr>

		<tr> 
			<td>Middle name: </td>
			<td> <input type='text' name='Mname' value="<?php echo $mname ?>" required>
		</tr>

		<tr> 
			<td>Last name: </td>
			<td> <input type='text' name='Lname' value="<?php echo $lname ?>" required>
		</tr>

		<tr> 
			<td>Gender </td>
			<td> 
				<input type='radio' name='Gender' value='Male'	> Male <br>
				<input type='radio' name ='Gender' value= 'Female'> Female
			</td>
		</tr>

		<tr> 
			<td>Age </td>
			<td> <input type='number' name='Age' min='1' max='30' required>
		</tr>
		
		<tr> 
			<td>Class </td>
			<td>
			<select name= 'Class'>
				 <option>1 </option>
				 <option>2 </option>
				 <option>3 </option>
				 <option>4</option>
				 <option>5</option>
				 <option>6</option>
				 <option>7</option>
				<option>8</option>
				<option>9</option>
					 
			</select>
			</td>
		</tr>
		

		<tr>
			<td></td>
			<td><input type= 'submit' value='Edit'></td>
		</tr>
	</table>
</fieldset>
</form>
</body>


</html>