<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
      function validform(){  

        var User=document.form.username.value;
        var Pass=document.form.password.value;
        let flag= true;
        if(User==null || User=="")
        {
          document.getElementById("usernameErr").innerHTML = "UserName can't be blank";
        document.getElementById("username").style.borderColor = "red";
        flag=false;
        }
        if(Pass==null || Pass=="")
        {
          document.getElementById("passwordErr").innerHTML = "Password can't be blank";
        document.getElementById("password").style.borderColor = "red";
        flag=false;
        }
        if(flag)
        return true;
        else 
        return false;
      }
    </script>
</head>
<body style="background-color:#dcfff9">

<?php
    include "NavBar.php";
    ?> 
 
  </h3>
    <br>
    <fieldset>
    <legend > <h2> LOGIN </h2> </legend>
    <form name="form" method="post" action="Controller/Checkuser.php" onsubmit="return validform();"> 
    <b> <label for="username"> UserName : </label> </b>
    <input type="text" name="username" id="username"value="<?php echo $username;?>">
    <p id="usernameErr"></p>
    <br>
    <b> <label for="password"> Password : </label> </b>
    <input type="password" name="password" id="password" value="<?php echo $password;?>">
    <p id="passwordErr"></p>
    <br>  
    <div>
    <hr>
    <input type="checkbox" name="Remember me"> Remember Me <br><br>
    <input type="submit" name="submit" value="Submit"> 
    <a href="Forgetpass.php">Forgot Password?</a><br>
    </div>
    </form><br>      
    <hr>
    </div>
    </fieldset>

    <?php
    include "Footer.php";
    ?> 

</body> 
</html>