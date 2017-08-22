<html>
<title>
</title>
<head>
</head>

<body>


<form action = "studentinsert.php" method="POST">

<fieldset>
<legend>Student info</legend>
<table>

<tr> 
<td>First name: </td>
<td> <input id= 'fname' type='text' name='Fname' >
</tr>

<tr> 
<td>Middle name: </td>
<td> <input id ='mname'type='text' name='Mname' >
</tr>

<tr> 
<td>Last name: </td>
<td> <input id='lname' type='text' name='Lname' >
</tr>

<tr> 
<td>Gender </td>

<td> 
<input id ='gender' type='radio' name='Gender' value='Male'	> Male <br>
<input id='gender' type='radio' name = 'Gender' value= 'Female'> Female
</td>

</tr>

<tr> 
<td>Age </td>
<td> <input id='age' type='number' name='Age' min='1' max='30'>
</tr>
<tr> 
<td>Class </td>
<td>
 <select id='class' name= 'Class'>
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
<td><input id ='submit' type= 'submit' value='Submit'></td>
</tr>

</table>
</fieldset>
</form>
</body>

<script src ="JS/jquery-3.2.1.min.js" ></script>

 <script>

// $(document).ready(function(){
    // $("#submit").click(function(){
		// var fn=$("#fname").val();
		// //console.log(name);
		// if(fn==''){
			// alert ("Enter First name");
		// }
		
		// var ln = $("#lname").val();
		// //console.log(password);
		// if(ln ==''){
			// alert("Enter last name");
		// }
			
		// var ag=$("#age").val();
		// //console.log(email);
		// if(ag==''){
			// alert("Enter age");
		// }
		
		// var gen=$("input[name=Gender]:checked").val();
		// alert(gen);
		// //console.log(email);
		// if(gen==''){
			// alert("Enter gender");
		// }
		
		// var cl=$("input[name=Class]:selected").val();
		// alert(cl);
		// //console.log(email);
		// if(cl==''){
			// alert("Enter class");
		// }
		
		
		
		
		
        
    // });
// });




// </script>




</html>