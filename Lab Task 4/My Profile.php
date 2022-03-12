<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<title> My Profile </title>
</head>
<body>
	<fieldset>
		<div>  
		<p><h1>
           <span style="color:green"> GADGET MART </span>
           <span style="color:red"><sup> BD</sup></span>
           </h1>
        </p>
		   <h3 align= "right">
		   	<span> Welcome </span>
           <span style="color:purple"> <?php echo $_SESSION["name"]?> </span>
		   <span><a style="color:purple;" href="Home page.php"> | Logout </a></span>
           </h3>
		<hr>  
	</div>  
			<div>
    <fieldset>
    <legend> <h2> <u> Account </u> </h2></legend><h1 align="center" ><h1/>
            <h2>
            <ul>
                <li> <a style ="color:teal;" href="Dashboard.php">Dashboard </a></li> 
                <li> <a style ="color:teal;" href= "My Profile.php">My Profile</a> </li>
                <li> <a style ="color:teal;" href="Edit Profile.php"> Edit Profile</a> </li>
                <li> <a style ="color:teal;" href="Change Profile Picture Form.php">Change Profile Picture</a> </li>
                <li> <a style ="color:teal;" href="Change Password.php">Change Password</a> </li> 
        </ul>  
        </h2>
  </fieldset>
  </div>
		<div>
			<fieldset><fieldset>
		    <legend align="center"><h1> PROFILE </h1></legend>
			
			<h3 align="center">
		    
			<img  src="1.png" height="200px" width="250px"  > </img> <br>
			<a align="right" href=" "> Change </a> <br><br>

		      Name <span style="color: rgb(255, 255, 255);"> </span>:<?php  echo $_SESSION["name"]?><hr>
	          Email <span style="color: rgb(255, 255, 255);"> </span> : <?php  echo $_SESSION["email"]?> <hr>
		      Gender<span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["gender"]?> <hr>
		      Date of Birth <span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["dob"]?> <hr>

		    <a tyle ="color:SlateBlu;"  href=" "> Edit Profile </a>
			
			</h3>
			</fieldset>
		    </fieldset>
			</div>
	<?php
    include "Footer.php";
    ?> 
	</fieldset>   
</body>
</html>