<!DOCTYPE html>
<html>
<head><title>Lab Task 3 LOGIN</title>
    <style type="text/css">
        .red{
            color: red;
        }
    </style>
</head>
<body>

<?php
$nameErr = $passErr ="";

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $pass = $_POST["pass"];

  if (empty($name)) {
    $nameErr = "Name is required";
   } 
  else {
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only alpha numeric characters, period, dash or underscore are allowed";
      $name = "";
    }
    else{
      if(strlen($name)<2){
          $nameErr = "Must contain at least two (2) characters";
          $name = "";
        }
      }
    }

   if (empty($pass)) {
    $passErr = "Password is required";
   } 
  else {
    $specialChars = preg_match('@[^\w]@', $pass);

    if(!$specialChars || strlen($pass) < 8){
      $passErr = "Must contain at least one of the special characters (@, #, $, %) and minimum eight (8) characters ";
      $pass = "";
    }
  }
}

?>
<div align="center" class="container" style="Width:700px">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
 <fieldset align="center">
  <legend><b>LOGIN</b></legend>

  <label for="name">User Name</label>
  <input type="text" name="name" placeholder="Enter your username">
  <span class="red">*<?php echo $nameErr ?></span><br><br>
  
  <label for="pass">Password</label>
  <input type="text" name="pass" placeholder="Enter your password">
  <span class="red">*<?php echo $passErr ?></span><br><br>
  <span class="underline">__________________________________</span><br><br>

  <input type="checkbox" name="remember_me">
   <label for="remember_me">Remember Me</label><br>

  <input type="submit" name="submit" value="Submit">
  <a href="https://www.google.com/">Forgot Password?</a>
 </fieldset>
</form>
</div>

</body>
</html>