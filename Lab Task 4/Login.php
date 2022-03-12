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
    <style type="text/css">
        .red{
            color: red;
        }
    </style>
</head>
<body> 
    <fieldset>
        <?php
        include "NavBar.php";
	
         // define variables and set to empty values
        $usernameErr = $passwordErr = "" ;
        $username = $password = ""  ; 
		$isuserok=false;
        $ispassok=false;

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["username"])) 
		    {
               $usernameErr = "UserName is required!";
            } 
		  
		    else 
		    {
               $username = test_input($_POST["username"]);
		
               // check if name only contains letters and whitespace , period
                if(!preg_match("/^[a-zA-Z-_ ]*$/",$username)) 
		        {
                 $usernameErr = " User Name can contain alpha numeric characters, period, dash or underscore only!";
                }
				
				// contains minimum char
					
		        if(strlen($_REQUEST["username"]) < 2)   				   
		         {
                   $usernameErr = "UserName contains at least 2 char!";
                 }

                 if(empty($usernameErr))
                 {
                    $data = file_get_contents("Data.json");  
                    $data = json_decode($data, true);  
                    foreach($data as $row)  
                    {   
                      if($row["username"]==$username)
                      {
                          $isuserok=true;
                          break;
                      } 
                          
                    }  
                }
            }
			


            if(empty($_POST["password"])) 
		    {
                $passwordErr = "Password is required!";
            } 
			else 
			    {    
		           $password = test_input($_POST["password"]);
				   
					
                    if(strlen($password)<8)
		            {
                       $passwordErr = "Password must not be less than 8 char ";
                    }

					
					if(!preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $_POST["password"])) 
					{
                       $passwordErr = "Password must contain at least 1 special char!"."<br>";
                    }

                    if(empty($passwordErr))
                    {
                       $data = file_get_contents("Data.json");  
                       $data = json_decode($data, true);  
                       foreach($data as $row)  
                       {   
                         if($row["Pass"]==$password)
                         {
                             $ispassok=true;
                             break;
                         } 
                             
                       }  
                    }
			    }      
		}


        function test_input($data) 
		{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>
	       <br>
	       
	       <fieldset>

          <legend > <h2> LOGIN </h2> </legend>
		  
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  
		  
		     <b> <label for="username"> UserName : </label> </b>
			   <input type="text" name="username" value="<?php echo $username;?>">
			   <span class="red">*<?php echo $usernameErr; ?> </span>
               <br><br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="password" name="password" value="<?php echo $password;?>">
                <span class="red">*<?php echo $passwordErr;?></span>
                <br><br>
				
		     <div>
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>

                <input type="submit" name="submit" value="Submit"   > 
                
                <a href="http://">Forgot Password?</a><br>   
             </div>
         </form><br>

           <?php
            if($ispassok==true && $isuserok==true)
            {
                echo "Login Succsessful <br>";
                 
                $data = file_get_contents("Data.json");  
                    $data = json_decode($data, true);  
                    foreach($data as $row)  
                    {   
                      if($row["username"]==$username)
                      {
                        $_SESSION["username"]=$row["username"];
                        $_SESSION["Pass"]=$row["Pass"];
                        $_SESSION["name"]=$row["name"];
                        $_SESSION["email"]=$row["email"];
                        $_SESSION["gender"]=$row["gender"];
                        $_SESSION["dob"]=$row["dob"];
                          break;
                      }    
                    }

               header('location: Dashboard.php');
            }
            else
            {
                $usernameErr= "Incorrect username" ;
                $passwordErr=" Incoorrect Password" ;
            }

           ?>

    <?php
    include "Footer.php";
    ?> 
    </fieldset>    
</body>
</html>

