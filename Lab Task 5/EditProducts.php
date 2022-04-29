<?php 

require_once 'Controller/ProductsInfo.php';
$products = fetchProducts($_GET['id']);


 include "NavBar.php";

 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

 <form action="Controller/UpdateProducts.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $products['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="Buy">Buying Price:</label><br>
  <input value="<?php echo $products['Buying_Price'] ?>" type="text" id="Buy" name="Buy"><br>
  <label for="Sell">Selling Price:</label><br>
  <input value="<?php echo $products['Selling_Price'] ?>" type="text" id="Sell" name="Sell"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "UpdateProducts" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>