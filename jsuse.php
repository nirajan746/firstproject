
<html>

<head>
<style>
.aaa{ background-color: red;}
.aa{ color: white;}
.a {color : blue;}
.h:hover {color: yellow; }
.l:hover {color:red;}
</style>
<script src = "jquery-3.2.1.min.js"></script>
</head>
<body>
	<div> 
	<div  class="aaa">
		
		<ul>
		<li ><span class = "h">Fruits</span></li>
		<li><span class = "h">Fruits</span></li>
		<li>Fruits</li>
		</ul>
		
		
	</div>
		<div> 
			<ul> 
			<li><span class = 'l'>Fruits</span> </li>
			<li>Fruits </li>
			<li>Fruits </li>
			<li>Fruits </li>
			<li>Fruits </li>
			<li>Fruits </li>
			</ul>	
		</div>			
	</div> 
	
	
	<p id="test">JavaScript can change HTML content.</p>
	<h1 id="h1">Javascript language first example</h1> 

	<button type="button" onclick='document.getElementById("test").innerHTML = "Hello JavaScript!"'>Click Me!</button>
	<button type="button" onclick='document.getElementById("test").innerHTML = "Javascript can change html content"'>click</button>
	<button class= "h" type="button" onclick = 'document.getElementById("h1").innerHTML="Nice"'> click</button>
	<script>
	
	
	
	</script>
	
	
</body>


</html>