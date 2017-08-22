<?php
//connect to database
include ('connection-db.php');
// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['ID']) && is_numeric($_GET['ID']))

{

// get id value

$id = $_GET['ID'];
print_r($id);


// delete the entry

$result = mysqli_query($conn,"DELETE FROM db_student WHERE ID=$id")

or die(mysqli_error($conn));
 echo 'connected';
 // redirect back to the view page
header("Location: view.php");
 
}





else

// if id isn't set, or isn't valid, redirect back to view page
header("Location: view.php");






?>