<!DOCTYPE html>
<html lang="en">
<head>
    <title>Footer</title>
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

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}
</style>
</head>
<body>
    <div class="footer" align="center">
    <h4 > <span> Copyright ©  <?php echo date(2017);?> </span> </h4>
</div>    
</body> 
</html>