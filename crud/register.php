<html>
<title>
</title>
<head>
<link rel="stylesheet" href="style.css"/>
<style>


</style>

</head>

<body>
<div class="inside">
	<div class="first second">
		<ul>
			<li class="third">first</li>
			<li class="third">Second</li>
			<li class="third">Third</li>
		</ul>
	</div>
</div>


<form action = "controller/studentConnection.php" method="Post">
<fieldset>
<legend>Student info</legend>
	<table>
		<tr> 
			<td>First name: </td>
			<td> <input type='text' name='Fname' required>
		</tr>

		<tr> 
			<td>Middle name: </td>
			<td> <input type='text' name='Mname' required>
		</tr>

		<tr> 
			<td>Last name: </td>
			<td> <input type='text' name='Lname' required>
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
			<td><input type= 'submit' value='Submit'></td>
		</tr>
	</table>
</fieldset>
</form>


<input type = "submit" value = "View!" onclick = "view.php" />
</body>

<script src="jquery.js" ></script>
<script>
$(document).ready(function(){
	console.log("ready");	
	
	$a= $(this).closest(".third");
	$(".third").click(function(){
		alert("clicked");
		console.log($a);
		$(".third").css({"color":"blue"});
	})
});

</script>
</html>