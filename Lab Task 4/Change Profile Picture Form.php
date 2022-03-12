<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head><title>Change Profile Picture</title>
    <style type="text/css">
        .red{
            color: red;
        }
    </style>
</head>
<body>

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

<div align="center" class="container">
<form action="Lab 3 task 3 Upload.php" method="post" enctype="multipart/form-data">
  <fieldset align="center">
  <legend><b>CHANGE PROFILE PICTURE</b></legend>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
  </fieldset>
</form>
</div>
  <hr>

  <?php
    include "Footer.php";
    ?> 
 </fieldset>
</form>
</div>

</body>
</html>