<html>
<head>


</head>

<body>
<table >
<tr>
<td>Username</td>
<td> <input id = 'username' type='text' name='username'></td>
</tr>

<tr>
<td>Password</td>
<td> <input id='password' type='text' name='password'></td>
</tr>

<tr>
<td>E-mail</td>
<td> <input id= 'email' type='text' name='e-mail'></td>
</tr>

<tr>
<td>Phone No.</td>
<td> <input id ='phone' type='number' name='phone' ></td>
</tr>

<tr>
<td ><input id='submit' type='submit' name='submit'>
</tr>
</table>

<input id='go' type='button' value='Click me' onclick="confirm('Are you sure?');">

</body>
<script src ="JS/jquery-3.2.1.min.js" ></script>

<script>

$(document).ready(function(){
    $("#submit").click(function(){
		var name=$("#username").val();
		console.log(name);
		if(name==''){
			alert ("Enter username");
		}
		
		var pass = $("#password").val();
		console.log(password);
		if(pass ==''){
			alert("Enter password");
		}
			
		var eml=$("#email").val();
		console.log(email);
		if(eml==''){
			alert("Enter e-mail");
		}
		
		var ph=$("#phone").val();
		if(ph==''){
			alert("Enter phone");
		}
		
		
		
        
    });
});


</script>

</html>
