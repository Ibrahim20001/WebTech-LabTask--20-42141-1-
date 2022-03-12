<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head><title>Change Password</title>
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

<?php
$cpassErr = $npassErr = $rnpassErr ="";

if(isset($_POST["submit"])){
  $cpass = $_POST["cpass"];
  $npass = $_POST["npass"];
  $rnpass = $_POST["rnpass"];

  if (empty($cpass)) {
    $nameErr = "Current Password is required";
   } 
  else {
    if ($cpass != "abc@1234"){
      $cpassErr = "Wrong Password.";
      $cpass = "";
    }
  }

   if (empty($npass)) {
    $npassErr = "New Password is required";
   } 
   else {
    if($npass != $cpass ){
    }
    else{
      $npassErr = "Must not match with current Password. Try different password.";
      $npass = "";
    }
  }

   if (empty($rnpass)) {
    $rnpassErr = "Must Retype New Password";
   } 
  else {
    if($rnpass != $npass ){
      $rnpassErr = "Must match with new Password";
      $rnpass = "";
    }
  }
}

?>
<div align="center" class="container">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
 <fieldset align="center">
  <legend><b>CHANGE PASSWORD</b></legend>

  <label for="cpass">Current Password</label>
  <input type="text" name="cpass">
  <span class="red">*<?php echo $cpassErr ?></span><br><br>
  
  <label for="npass" style="color:green"> New Password</label>
  <input type="text" name="npass">
  <span class="red">*<?php echo $npassErr ?></span><br><br>

  <label for="rnpass" style="color:red">Retype New Password</label>
  <input type="text" name="rnpass">
  <span class="red">*<?php echo $rnpassErr ?></span><br><br>
  <span class="underline">__________________________________</span><br><br>

  <input type="submit" name="submit" value="Submit">
  <hr>

    <?php
    include "Footer.php";
    ?> 
 </fieldset>
</form>
</div>

</body>
</html>