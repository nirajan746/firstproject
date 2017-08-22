<?php
$dbname='db_test';
$fname=$_POST['Fname'];
$mname=$_POST['Mname'];
$lname=$_POST['Lname'];
$gender=$_POST['Gender'];
$age=$_POST['Age'];
$class=$_POST['Class'];
print_r($fname);

//server connection
$conn=mysqli_connect('localhost','root','');

if(!$conn){
	die ('No Connection');
}
	echo 'Connected <br>';
//database connection

$conndb=mysqli_select_db($conn,$dbname);

if(!$conndb){
	die ('No Connection');
}
	echo 'Connected <br>';
//database connection

//input data into database



//method 1 to insert data

$sql = "INSERT INTO db_student (Fname, Mname,Lname,Gender,Age,Class)
VALUES ('$fname', '$mname', '$lname','$gender','$age','$class')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header ("Location: form.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//method 1 end

//method 2 to insert data
 /*
$query=mysqli_query("INSERT INTO db_student(Fname,Mname,Lname,Gender,Age,Class) 
VALUES ('$fname','$mname','$lname','$gender','$age','$class')"
or die(mysqli_query($conn));
*/
//method 2 end
//mysqli_query($query);

//or die ('Failed query database');

//$row = mysqli_fetch_array($conn,$query);

?>