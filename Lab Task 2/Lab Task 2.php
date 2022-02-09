<!DOCTYPE html>
<html>
<head><title>Lab Task 2</title>
    <style type="text/css">
        .red{
            color: red;
        }
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dateErr = $genderErr = $degreeErr = $bgroupErr ="";
$name = $email = $date = $gender = $degree = $bgroup ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["date"])) {
    $website = "";
  } else {
    $website = $_POST["date"];
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
      $websiteErr = "Invalid email format";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required(select any)";
  } else {
    $gender = $_POST["gender"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Select any two degree";
  } else {
    $degree = $_POST["degree"];
  }

  if (empty($_POST["bgroup"])) {
    $bgroupErr = "Blood Group is required";
  } else {
    $bgroup = $_POST["bgroup"];
  }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <fieldset>
  <legend><b>NAME</b></legend>
  <input type="text" id="name" name="name">
  <span class="red">*<?php echo $nameErr ?></span><br><br>
 </fieldset>

 <fieldset>
  <legend><b>EMAIL</b></legend>
  <input type="email" id="email" name="email">
  <span class="red">*<?php echo $emailErr ?></span><br><br>
 </fieldset>

 <fieldset>
  <legend><b>DATE OF BIRTH</b></legend>
  <input type="date" id="date" name="date">
  <span class="red">*<?php echo $dateErr ?></span><br><br>
 </fieldset>

 <fieldset>
  <legend><b>GENDER</b></legend>
  <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male">Male
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female">Female
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="other") echo "checked";?>
    value="other">Other
    <span class="red">*<?php echo $genderErr ?></span><br><br>
 </fieldset>

 <fieldset>
  <legend><b>DEGREE</b></legend>
  <input type="checkbox" name="degree"
    <?php if (isset($degree) && $degree=="ssc") echo "checked";?>
    value="ssc">SSC
    <input type="checkbox" name="degree"
    <?php if (isset($degree) && $degree=="hsc") echo "checked";?>
    value="hsc">HSC
    <input type="checkbox" name="degree"
    <?php if (isset($degree) && $degree=="bsc") echo "checked";?>
    value="bsc">BSc
    <input type="checkbox" name="degree"
    <?php if (isset($degree) && $degree=="msc") echo "checked";?>
    value="msc">MSc<span class="red">*<?php echo $degreeErr ?></span>
    <br><br>
 </fieldset>

 <fieldset>
  <legend><b>BLOOD GROUP</b></legend>
  <select name="bgroup" id="bgroup" placeholder="">
    <option value="" disabled selected hidden></option>
    <option value="a+">A+</option>
    <option value="a-">A-</option>
    <option value="b+">B+</option>
    <option value="b-">B-</option>
    <option value="ab+">AB+</option>
    <option value="ab-">AB-</option>
    <option value="o+">O+</option>
    <option value="o-">O-</option>
  </select><span class="red">*<?php echo $bgroupErr ?></span>
  <br><br>

  <input type="submit" value="Submit">
 </fieldset>
</form>

</body>
</html>