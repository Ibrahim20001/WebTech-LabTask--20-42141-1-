<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
<title> Edit Profile </title>
    <style>
     .error {color: #FF0000;}
    </style>
</head>
<body>
    <fieldset>
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
           // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $date_of_birthErr = "";
        $name = $email = $gender = $date_of_birth = ""; 
		$update=false;

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
             if (empty($_POST["name"])) 
		     {
               $nameErr = "Name is required!";
             } 
		  
		    else 
		    {
               $name = test_input($_POST["name"]);
		
		       // contains minimum word
		    
               // check if name only contains letters and whitespace , period
                if(!preg_match("/^[a-zA-Z-'. ]*$/",$name)) 
		        {
                 $nameErr = "Only letters and white space allowed!";
                }
            }
  
            if(empty($_POST["email"])) 
		    {
                $emailErr = "Email is required!";
            } 
		   else 
		   {
               $email = test_input($_POST["email"]);
	  
             // check if e-mail address is well-formed
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		       {
                  $emailErr = "Invalid email format and must be in anything@example.Com! ";
               }
            }
    
	         if(empty($_POST["gender"])) 
		    {
               $genderErr = "Gender is required!";
            } 
		    else 
		    {
             $gender = test_input($_POST["gender"]);
            }
	      
	        if(empty($_POST["date_of_birth"])) 
		    {
                $date_of_birthErr = "Date of birth is required!";
            } 
		    else 
		    {
               $date_of_birth = test_input($_POST["date_of_birth"]); 
            }
           
         if($nameErr!="" && $genderErr!="" && $emailErr!="" && $date_of_birthErr!="")
         {
          
           $update=false;
         }
         else
         {
            $data = file_get_contents("Data.json");  
            $data = json_decode($data, true);  
          
            foreach($data as $row)  
            {   
              if($row["username"]==$_SESSION["username"])
              {
                $row["name"]=$name;
                $row["email"]=$email;
                $row["gender"]=$gender;
                $row["dob"]=$date_of_birth;
                $update=true;
                json_encode($row);
                  break;
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
          <fieldset>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  <fieldset>
		  
		       <legend align="center"><h1> EDIT PROFILE </h1></legend>
		       <p align="center">
		  
		       <b> <p align="center"> <label for="name"> Name : </label> </b> 
			   <input type="text" name="name" value="<?php echo $name;?>"> 
			   <span class="error"> * <?php echo $nameErr; ?> </span> 
               <hr>
			  
			    <b> <p align="center"> <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"> * <?php echo $emailErr;?></span> 
                <hr>

		        <b> <p align="center"> <label for="gender"> Gender : </label></b>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other  
                <span class="error"> * <?php echo $genderErr;?></span> 
                <hr>
		  
	            <b><p align="center"> <label for="date_of_birth"> Date Of Birth : </label> </b>
                <input type="date" name="date_of_birth" value="<?php echo $date_of_birth;?>">
		        <span class="error"> * <?php echo $date_of_birthErr;?></span>
                <hr> 
 
                 <h3 align="center"><input type="submit" name="submit" value="Submit"> </h3>
				  <hr>
          </p>
				
				</fieldset>
                </form> <br>
                <?php
                if($update)
               echo "<b> Profile Update Sucsessfully</b> <br>";
                ?>
    <?php
    include "Footer.php";
    ?> 
</fieldset>
</body>
</html>