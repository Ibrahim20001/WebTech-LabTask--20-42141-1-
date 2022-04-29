<!DOCTYPE html>
<html>
  <body>
<?php 
    include "NavBar.php";
?>

    <form method="post" action="Controller/FindProducts.php">
      <h1>SEARCH FOR Products</h1>
      <input type="text" name="id" />
      <input type="submit" name="find" value="Search"/>
    </form>
 
</body>
</html>