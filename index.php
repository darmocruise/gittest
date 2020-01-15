<html>
<head>
<title>Test App</title>
<script>
/*introducing a multi-line comment into this project*/
function greet(){
    var name = prompt("Enter your name","here");
    if (name=="here")
	alert("hello World !!! ");
	else
	alert("hello World, "+ name+"!!! ");
}
</script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<center>
<h1>Hello world using input dialog</h1>
<input type="button" value="Click Me" onclick='greet()' class="btn btn-success btn-sm">
</center>
</body>
</html>