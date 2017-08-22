<html>
<title>
</title>
<head>
</head>

<body>

<?php
if(isset($_GET['ID'])) {		
			//link database and server
				include ("connection-db.php");
					
				$sql="SELECT * FROM db_student WHERE id=".$_GET['ID']."";
print_r ($_GET['ID']);
				if ($result=mysqli_query($conn,$sql))
				  {
				  // Fetch one and one row
				  while ($row=mysqli_fetch_array($result))
					{	
				
						$fname= $row['Fname'];
						$mname= $row['Mname'];
						$lname= $row['Lname'];
						$age=$row['Age'];
						$gender=$row['Gender'];
						$class=$row['Class'];
					}
				  // Free result set
				  mysqli_free_result($result);
				}

				mysqli_close($conn);
	}

?>
<form action = "edit_c.php" method="Post">

<fieldset>
<legend>Student info</legend>
<table>
 <input type='hidden' name='ID' value='<?php echo ($_GET['ID']) ?>' required>
<tr> 
<td>First name: </td>
<td> <input type='text' name='Fname' value='<?php echo $fname?>' required></td>
</tr>

<tr> 
<td>Middle name: </td>
<td> <input type='text' name='Mname' value='<?php echo $mname?>'></td>
</tr>

<tr> 
<td>Last name: </td>
<td> <input type='text' name='Lname' value='<?php echo $lname?>'required></td>
</tr>

<tr> 
<td>Gender </td>

<td> 
<input type='radio' name='Gender' value='Male'	> Male <br>
<input type='radio' name = 'Gender' value= 'Female'> Female
</td>

</tr>

<tr> 
<td>Age </td>
<td> <input type='number' name='Age' min='1' max='30' value='<?php echo $age?>' required></td>
</tr>
<tr> 
<td>Class </td>
<td>
 <select name= 'Class' value='<?php echo $class?>'>
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
<td><input type= 'submit' value='Submit'></td>
</tr>

</table>
</fieldset>
</form>



</body>
</html>
