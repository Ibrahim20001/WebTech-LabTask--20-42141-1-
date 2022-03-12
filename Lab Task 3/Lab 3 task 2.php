<!DOCTYPE html>
<html>
<head><title>Lab Task 3 Change Password</title>
    <style type="text/css">
        .red{
            color: red;
        }
    </style>
</head>
<body>

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
<div align="center" class="container" style="Width:700px">
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
 </fieldset>
</form>
</div>

</body>
</html>