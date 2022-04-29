<!DOCTYPE html>
<html lang="en">
<head>
    <title>Header</title>
    <style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #339966;
  color: #ffffff;
  padding: 15px;
}
</style>
</head>
<body>
	<div class="header">  
		<p> <h1>
            <span style="color:white"> GADGET MART </span>
            <span style="color:red"><sup> BD</sup></span>
            </h1> </p>
		    <h3 align= "right">
            <a style="color:purple;" href="Home Page.php">  Home |  </a> 
		    <a style="color:purple;" href="Login.php">  Login |  </a>  
		    <a style="color:purple;" href="Registration.php">  Registration </a>
            </h3>
		<hr>  
	</div>       
</body> 
</html>

