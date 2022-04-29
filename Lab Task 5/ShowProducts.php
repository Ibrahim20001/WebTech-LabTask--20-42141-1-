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

<table>
    <tr>
        <th>Name</th>
        <th>Buying Price</th>
        <th>Selling Price</th>
        <th>Image</th>
    </tr>
    <tr>
        <td><a href="ShowProducts.php?id=<?php echo $products['ID'] ?>"><?php echo $products['Name'] ?></a></td>
        <td><?php echo $products['Buying_Price'] ?></td>
        <td><?php echo $products['Selling_Price'] ?></td>
        
        <td><img width="100px" src="Uploads/<?php echo $products['Image'] ?>" alt="<?php echo $products['Name'] ?>"></td>
    </tr>

</table>
</body>
</html>