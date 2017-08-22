<?php

$fname=$_POST['Fname'];
$mname=$_POST['Mname'];
$lname=$_POST['Lname'];
$gender=$_POST['Gender'];
$age=$_POST['Age'];
$class=$_POST['Class'];
$id=$_POST['ID'];




echo '<br>';
print_r($fname);
echo '<br>';
print_r($mname);
echo '<br>';
print_r($lname);
echo '<br>';
print_r($gender);
echo '<br>';
print_r($age);
echo '<br>';	
print_r($class);
include ('connection-db.php') ;
	
	//Query the database for user
		$sql= "UPDATE db_student SET Fname='$fname', Mname='$mname', Lname='$lname' , Gender='$gender' ,Age='$age' , Class='$class' WHERE ID='$id'";	
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	
	mysqli_close($conn);
	

	
		
?>